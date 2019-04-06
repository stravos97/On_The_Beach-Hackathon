<?php

class LocationData
{
    protected $_id, $_place, $_description, $_latitude, $_longitude;

    public function __construct($dbRow) {
        $this->_id = $dbRow['locationID'];
        $this->_place = $dbRow['place'];
        $this->_description = $dbRow['description'];
        $this->_latitude = $dbRow['latitude'];
        $this->_longitude = $dbRow['longitude'];
    }

    public function getID() {
        return $this->_id;
    }
    public function getPlace() {
        return $this->_place;
    }
    public function getDescription() {
        return $this->_description;
    }
    public function getLatitude() {
        return $this->_latitude;
    }
    public function getLongitude() {
        return $this->_longitude;
    }
}