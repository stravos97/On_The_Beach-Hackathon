<?php
/**
 * Created by PhpStorm.
 * User: abdi21.aj
 * Date: 06/04/2019
 * Time: 16:16
 */

class ImageData
{
    protected $_id, $_name, $_userID, $_locID;

    public function __construct($dbRow)
    {
        $this->_id = $dbRow['imageID'];
        $this->_name = $dbRow['image_name'];
        $this->_userID = $dbRow['user_id'];
        $this->_locID = $dbRow['loc_id'];
    }

    public function getID()
    {
        return $this->_id;
    }
    public function getName()
    {
        return $this->_name;
    }

    public function getUserID()
    {
        return $this->_userID;
    }

    public function getLocationID()
    {
        return $this->_locID;
    }
}