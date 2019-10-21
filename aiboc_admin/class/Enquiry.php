<?php

/**
 * Created by PhpStorm.
 * User: Ravindran
 * Date: 12/13/2016
 * Time: 1:21 PM
 */
require_once ("Database.php");
require_once ("Building.php");
require_once ("IndianTime.php");
class Enquiry
{
var $enquiry_id;
var $building_id;
var $tenant_id;
var $building_detail;
var $comments;
var $enquiry_date;
var $status;
var $database;

    function  __construct()
    {
        $this->database=new Database();
    }

    public function Save(){
        //$ins=new self();

        $this->building_detail=Building::BuildingDetailGetById($this->building_id);
        $enq_date=IndianTime::CurrentTime();
        $qry="INSERT into `tenant_enquiry`(`tenant_id`,`building_id`,`building_detail`,`comments`,`enquiry_date`,`status`) VALUES ('$this->tenant_id','$this->building_id','$this->building_detail','$this->comments','$enq_date','$this->status')";
        print_r($qry);
        $this->database->Query($qry);
        return $this->database->inserted_id;
    }

    public static function GetById($id)
    {
        $qry="SELECT * FROM `tenant_enquiry` WHERE `enquiry_id`='$id'  ";

        $ins=new self();
       $res=$ins->database->Query($qry);
       $row=mysqli_fetch_object($ins->database->result);
       // $row=mysqli_fetch_object($res);

        $ins->enquiry_id=$row->enquiry_id;
        $ins->building_id=$row->building_id;
        $ins->tenant_id=$row->tenant_id;
        $ins->building_detail=$row->building_detail;
        $ins->comments=$row->comments;
        $ins->enquiry_date=$row->enquiry_date;
        $ins->status=$row->status;

        return $ins;


    }

    public static function MessageUpdate($enquiry_id,$status,$message){
        $ins=new self();
        $qry="Update tenant_enquiry set comments=concat('$message <hr>',comments ),
        `status`='$status'
        WHERE enquiry_id=$enquiry_id";

        $ins->database->Query($qry);
        return $ins->database->result;
    }

    public static function SaveTenantEnquiry($enquiry_id,$date,$time,$desc,$status)
    {

        $qry="select * from tenant_enquiry where enquiry_id='$enquiry_id'";

        $ins=new self();
        $ins->database->Query($qry);
        $row=mysqli_fetch_object($ins->database->result);
        $tenant_id=$row->tenant_id;
        $qry2="INSERT INTO tenant_appoinment(`tenant_id`, `app_date`, `app_time`, `description`, `status`) VALUES('$tenant_id', '$date', '$time', '$desc', '$status')";

        $ins->database->Query($qry2);

        return $ins->database->rows;

    }


    public static function SaveOwnerEnquiry($enquiry_id,$date,$time,$desc,$status)
    {

        $qry="SELECT 
                   buiding_register.owner_id
                FROM
                  tenant_enquiry,
                  buiding_register
                WHERE
                  tenant_enquiry.building_id = buiding_register.building_id AND 
                  tenant_enquiry.enquiry_id ='$enquiry_id'";

        $ins=new self();
        $ins->database->Query($qry);
        $row=mysqli_fetch_object($ins->database->result);
        $owner_id=$row->owner_id;
        $qry2="INSERT INTO `owner_appoinment`( `owner_id`, `app_date`, `app_time`, `description`, `status`) VALUES('$owner_id','$date','$time','$desc','$status')";


        $ins->database->Query($qry2);

        return $ins->database->rows;

    }


}