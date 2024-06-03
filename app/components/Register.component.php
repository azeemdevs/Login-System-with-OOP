<?php

if (isset($_REQUEST['submitBtn'])) {
    // get the DATA from the Inputs.
    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];
    $confirm_password = $_REQUEST["confirm_password"];

    // Create the instances
    require_once  "../../database/db.php";
    require_once  "../models/RegisterModel.php";
    require_once  "../controllers/RegisterController.php";

    $rc = new RegisterController($name, $email, $password, $confirm_password);
    $rc->registerUser();
}
