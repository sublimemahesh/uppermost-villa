<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Offer
 *
 * @author Suharshana DsW
 */
class Offer {

    public $id;
    public $title;
    public $image_name;
    public $short_description;
    public $description;
    public $price;
    public $discount;
    public $queue;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT `id`,`title`,`image_name`,`short_description`,`description`,`price`,`discount`,`queue` FROM `offer` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysql_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->title = $result['title'];
            $this->image_name = $result['image_name'];
            $this->short_description = $result['short_description'];
            $this->description = $result['description'];
            $this->price = $result['price'];
            $this->discount = $result['discount'];
            $this->queue = $result['queue'];

            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `offer` (`title`,`image_name`,`short_description`,`description`,`price`,`discount`,`queue`) VALUES  ('"
                . $this->title . "','"
                . $this->image_name . "', '"
                . $this->short_description . "', '"
                . $this->description . "', '"
                . $this->price . "', '"
                . $this->discount . "', '"
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

        $query = "SELECT * FROM `offer` ORDER BY queue ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `offer` SET "
                . "`title` ='" . $this->title . "', "
                . "`image_name` ='" . $this->image_name . "', "
                . "`short_description` ='" . $this->short_description . "', "
                . "`description` ='" . $this->description . "', "
                . "`price` ='" . $this->price . "', "
                . "`discount` ='" . $this->discount . "', "
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

        $this->deletePhotos();

        unlink(Helper::getSitePath() . "upload/offer/" . $this->image_name);

        $query = 'DELETE FROM `offer` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function deletePhotos() {

        $OFFER_PHOTOS = new OfferPhoto(NULL);

        $allPhotos = $OFFER_PHOTOS->getOfferPhotosById($this->id);

        foreach ($allPhotos as $photo) {

            $IMG = $OFFER_PHOTOS->image_name = $photo["image_name"];
            unlink(Helper::getSitePath() . "upload/offer/gallery/" . $IMG);
            unlink(Helper::getSitePath() . "upload/offer/gallery/thumb/" . $IMG);

            $OFFER_PHOTOS->id = $photo["id"];
            $OFFER_PHOTOS->delete();
        }
    }

    public function arrange($key, $img) {
        $query = "UPDATE `offer` SET `queue` = '" . $key . "'  WHERE id = '" . $img . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        return $result;
    }

}
