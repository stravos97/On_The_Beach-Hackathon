<?php
session_start();
$view = new stdClass();
$view->pageTitle = 'Log in';

if (isset($_SESSION['email']) ) {
    header("location: index.php");
}

require_once ("Models/UsersDataSet.php");
$view->errors = array();

if (isset($_POST["login"])) {
    $typedUsername = $_POST["username"];
    $typedPassword = $_POST["password"];

    $userDataSet = new UsersDataSet();
    $user = $userDataSet-> fetchOneUser($typedUsername);

    if (count($user) == 1) {        //checking to see if the user exists
        $encryptedPassword = $user[0]->getPassword();
        $testPassHash = password_verify($typedPassword, $encryptedPassword);        //check if the password is correct
        if ($testPassHash == true) {
            $userType = $user[0]->checkUser();
            $_SESSION[$userType] = $typedUsername;      //create the authorisation session
            $_SESSION['email'] = $typedUsername;        //session with username
            header('location: index.php');
        } else {
            array_push($view->errors, "Username/Password did not match. Please try again!");
        }
    } else {
        array_push($view->errors, "Username/Password did not match. Please try again!");
    }
}

require_once('Views/login.phtml');