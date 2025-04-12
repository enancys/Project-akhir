import React, { useState } from "react";
import { Link, useNavigate } from "react-router-dom";
import axios from 'axios';

const User_preferencesCreate = () => {
    const navigate = useNavigate();
    const [user_preferences, setUser_preferences] = useState({
        user_id: "",
        favorite_categories: "",
        disliked_ingredients: "",
        dietary_restrictions: "",
        favorite_cuisines: "",
    });
    const [error, setError] = useState(null);
    const [successMessage, setSuccessMessage] = useState(null);

    const handleInputChange = (event) => {
        const { name, value } = event.target;
        setUser_preferences({...user_preferences, [name]: value});

        const jsonFields = ['favorite_categories', 'disliked_ingredients', 'dietary_restrictions', 'favorite_cuisines'];

        setUser_preferences({
            ...user_preferences,
            [name]: jsonFields.includes(name)
                ? value.split(',').map(item => item.trim()) 
                : value
        });
    };

    const handleSubmit = (event) => {
        event.preventDefault();
        setError(null); // Reset error saat submit
        setSuccessMessage(null); // Reset success message

        axios.post('http://127.0.0.1:8000/api/user_preferences', user_preferences)
        .then(Response => {
            setSuccessMessage('user_preferences added successfully!');
            setTimeout(() => {
                navigate('/user_preferences');
            }, 1500); // Redirect setelah 1.5 detik
        })
        .catch(Error => {
            console.error('Error adding user_preferences:', Error);
            setError('Failed to add user_preferences. Please check the form data and try again.');
        });
    };

    return (
        <div className="container-fluid">
            <h1 className="h3 text-gray-800 mb-2">Add New user_preferences</h1>
            <Link to="/user_preferences" className="btn btn-secondary mb-2">Back</Link>
            <div className="card shadow mb-4">
                <div className="card-body">
                    {error && <div className="alert alert-danger">{error}</div>}
                    {successMessage && <div className="alert alert-success">{successMessage}</div>}
                    <form onSubmit={handleSubmit}>
                        <div className="form-group">
                            <label>User_id:</label>
                            <input type="text"
                                name="user_id"
                                value={user_preferences.user_id}
                                onChange={handleInputChange}
                                className="form-control"
                                required />
                        </div>
                        <div className="form-group">
                            <label>favorite_categories:</label>
                            <input type="text"
                                name="favorite_categories"
                                value={user_preferences.favorite_categories}
                                onChange={handleInputChange}
                                className="form-control"
                                required />
                        </div>
                        <div className="form-group">
                            <label>disliked_ingredients:</label>
                            <input type="text"
                                name="disliked_ingredients"
                                value={user_preferences.disliked_ingredients}
                                onChange={handleInputChange}
                                className="form-control"
                                required />
                        </div>
                        <div className="form-group">
                            <label>dietary_restrictions:</label>
                            <input type="text"
                                name="dietary_restrictions"
                                value={user_preferences.dietary_restrictions}
                                onChange={handleInputChange}
                                className="form-control"
                                required/>
                        </div>
                        <div className="form-group">
                            <label>favorite_cuisines:</label>
                            <input type="text"
                                name="favorite_cuisines"
                                value={user_preferences.favorite_cuisines}
                                onChange={handleInputChange}
                                className="form-control"
                                required />
                        </div>
                        <button type="submit" className="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    );
};

export default User_preferencesCreate;