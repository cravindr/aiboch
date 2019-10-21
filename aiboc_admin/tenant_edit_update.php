<?php
/**
 * Created by PhpStorm.
 * User: Ravindran
 * Date: 11/30/2016
 * Time: 12:40 PM
 */
require_once ("class/Tenant.php");
require_once ("class/IndianTime.php");
$ins=new Tenant();
$ins->tenant_id=$_POST["id"];
$ins->name=$_POST["name"];
$ins->mobile=$_POST["mobile"];
$ins->emailid=$_POST["emailid"];
$ins->scale_grade=$_POST["grade"];
$ins->bank_name=$_POST["bank_name"];
$ins->working_branch=$_POST["working_branch"];
$ins->transfered_banch=$_POST["transfered_branch"];
$ins->transfered_place=$_POST["transfered_place"];
$ins->qeamount=$_POST["qeamount"];
$ins->maamount=$_POST["maamount"];
$ins->others=$_POST["others"];
$ins->empcode=$_POST["empcode"];
$ins->address=$_POST["address"];
$ins->place=$_POST["place"];
$ins->city=$_POST["city"];
$ins->state=$_POST["state"];
$ins->otp=$_POST["otp"];
$ins->status=$_POST["status"];
$ins->mdate=IndianTime::CurrentTime();
$ins->Update();

header("Location:tenant_list.php");
?>