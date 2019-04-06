<?php

require_once ('Database.php');
require_once ('UserData.php');

class UsersDataSet
{
    protected $_dbHandle, $_dbInstance;

    public function __construct() {
        $this->_dbInstance = Database::getInstance();
        $this->_dbHandle = $this->_dbInstance->getdbConnection();
    }

    public function fetchOneUser($email, $password) {
        $sqlQuery = "SELECT * FROM users WHERE email='$email' and password = '$password' ";
        $statement = $this->_dbHandle->prepare($sqlQuery); // prepare a PDO statement
        $statement->execute(); // execute the PDO statement

        $user = [];
        while ($row = $statement->fetch()) {     //fetches the next row matching the query
            $user[] = new UserData($row);
        }
        return $user;
    }

}
