<?php

require_once ('Database.php');
require_once ('LocationData.php');

class LocationDataSet
{
    protected $_dbHandle, $_dbInstance;

    public function __construct() {
        $this->_dbInstance = Database::getInstance();
        $this->_dbHandle = $this->_dbInstance->getdbConnection();
    }

    public function insertLocation($_id, $_place, $_description, $_latitude, $_longitude) {
        $sqlQuery = "INSERT INTO locations VALUES ('$_id', '$_place', '$_description', '$_latitude', '$_longitude')";

        $statement = $this->_dbHandle->prepare($sqlQuery); // prepare a PDO statement
        $statement->execute(); // execute the PDO statement
    }

    public function getLocation() {
        $sqlQuery = "SELECT * FROM locations";

        $statement = $this->_dbHandle->prepare($sqlQuery); // prepare a PDO statement
        $statement->execute(); // execute the PDO statement

        $locations = [];
        while ($row = $statement->fetch()) {     //fetches the next row matching the query
            $locations[] = new LocationData($row);
        }
        return $locations;
    }

    public function checkVisited($userID, $locationID) {
        $sqlQuery = "SELECT * FROM hasVisited where userID = '$userID' and locationID = '$locationID' ";

        $statement = $this->_dbHandle->prepare($sqlQuery); // prepare a PDO statement
        $statement->execute(); // execute the PDO statement

        $count = $statement->rowCount();
        if ($count > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function insertHasVisited($vistID, $user_ID, $location_ID) {
        $sqlQuery = "INSERT INTO locations VALUES ('$vistID', '$user_ID', 'location_ID')";

        $statement = $this->_dbHandle->prepare($sqlQuery); // prepare a PDO statement
        $statement->execute(); // execute the PDO statement
    }
}