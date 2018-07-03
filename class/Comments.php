<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Comments
 *
 * @author Suharshana DsW
 */
class Comments {

    public $id;
    public $name;
    public $title;
    public $image_name;
    public $comment;
    public $is_active;
    public $queue;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT `id`,`name`,`title`,`image_name`,`comment`,`is_active`,`queue` FROM `comments` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysql_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->name = $result['name'];
            $this->title = $result['title'];
            $this->image_name = $result['image_name'];
            $this->comment = $result['comment'];
            $this->is_active = $result['is_active'];
            $this->queue = $result['queue'];

            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `comments` (`name`,`title`,`image_name`,`comment`,`is_active`,`queue`) VALUES  ('"
                . $this->name . "','"
                . $this->title . "','"
                . $this->image_name . "', '"
                . $this->comment . "', '"
                . $this->is_active . "', '"
                . $this->queue . "')";

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

        $query = "SELECT * FROM `comments` ORDER BY queue ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `comments` SET "
                . "`name` ='" . $this->name . "', "
                . "`title` ='" . $this->title . "', "
                . "`image_name` ='" . $this->image_name . "', "
                . "`comment` ='" . $this->comment . "', "
                . "`is_active` ='" . $this->is_active . "', "
                . "`queue` ='" . $this->queue . "' "
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

        $query = 'DELETE FROM `comments` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }
    
        public function activeComments() {

        $query = "SELECT * FROM `comments` WHERE is_active = '1'";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }
    
          public function pendingComments() {

        $query = "SELECT * FROM `comments` WHERE is_active = '0'";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }
    
    
     public function arrange($key, $img) {
        $query = "UPDATE `comments` SET `queue` = '" . $key . "'  WHERE id = '" . $img . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        return $result;
    }
}
