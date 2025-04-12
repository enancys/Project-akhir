import React, { useState } from "react";
import { Link, useNavigate } from "react-router-dom";
import axios from 'axios';

const Food_ingredientsCreate = () => {
    const navigate = useNavigate();
    const [food_ingredientsData, setFood_ingredientsData] = useState({
        food_id: "",
        ingredient_id: "",
    });
    const [error, setError] = useState(null);
    const [successMessage, setSuccessMessage] = useState(null);

    const handleInputChange = (event) => {
        const { name, value } = event.target;
        setFood_ingredientsData({...food_ingredientsData, [name]: value});
    };

    const handleSubmit = (event) => {
        event.preventDefault();
        setError(null); // Reset error saat submit
        setSuccessMessage(null); // Reset success message

        axios.post('http://127.0.0.1:8000/api/food_ingredient', food_ingredientsData)
        .then(Response => {
            setSuccessMessage('food_ingredient added successfully!');
            setTimeout(() => {
                navigate('/food_ingredients');
            }, 1500); // Redirect setelah 1.5 detik
        })
        .catch(Error => {
            console.error('Error adding food_ingredient:', Error);
            setError('Failed to add food_ingredient. Please check the form data and try again.');
        });
    };

    return (
        <div className="container-fluid">
            <h1 className="h3 text-gray-800 mb-2">Add New food_ingredient</h1>
            <Link to="/food_ingredient" className="btn btn-secondary mb-2">Back</Link>
            <div className="card shadow mb-4">
                <div className="card-body">
                    {error && <div className="alert alert-danger">{error}</div>}
                    {successMessage && <div className="alert alert-success">{successMessage}</div>}
                    <form onSubmit={handleSubmit}>
                        <div className="form-group">
                            <label>Food_id:</label>
                            <input type="text"
                                name="food_id"
                                value={food_ingredientsData.food_id}
                                onChange={handleInputChange}
                                className="form-control"
                                required />
                        </div>
                        <div className="form-group">
                            <label>Ingredient_id:</label>
                            <input type="text"
                                name="ingredient_id"
                                value={food_ingredientsData.ingredient_id}
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

export default Food_ingredientsCreate;