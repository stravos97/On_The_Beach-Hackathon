<?php

$view = new stdClass();
$view->pageTitle = "login Page";

require_once("Models/UsersDataSet.php");
$userDataSet = new UsersDataSet();

$view->errors = array();

if (isset($_POST["login-submit"])) {

    if (isset($_POST["mail"])) {
        $typedUsername = $_POST["mail"];
    }
    if (isset($_POST["pwd"])) {
        $typedPassword = $_POST["pwd"];
    }

    $user = $userDataSet-> fetchOneUser($typedUsername, $typedPassword);

    if (count($user) == 1) {                        //checking to see if the user exists
        $_SESSION['email'] = $typedUsername;        //session with username
        header('location: typeOfHoliday.php');
    } else {
        array_push($view->errors, "Username/Password did not match. Please try again!");
    }
}

require_once('Views/login.phtml');