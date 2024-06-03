<?php

if (isset($_REQUEST['submit'])) {
    // get the DATA from the Inputs.
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];

    // Create the instances
    require_once "../../database/db.php";
    require_once "../models/LoginModel.php";
    require_once "../controllers/LoginController.php";

    $lc = new LoginController($email, $password);
    $lc->LoginUser();
}
