<?php
session_start();
$view = new stdClass();
$view->title = "Profile";
require_once ('Views/profile.phtml');
?>