<?php
require_once ('Database.php');
/**
 * Created by PhpStorm.
 * User: oom
 * Date: 10/19/2016
 * Time: 11:12 AM
 */
class Building
{
    var $building_id;
    var $owner_id;
    var $address;
    var $location;
    var $place;
    var $state;
    var $pin;
    var $building_type;
    var $room_options;
    var $no_of_toilets;
    var $carpet_area;
    var $excepted_rent;
    var $maintance_cost;
    var $water_facility;
    var $power_backup;
    var $lift_facility;
    var $parking_area;
    var $other_facilities;
    var $any_conditions;
    var $cdate;
    var $mdate;
    var $status;


    var $database;

        public function __construct()
        {
            $this->database = new Database();
        }

        public function Save()
        {
            $sql = "INSERT INTO 
                    `buiding_register`
                    (`building_id`, `owner_id`,
                     `address`, `location`, 
                     `place`, `state`, 
                     `pin`, `building_type`, 
                     `room_options`, `no_of_toilets`, 
                     `carpet_area`, `excepted_rent`, 
                     `maintance_cost`, `water_facility`, 
                     `power_backup`, `lift_facility`, 
                     `parking_area`, `other_facilities`, 
                     `any_conditions`, `cdate`, 
                     `mdate`, `status`) 
                     VALUES(
                     NULL ,
                    '$this->owner_id',
                    '$this->address',
                    '$this->location',
                    '$this->place',
                    '$this->state',
                    '$this->pin',
                    '$this->building_type',
                    '$this->room_options',
                    '$this->no_of_toilets',
                    '$this->carpet_area',
                    '$this->excepted_rent',
                    '$this->maintance_cost',
                    '$this->water_facility',
                    '$this->power_backup',
                    '$this->lift_facility',
                    '$this->parking_area',
                    '$this->other_facilities',
                    '$this->any_conditions',
                    '$this->cdate',
                    '$this->mdate',
                    '$this->status')";
            //echo $sql; exit;
            return $this->database->Query($sql);
        }

        public function Update()
        {
            $sql = "UPDATE `buiding_register`
                    SET
                    `owner_id`='$this->owner_id',
                    `address`='$this->address',
                    `location`='$this->location',
                    `place`='$this->place',
                    `state`='$this->state',
                    `pin`='$this->pin',
                    `building_type`='$this->building_type',
                    `room_options`='$this->room_options',
                    `no_of_toilets`='$this->no_of_toilets',
                    `carpet_area`='$this->carpet_area',
                    `excepted_rent`='$this->excepted_rent',
                    `maintance_cost`='$this->maintance_cost',
                    `water_facility`='$this->water_facility',
                    `power_backup`='$this->power_backup',
                    `lift_facility`='$this->lift_facility',
                    `parking_area`='$this->parking_area',
                    `other_facilities`='$this->other_facilities',
                    `any_conditions`='$this->any_conditions',
                    `cdate`='$this->cdate',
                    `mdate`='$this->mdate',
                    `status`='$this->status'
                    
                    WHERE `building_id`='$this->building_id'";

            return $this->database->Query($sql);
        }

    /**
     * @param $id
     * @return Building
     */
    public static function GetById($id)
        {
            $ins = new self();

            $sql = "SELECT * FROM `buiding_register` WHERE `building_id` = '$id'";

           $res = $ins->database->Query($sql);

            while($row = mysqli_fetch_object($res))
            {
                $ins->building_id = $row->building_id;
                $ins->owner_id = $row->owner_id;
                $ins->address = $row->address;
                $ins->location = $row->location;
                $ins->place = $row->place;
                $ins->state = $row->state;
                $ins->pin = $row->pin;
                $ins->building_type = $row->building_type;
                $ins->room_options = $row->room_options;
                $ins->no_of_toilets = $row->no_of_toilets;
                $ins->carpet_area = $row->carpet_area;
                $ins->excepted_rent = $row->excepted_rent;
                $ins->maintance_cost = $row->maintance_cost;
                $ins->water_facility = $row->water_facility;
                $ins->power_backup = $row->power_backup;
                $ins->lift_facility = $row->lift_facility;
                $ins->parking_area = $row->parking_area;
                $ins->other_facilities = $row->other_facilities;
                $ins->any_conditions = $row->any_conditions;
                $ins->cdate = $row->cdate;
                $ins->mdate = $row->mdate;
                $ins->status = $row->status;

            }

            return $ins;
        }

        public static function GetAll()
        {
            $ins = new self();

            $sql = "SELECT * FROM `buiding_register`";

            $res = $ins->database->Query($sql);

            $array = array();

            while($row = mysqli_fetch_object($res))
            {
                array_push($array,array(
                    'building_id'=>$row->building_id,
                    'owner_id'=>$row->owner_id,
                    'address'=>$row->address,
                    'location'=>$row->location,
                    'place'=>$row->place,
                    'state'=>$row->state,
                    'pin'=>$row->pin,
                    'building_type'=>$row->building_type,
                    'room_options'=>$row->room_options,
                    'no_of_toilets'=>$row->no_of_toilets,
                    'carpet_area'=>$row->carpet_area,
                    'excepted_rent'=>$row->excepted_rent,
                    'maintance_cost'=>$row->maintance_cost,
                    'water_facility'=>$row->water_facility,
                    'power_backup'=>$row->power_backup,
                    'lift_facility'=>$row->lift_facility,
                    'parking_area'=>$row->parking_area,
                    'other_facilities'=>$row->other_facilities,
                    'any_conditions'=>$row->any_conditions,
                    'cdate'=>$row->cdate,
                    'mdate'=>$row->mdate,
                    'status'=>$row->status,

                ));
            }
            return $array;
        }


