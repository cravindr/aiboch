<?php
/**
 * Created by PhpStorm.
 * User: Ravindran
 * Date: 12/13/2016
 * Time: 1:36 PM
 */
require_once("aiboc_admin/class/Enquiry.php");
print_r($_POST);
$building_id=$_POST['building_id'];
$tenant_id=$_POST['tenant_id'];
$enquiry_message=$_POST['enquiry_message'];
$ins_enq=new Enquiry();
$ins_enq->tenant_id=$tenant_id;
$ins_enq->building_id=$building_id;
$ins_enq->comments=$enquiry_message;
$ins_enq->status="processing";
$ins_enq->Save();
?>