<?php
/**
 * Created by PhpStorm.
 * User: Ravindran
 * Date: 11/7/2016
 * Time: 11:03 AM
 */

require_once ("aiboc_admin/class/Tenant.php");
session_start();
$enquiryid=$_POST["enquiryid"];
$comments=$_POST["comments"];
unset($_SESSION['ENQUIRY_LIST_EDIT_ID']);


if(Tenant::UpdateEnquiry($enquiryid,$comments))
{

    header("Location:tenant_enquiry_list.php");
}
else
{
    echo "Unable to Update<br> Please Contact Administrator";
}

?>