    public static function SearchByPlaces($place)
    {
        $ins = new self();

        $sql = "SELECT * FROM `buiding_register` WHERE `place` LIKE '%$place%'";

        $res = $ins->database->Query($sql);

        $array = array();

        while($row = mysqli_fetch_object($res))
        {
            array_push($array,array(
                'building_id'=>$row->building_id,
                'owner_id'=>$row->owner_id,
                'address'=>$row->address,
                'location'=>$row->location,
                'place'=>$row->place,
                'state'=>$row->state,
                'pin'=>$row->pin,
                'building_type'=>$row->building_type,
                'room_options'=>$row->room_options,
                'no_of_toilets'=>$row->no_of_toilets,
                'carpet_area'=>$row->carpet_area,
                'excepted_rent'=>$row->excepted_rent,
                'maintance_cost'=>$row->maintance_cost,
                'water_facility'=>$row->water_facility,
                'power_backup'=>$row->power_backup,
                'lift_facility'=>$row->lift_facility,
                'parking_area'=>$row->parking_area,
                'other_facilities'=>$row->other_facilities,
                'any_conditions'=>$row->any_conditions,
                'cdate'=>$row->cdate,
                'mdate'=>$row->mdate,
                'status'=>$row->status,

            ));
        }
        return $array;
    }

        public static function DeleteRow($id)
        {
            $ins = new self();

            $qry = "DELETE FROM `buiding_register` WHERE `building_id` = '$id'";
            return $ins->database->Query($qry);
        }

        public static function BuildingImageUpload($ownerid,$buildid,$img,$cdate,$status)
        {
            $ins = new self();

            $qry = "INSERT INTO `building_gallery`(`gallery_id`, `owner_id`, `building_id`, `img_url`, `cdate`, `status`)
                    VALUES (NULL,'$ownerid','$buildid','$img','$cdate','$status')";
            return $ins->database->Query($qry);
        }

        public static function Status($id)
        {
            $ins = new self();
            $status = $ins->GetById($id);

            if ($status->status == "active") {
                $qry = "UPDATE `buiding_register` SET `status`= 'inactive' WHERE `building_id` = '$id'";
            } else {
                $qry = "UPDATE `buiding_register` SET `status`= 'active' WHERE `building_id` = '$id'";

            }
            return $ins->database->Query($qry);
        }

    public static function CountPlace($place,$location="")
    {
        $ins = new self();

        if($location)
        {
            $sql = "SELECT count(*) FROM `buiding_register` WHERE `place` = '$place' AND location='$location'";
        }
        else
        {
            $sql = "SELECT count(*) FROM `buiding_register` WHERE `place` = '$place'";
        }



        $res = $ins->database->Query($sql);



        $row = mysqli_fetch_array($res);

        return $row[0];
    }



    public  static  function GetStateHTML()
    {
        $ins=new self();
        $qry="Select DISTINCT(state)from buiding_register ";

        $ins->database->Query($qry);

        //$retstr="<option value='0'>Please Select State</option>";  //  this style is used for select
        $retstr=""; // for use in selectpicker and use title option
        while($row=mysqli_fetch_object($ins->database->result))
        {
            $retstr.="<option value='$row->state'>$row->state</option>";
        }
        echo $retstr;
    }

    public  static  function GetCityHTML($state)
    {
        $ins=new self();
        $qry = "SELECT DISTINCT (place) FROM buiding_register WHERE state like '%". $state ."%'";

        $ins->database->Query($qry);
        $retstr="<option value=''>Please Select City</option>";  // this style is used for select
       // $retstr=""; // this style is used for selectpicker and use title option
        while($row=mysqli_fetch_object($ins->database->result))
        {
            $retstr.="<option value='$row->place'>$row->place</option>";
        }
        echo $retstr;
    }
    public  static  function GetAreaHTML($place)
    {
        $ins=new self();
        $qry = "SELECT DISTINCT (location) FROM buiding_register WHERE place like '%". $place ."%'";

        $ins->database->Query($qry);

        //$retstr="<option value='0'>Please Select City</option>";  // this style is used for select
        $retstr=""; // this style is used for selectpicker and use title option
        while($row=mysqli_fetch_object($ins->database->result))
        {
            $retstr.="<option value='$row->location'>$row->location</option>";
        }
        echo $retstr;
    }

    public  static function BuildingDetailGetById($id){
        $ret=self::GetById($id);
        return $ret->location .",". $ret->place;
    }
}
?>