<?php

$view = new stdClass();
$view->pageTitle = 'Homepage';

//require_once('Models/CampsiteDataSet.php');

//$campsiteSites = new CampsiteDataSet();    // create a campsite data set object as usual
//$camsiteList = $campSites.getCampsiteLocations();  // returns an array of campsite records
//$view->locations = json_decode($camsiteList);  // parses the PHP into JSON array syntax






$view->locations = [
    ['Manly Beach', -33.80010128657071, 151.28747820854187, 2,'ManlyBeach.jpg'],
    ['Bondi Beach', -33.890542, 151.274856, 4, 'ManlyBeach.jpg'],
    ['Coogee Beach', -33.923036, 151.259052, 5, 'ManlyBeach.jpg'],
    ['Maroubra Beach', -33.950198, 151.259302, 1, 'ManlyBeach.jpg'],
    ['Cronulla Beach', -34.028249, 151.157507, 3, 'ManlyBeach.jpg']
];





//require_once('googlemapmultiplepinswithroute.phtml');


require_once('Views/treasureHunt.phtml');
