import React from "react";
import { Routes, Route } from "react-router-dom";
import Dashboard from "./pages/Dashboard";
import UserIndex from "./pages/UserIndex";
import UserCreate from "./pages/UserCreate";
import UserUpdate from "./pages/UserUpdate";
import CuisinesIndex from "./pages/CuisinesIndex";
import CuisinesCreate from "./pages/CuisinesCreate";
import CuisinesUpdate from "./pages/CuisinesUpdate";
import RestaurantsIndex from "./pages/RestaurantsIndex";
import RestaurantsCreate from "./pages/RestaurantsCreate";
import RestaurantsUpdate from "./pages/RestaurantsUpdate";
import FoodsIndex from "./pages/FoodsIndex";
import FoodsCreate from "./pages/FoodsCreate";
import FoodsUpdate from "./pages/FoodsUpdate";
import User_preferencesIndex from "./pages/User_preferencesIndex";
import User_preferencesCreate from "./pages/User_preferencesCreate";
import User_preferencesUpdate from "./pages/User_preferencesUpdate";
import IngredientsIndex from "./pages/IngredientsIndex";
import IngredientsCreate from "./pages/IngredientsCreate";
import IngredientsUpdate from "./pages/IngredientsUpdate";
import Foods_ingredientsIndex from "./pages/Food_ingredientsIndex";
import Food_ingredientsCreate from "./pages/Food_ingredientsCreate";
import Food_ingredientsUpdate from "./pages/Food_ingredientsUpdate";
import Restaurant_foodsIndex from "./pages/Restaurant_foodsIndex";
import Restaurant_foodsCreate from "./pages/Restaurant_foodsCreate";
import Restuarnt_foodsUpdate from "./pages/Restaurant_foodsUpdate";
import RatingsIndex from "./pages/RatingsIndex";
import RatingsCreate from "./pages/RatingsCreate";
import RatingsUpdate from "./pages/RatingsUpdate";

const routesConfig = [
    { path: "/", component: Dashboard   },
    { path: "/user", component: UserIndex },
    { path: "/user/create", component: UserCreate },
    { path: "/user/update/:id", component: UserUpdate },
    { path: "/cuisines", component: CuisinesIndex },
    { path: "/cuisines/create", component: CuisinesCreate },
    { path: "/cuisines/update/:id", component:  CuisinesUpdate},
    { path: "/restaurants", component: RestaurantsIndex },
    { path: "/restaurants/create", component: RestaurantsCreate },
    { path: "/restaurants/update/:id", component:  RestaurantsUpdate},
    { path: "/foods", component: FoodsIndex },
    { path: "/foods/create", component: FoodsCreate },
    { path: "/foods/update/:id", component:  FoodsUpdate},
    { path: "/user_preferences", component: User_preferencesIndex },
    { path: "/user_preferences/create", component: User_preferencesCreate },
    { path: "/user_preferences/update/:id", component:  User_preferencesUpdate},
    { path: "/ingredients", component: IngredientsIndex },
    { path: "/ingredients/create", component: IngredientsCreate },
    { path: "/ingredients/update/:id", component:  IngredientsUpdate},
    { path: "/food_ingredients", component: Foods_ingredientsIndex },
    { path: "/food_ingredients/create", component: Food_ingredientsCreate },
    { path: "/food_ingredients/update/:id", component:  Food_ingredientsUpdate},
    { path: "/restaurant_foods", component: Restaurant_foodsIndex },
    { path: "/restaurant_foods/create", component: Restaurant_foodsCreate },
    { path: "/restaurant_foods/update/:id", component:  Restuarnt_foodsUpdate},
    { path: "/ratings", component: RatingsIndex },
    { path: "/ratings/create", component: RatingsCreate },
    { path: "/ratings/update/:id", component:  RatingsUpdate},



];

const AppRoutes = () => {
    return (
        <Routes>
            {routesConfig.map((route, index) => (
                <Route
                    key={index}
                    path={route.path}
                    element={<route.component />}
                />
            ))}
        </Routes>
    );
};

export default AppRoutes;
