import React, { useState, useEffect } from "react";
import axios from "axios";
import { Link } from "react-router-dom";

const Foods_ingredientsIndex = () => {
    const [food_ingredients, setFood_ingredients] = useState([]);
    const loadFood_ingredients = () => {
        axios.get('http://127.0.0.1:8000/api/food_ingredient')
        .then(Response => {
            setFood_ingredients(Response.data);
        })
        .catch(Error => {
            alert('Eror Fetching Data: ', Error);
        });
    };

    const handleDelete = (id) => {
        if(window.confirm('Are you sure want to delete this data food_ingredients?')) {
            axios.delete(`http://127.0.0.1:8000/api/food_ingredient/${id}`)
            .then(() => {
                alert('Data deleted successfully');
                loadFood_ingredients();
            })
            .catch(Error => {
                alert('Error deleting the data: ', Error);
            });
        }
    };

    useEffect(() => {
        loadFood_ingredients();
    }, []);

    return (
        <div className="container-fluid">
            <h1 className="h3 text-bg-gray-800 mb-2">food_ingredients Data</h1>
            <Link to="/food_ingredients/create" className="btn btn-primary mb-2">Create</Link>
            <div className="card shadow mb-4">
                <div className="card-body">
                    <div className="table-responsive" style={{ overflowX: 'auto', maxHeight: '600px' }}>
                        <table className="table table-bordered" width="100%" cellSpacing="0">
                            <thead>
                                <tr>
                                    <th>Food_id</th>
                                    <th>Ingredient_id</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {food_ingredients.map((food_ingredientss, index) => (
                                    <tr key={index}>
                                        <td>{food_ingredientss.food_id}</td>
                                        <td>{food_ingredientss.ingredient_id}</td>
                                        <td>
                                            <Link to={`/food_ingredients/update/${food_ingredientss.food_id}`} className="btn btn-sm btn-info">Edit</Link>
                                            <button 
                                                onClick={() => handleDelete(food_ingredientss.food_id)}
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


export default Foods_ingredientsIndex;