import React from "react";
import { Switch, Route } from "react-router-dom";
import AdminPage from "../pages/AdminPage";
import HomePage from "../pages/HomePage";
import LoginPage from "../pages/LoginPage";
import RegisterPage from "../pages/RegisterPage";

const Routes = () => {
  return (
    <Switch>
      <Route path="/" exact>
        <HomePage />
      </Route>
      <Route path="/login" exact>
        <LoginPage />
      </Route>
      <Route path="/register" exact>
        <RegisterPage />
      </Route>
      <Route path="/home" exact>
        <AdminPage />
      </Route>
    </Switch>
  );
};

export default Routes;
