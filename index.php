<?php
session_start();
$view = new stdClass();
//unset($_SESSION['email']);
$view->pageTitle = 'Homepage';
require_once('Views/index.phtml');