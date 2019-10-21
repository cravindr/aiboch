<?php
require_once ('Database.php');
/**
 * Created by PhpStorm.
 * User: Ravindran
 * Date: 11/4/2016
 * Time: 5:29 PM
 */
class Buidling_Image
{
    var $gallery_id;
    var $owner_id;
    var $building_id;
    var $img_url;
    var $cdate;
    var $status;

    var $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public static function GetByID($id)
    {
        $ins = new self();

        $qry = "SELECT * FROM `building_gallery` WHERE `gallery_id`= '$id'";

        $res = $ins->database->Query($qry);

        while($row = mysqli_fetch_object($res))
        {
            $ins->gallery_id = $row->gallery_id;
            $ins->owner_id = $row->owner_id;
            $ins->building_id = $row->building_id;
            $ins->img_url = $row->img_url;
            $ins->cdate = $row->cdate;
            $ins->status = $row->status;
        }
        return $ins;
    }
    public static function GetBuildByID($id)
    {
        $ins = new self();

        $qry = "SELECT * FROM `building_gallery` WHERE `building_id`= '$id'";

        $res = $ins->database->Query($qry);

        while($row = mysqli_fetch_object($res))
        {
            $ins->gallery_id = $row->gallery_id;
            $ins->owner_id = $row->owner_id;
            $ins->building_id = $row->building_id;
            $ins->img_url = $row->img_url;
            $ins->cdate = $row->cdate;
            $ins->status = $row->status;
        }
        return $ins;
    }

    public static function GetGalleryImageByID($id)
    {
        $ins = new self();
        $qry = "SELECT * FROM `building_gallery` WHERE `building_id` = '$id'";
        $res = $ins->database->Query($qry);
        $array = array();
        while ($row = mysqli_fetch_object($res)) {
            array_push($array, array(
                'gallery_id' => $row->gallery_id,
                'owner_id' => $row->owner_id,
                'building_id' => $row->building_id,
                'img_url' => $row->img_url,
                'cdate' => $row->cdate,
                'status' => $row->status
            ));
        }
        return $array;
    }
    public static function GetGalleryImageByBuildingID($id)
    {
        $ins = new self();
        $qry = "SELECT * FROM `building_gallery` WHERE `building_id` = '$id'";
        $res = $ins->database->Query($qry);
        $array = array();
        while ($row = mysqli_fetch_object($res)) {
            array_push($array, array(
                'gallery_id' => $row->gallery_id,
                'owner_id' => $row->owner_id,
                'building_id' => $row->building_id,
                'img_url' => $row->img_url,
                'cdate' => $row->cdate,
                'status' => $row->status
            ));
        }
        return $array;
    }

    public static function DeleteImages($id)
    {
        $ins = new self();
        $qry = "DELETE FROM `building_gallery` WHERE `gallery_id` = '$id'";
        return $ins->database->Query($qry);
    }
}
?>