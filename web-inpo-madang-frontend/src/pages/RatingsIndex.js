import React, { useState, useEffect } from "react";
import axios from "axios";
import { Link } from "react-router-dom";

const RatingsIndex = () => {
    const [ratings, setRatings] = useState([]);
    const loadRatings = () => {
        axios.get('http://127.0.0.1:8000/api/ratings')
        .then(Response => {
            setRatings(Response.data);
        })
        .catch(Error => {
            alert('Eror Fetching Data: ', Error);
        });
    };

    const handleDelete = (id) => {
        if(window.confirm('Are you sure want to delete this data ratings?')) {
            axios.delete(`http://127.0.0.1:8000/api/ratings/${id}`)
            .then(() => {
                alert('Data deleted successfully');
                loadRatings();
            })
            .catch(Error => {
                alert('Error deleting the data: ', Error);
            });
        }
    };

    useEffect(() => {
        loadRatings();
    }, []);

    return (
        <div className="container-fluid">
            <h1 className="h3 text-bg-gray-800 mb-2">ratings Data</h1>
            <Link to="/ratings/create" className="btn btn-primary mb-2">Create</Link>
            <div className="card shadow mb-4">
                <div className="card-body">
                    <div className="table-responsive" style={{ overflowX: 'auto', maxHeight: '600px' }}>
                        <table className="table table-bordered" width="100%" cellSpacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>User_ID</th>
                                    <th>Food_id</th>
                                    <th>rating</th>
                                    <th>Website_url</th>
                                    <th>Opening_hours</th>
                                    <th>Cuisines_ID</th>
                                    <th>Rating</th>
                                    <th>Image_url</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {ratings.map((ratingss, index) => (
                                    <tr key={index}>
                                        <td>{ratingss.id}</td>
                                        <td>{ratingss.user_id}</td>
                                        <td>{ratingss.food_id}</td>
                                        <td>{ratingss.rating}</td>
                                        <td>
                                            <Link to={`/ratings/update/${ratingss.id}`} className="btn btn-sm btn-info">Edit</Link>
                                            <button 
                                                onClick={() => handleDelete(ratingss.id)}
                                                className="btn btn-sm btn-danger ml-1">Delete</button>
                                        </td>
                                    </tr>
                                ))}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    );
};


export default RatingsIndex;