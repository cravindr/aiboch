<?php
/**
 * Created by PhpStorm.
 * User: Ravindran
 * Date: 12/14/2016
 * Time: 4:28 PM
 */

require_once("class/Enquiry.php");
print_r($_POST);
$enquiry_id=$_POST['enquiry_id'];
$progress_status=$_POST['progress_status'];
$enquiry_message=$_POST['enquiry_message'];
//$callback_date=date_format($_POST['datepicker'],'Y/m/d');
$callback_date=date_create($_POST['datepicker']);
$callback_date=date_format($callback_date,"Y/m/d");
$callback_time=$_POST['nowtime'];



if (isset($_POST['appoinment']))
{
    $app=$_POST['appoinment'];
    if(count($app)==2)
    {
        $appfor="both";
    }
    elseif(count($app)==1)
    {
        $appfor=$app[0];
    }

}
else
{
    $appfor="blank";
}
echo "xxxxxxx=$appfor";
//$appfor=(count($app)==2)?"both":$app[0];

if($appfor=='tenant')
{
    Enquiry::SaveTenantEnquiry($enquiry_id,$callback_date,$callback_time,$enquiry_message,$progress_status);
}elseif($appfor=='owner')
{
    Enquiry::SaveOwnerEnquiry($enquiry_id,$callback_date,$callback_time,$enquiry_message,$progress_status);
}elseif($appfor=='both')
{
    Enquiry::SaveTenantEnquiry($enquiry_id,$callback_date,$callback_time,$enquiry_message,$progress_status);
    Enquiry::SaveOwnerEnquiry($enquiry_id,$callback_date,$callback_time,$enquiry_message,$progress_status);

}





//echo Enquiry::MessageUpdate($enquiry_id,$progress_status,$enquiry_message);

if(Enquiry::MessageUpdate($enquiry_id,$progress_status,$enquiry_message)==1)
    {
        header("Location:tenant_enquiry_list.php");
    }

 ?>