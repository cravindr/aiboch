<?php
/**
 * Created by PhpStorm.
 * User: Ravindran
 * Date: 10/31/2016
 * Time: 3:26 PM
 */
session_start();
require_once ("aiboc_admin/class/Tenant.php");
require_once ("aiboc_admin/class/IndianTime.php");

@$ins=new Tenant();
$ins->name=$_POST['name'];
$ins->emailid=$_POST['email'];
$ins->mobile=$_POST['mobile'];
$ins->password=$_POST['pass'];
$ins->scale_grade=$_POST['grade'];
$ins->bank_name=$_POST['bankname'];
$ins->working_branch=$_POST['workingbranch'];
$ins->transfered_banch=$_POST['transferedbranch'];
$ins->transfered_place=$_POST['transferedplace'];
$ins->qeamount=$_POST['qeamount'];
$ins->maamount=$_POST['maamount'];
$ins->others=$_POST['otherexp'];
/*$ins->empcode=$_POST['empcode'];
$ins->address=$_POST['address'];
$ins->place=$_POST['place'];
$ins->city=$_POST['city'];
$ins->state=$_POST['state'];
$ins->pin=$_POST['pin'];*/
$ins->cdate=IndianTime::CurrentTime();
$ins->status="active";
$id=$ins->Save();
$ins->tenant_id=$id;

$ins->login_status="true";
$_SESSION['TENANT_LOGIN_DETAILS']=serialize($ins);
header("Location:tenantdashboard.php");








print_r($_POST);
?>
