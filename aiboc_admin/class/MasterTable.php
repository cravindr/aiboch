<?php
/**
 * Created by PhpStorm.
 * User: Ravindran
 * Date: 12/8/2016
 * Time: 1:22 PM
 */
require_once ("Database.php");
class MasterTable{
    var $database;
    public function __construct()
    {
    $this->database=new Database();
    }

    public static  function GetBedRoom()
    {
        $ins=new self();
        $qry = "SELECT * FROM room_master ";

        $ins->database->Query($qry);

        //$retstr="<option value='0'>Please Select City</option>";  // this style is used for select
        $retstr=""; // this style is used for selectpicker and use title option
        while($row=mysqli_fetch_object($ins->database->result))
        {
            $retstr.="<option value='$row->room_value'>$row->room_type</option>";
        }
        echo $retstr;

    }
    public static  function GetToilet()
    {
        $ins=new self();
        //$qry = "SELECT * FROM toilet_master ";
        $qry = "SELECT DISTINCT (total_toilet) FROM toilet_master ";

        $ins->database->Query($qry);

        //$retstr="<option value='0'>Please Select City</option>";  // this style is used for select
        $retstr=""; // this style is used for selectpicker and use title option
        while($row=mysqli_fetch_object($ins->database->result))
        {
           // $retstr.="<option data-subtext='$row->toilet_type' value='$row->toilet_value'>$row->total_toilet</option>";
            $retstr.="<option  value='$row->total_toilet'>$row->total_toilet</option>";
        }
        echo $retstr;

    }


    public static  function GetParking()
    {
        $ins=new self();
        $qry = "SELECT * FROM parking_master ";

        $ins->database->Query($qry);

        //$retstr="<option value='0'>Please Select City</option>";  // this style is used for select
        $retstr=""; // this style is used for selectpicker and use title option
        while($row=mysqli_fetch_object($ins->database->result))
        {
            $retstr.="<option value='$row->parking_value'>$row->parking_type</option>";
        }
        echo $retstr;

    }

    public static  function GetBuildingType()
    {
        $ins=new self();
        $qry = "SELECT * FROM building_master ";

        $ins->database->Query($qry);

        //$retstr="<option value='0'>Please Select City</option>";  // this style is used for select
        $retstr=""; // this style is used for selectpicker and use title option
        while($row=mysqli_fetch_object($ins->database->result))
        {
            $retstr.="<option value='$row->building_value'>$row->building_type</option>";
        }
        echo $retstr;

    }

    public static  function GetRooms()
    {
        $ins=new self();
        $qry = "SELECT * FROM room_master ";

        $ins->database->Query($qry);

        //$retstr="<option value='0'>Please Select City</option>";  // this style is used for select
        $retstr="<optgroup label='Bed Room' >"; // this style is used for selectpicker  Multiple Opton Select(Group Option)
        while($row=mysqli_fetch_object($ins->database->result))
        {
            $retstr.="<option value='$row->room_value'>$row->room_type</option>";
        }

        $retstr.="</optgroup>";

        $qry = "SELECT DISTINCT (total_toilet) FROM toilet_master ";

        $ins->database->Query($qry);

        //$retstr="<option value='0'>Please Select City</option>";  // this style is used for select
        //$retstr=""; // this style is used for selectpicker and use for Group Option
        $retstr.="<optgroup label='Toilet' >";
        while($row=mysqli_fetch_object($ins->database->result))
        {
            // $retstr.="<option data-subtext='$row->toilet_type' value='$row->toilet_value'>$row->total_toilet</option>";
            $retstr.="<option  value='$row->total_toilet'>$row->total_toilet</option>";
        }
        $retstr.="</optgroup>";
        echo $retstr;

    }

}
?>