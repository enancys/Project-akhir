import React, { useState, useEffect, useCallback } from "react";
import { useParams, useNavigate } from "react-router-dom";
import axios from "axios";

const UserUpdate = () => {
    const { id } = useParams();
    const navigate = useNavigate();
    console.log('User ID:', id);
    const [userData, setUserData] = useState({
        name: "",
        email: "",
        password: ""
    });

    const getUser = useCallback(() => {
        axios.get(`http://127.0.0.1:8000/api/user/${id}`)
        .then(Response => {
            const { name, email, password } = Response.data;
            setUserData({ name, email, password });
        })
        .catch(Error => {
            alert('Error fetching user details: ', Error);
        });
    }, [id]);

    useEffect(() => {
        getUser();
    }, [getUser]);

    const handleInputChange = (event) => {
        const { name, value } = event.target;
        setUserData(prevState => ({
            ...prevState,
            [name]: value
        }));
    };

    const handleSubmit = (event) => {
        event.preventDefault();
        axios.put(`http://127.0.0.1:8000/api/user/${id}`, userData)
        .then(Response => {
            alert('User updated successfully: ', Response.data);
            navigate('/user');
        })
        .catch(Error => {
            console.error('Error updating user: ', Error);
        });
    }

    return (
        <div className="container-fluid">
            <h1 className="h3 text-gray-800 mb-2">Edit Book</h1>
            <div className="card shadow mb-4">
                <div className="card-body">
                    <form onSubmit={handleSubmit}>
                        <div className="form-group">
                            <label>Name:</label>
                            <input type="text"
                                name="name"
                                value={userData.name}
                                onChange={handleInputChange}
                                className="form-control"
                                required/>
                        </div>
                        <div className="form-group">
                            <label>Email:</label>
                            <input type="text"
                                name="email"
                                value={userData.email}
                                onChange={handleInputChange}
                                className="form-control"
                                required/>
                        </div>
                        <div className="form-group">
                            <label>Password:</label>
                            <input type="text"
                                name="password"
                                value={userData.password}
                                onChange={handleInputChange}
                                className="form-control"
                                required/>
                        </div>
                        <button type="submit"
                            className="btn btn-primary">Update
                        </button>
                    </form>
                </div>
            </div>
        </div>
    );
};

export default UserUpdate;