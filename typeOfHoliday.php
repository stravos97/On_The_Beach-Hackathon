<?php
session_start();
if(isset($_POST['submit'])) {
    $user_details = [];
    $user_details['typeOfHoliday'] = $_POST['typeOfHoliday'];
    $user_details['destination'] = $_POST['destination'];
    $user_details['foodPreference'] = $_POST['preference1'];
    $user_details['duration'] = $_POST['duration'];
    $user_details['hobbies'] = $_POST['hobbies1'];
//    var_dump($user_details);

    $_SESSION['user_details'] = $user_details;
    header('location: profile.php');
}
require_once ('Views/typeOfHoliday.phtml');
?>