<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of banner
 *
 * @author Suharshana DsW
 */
class Banner {

    public $id;
    public $title;
    public $image_name;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT `id`,`title`,`image_name` FROM `banner` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysql_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->title = $result['title'];
            $this->image_name = $result['image_name'];


            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `banner` (`title`,`image_name`) VALUES  ('"
                . $this->title . "','"
                . $this->image_name . "')";


        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            $last_id = mysql_insert_id();

            return $this->__construct($last_id);
        } else {
            return FALSE;
        }
    }

    public function all() {

        $query = "SELECT * FROM `banner`";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `banner` SET "
                . "`title` ='" . $this->title . "', "
                . "`image_name` ='" . $this->image_name . "' "
                . "WHERE `id` = '" . $this->id . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return $this->__construct($this->id);
        } else {
            return FALSE;
        }
    }

    public function delete() {

        $query = 'DELETE FROM `banner` WHERE id="' . $this->id . '"';
   
        unlink(Helper::getSitePath() . "upload/banner/" . $this->image_name);
        
        $db = new Database();

        return $db->readQuery($query);
    }

}
