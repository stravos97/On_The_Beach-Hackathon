<?php
/**
 * Created by PhpStorm.
 * User: abdi21.aj
 * Date: 06/04/2019
 * Time: 16:18
 */

require_once ('Database.php');
require_once ('ImageData.php');

class ImageDataSet
{
    protected $_dbHandle, $_dbInstance;

    public function __construct() {
        $this->_dbInstance = Database::getInstance();
        $this->_dbHandle = $this->_dbInstance->getdbConnection();
    }

    public function insertLocation($_id, $_userID, $_locID) {
        $sqlQuery = "INSERT INTO image VALUES ('$_id', '$_userID', '$_locID')";

        $statement = $this->_dbHandle->prepare($sqlQuery); // prepare a PDO statement
        $statement->execute(); // execute the PDO statement
    }

    public function getImage() {
        $sqlQuery = "SELECT * FROM image";

        $statement = $this->_dbHandle->prepare($sqlQuery); // prepare a PDO statement
        $statement->execute(); // execute the PDO statement

        $image = [];
        while ($row = $statement->fetch()) {     //fetches the next row matching the query
            $image[] = new ImageData($row);
        }
        return $image;
    }
}