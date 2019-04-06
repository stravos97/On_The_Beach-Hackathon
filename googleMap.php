<?php
session_start();
$view = new stdClass();
$view->pageTitle = 'Google Map';
require_once('Views/googleMapAPI.phtml');