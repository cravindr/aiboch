<?php

/**
 * Created by PhpStorm.
 * User: Ravindran
 * Date: 11/8/2016
 * Time: 10:57 AM
 */
require_once ("Database.php");
class FrontPage
{
    var $database;
    public function __construct()
    {
        $this->database=new  Database();
    }
    public  static  function GetDisplayCityList()
    {
        $ins=new self();
        $qry="SELECT * FROM front_page_cities";
        $ins->database->Query($qry);
        $arr=array();
        while($row=mysqli_fetch_object($ins->database->result))
        {
            array_push($arr,array("city_name"=>$row->city_name,
                                    "image_url"=>$row->image_url ));

        }

        return $arr;

    }

    public static  function GetPlace($state='')
    {
        $ins=new self();
        if($state == "")
        {
            $qry="SELECT  place FROM `buiding_register` group by `place` order by count(`place`) desc";
        }
        else
        {
            $qry="SELECT  place FROM `buiding_register` WHERE `state` = '$state' group by `place` order by count(`place`) desc";
        }


        $ins->database->Query($qry);
        $arr=array();
        while($row=mysqli_fetch_object($ins->database->result))
        {
            array_push($arr,array("place"=>$row->place ));

        }

        return $arr;

    }
    public static  function GetState()
    {
        $ins=new self();
        $qry="SELECT  state FROM `buiding_register` group by `state` order by count(`state`) desc";
        $ins->database->Query($qry);
        $arr=array();
        while($row=mysqli_fetch_object($ins->database->result))
        {
            array_push($arr,array("state"=>$row->state ));

        }

        return $arr;

    }


    public static  function GetLocation($place)
    {
        $ins=new self();
        $qry="SELECT  location FROM `buiding_register` WHERE `place`='$place' group by `location` order by count(`location`) desc";
        $ins->database->Query($qry);
        $arr=array();
        while($row=mysqli_fetch_object($ins->database->result))
        {
            array_push($arr,array("location"=>$row->location ));

        }

        return $arr;

    }
}

?>