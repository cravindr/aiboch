<?php

/**
 * Created by PhpStorm.
 * User: Ravindran
 * Date: 12/7/2016
 * Time: 4:08 PM
 */
require_once ("Database.php");
class Country
{
    var $country_id;
    var $country;
    var $state;
    var $city;
    var $database;
    public function __construct()
    {
        $this->country_id=($this->country_id=="")?'101' : '$country_id';
        $this->database=new Database();
    }

    public  static  function GetStateHTML()
    {
        $ins=new self();
        $qry="Select * from states where country_id='$ins->country_id' ";

        $ins->database->Query($qry);

            $retstr="";
        while($row=mysqli_fetch_object($ins->database->result))
        {
            $retstr.="<option value='$row->name'>$row->name</option>";
        }
        echo $retstr;
    }

}