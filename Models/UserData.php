<?php

class UserData
{
    protected $_id, $_email, $_password, $_name;

    public function __construct($dbRow) {
        $this->_id = $dbRow['userID'];
        $this->_email = $dbRow['email'];
        $this->_password = $dbRow['password'];
        $this->_name = $dbRow['name'];
    }

    public function getID() {
        return $this->_id;
    }
    public function getEmail() {
        return $this->_email;
    }
    public function getPassword() {
        return $this->_password;
    }
    public function getName() {
        return $this->_name;
    }
}