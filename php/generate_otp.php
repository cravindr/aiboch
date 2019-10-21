<?php
/**
 * Created by PhpStorm.
 * User: Ravindran
 * Date: 11/8/2016
 * Time: 1:05 PM
 */
require_once ("../aiboc_admin/class/Tenant.php");
require_once ("../aiboc_admin/class/SMS.php");
require_once ("../aiboc_admin/class/Message.php");

$mobile=$_POST["mobile"];

$otp=Tenant::GenerateOTP($mobile);


$message=Message::GetMessage("otp");

$final_message=str_replace("#OTP#",$otp,$message);

if($message)
{
$res=SMS::sendSMS($mobile,$final_message);
}

if($res=="success")
{
    echo "success";
}
else
{
    echo "failed";
}

?>