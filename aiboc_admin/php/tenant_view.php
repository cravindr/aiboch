<?php
/**
 * Created by PhpStorm.
 * User: Ravindran
 * Date: 11/29/2016
 * Time: 4:06 PM
 */
require_once("../class/Tenant.php");
require_once ("smartysettings.php");
$id=$_POST["id"];
$objtenant=Tenant::GetTenantById($id);
$smarty->assign("name",$objtenant->name);
$smarty->assign("mobile",$objtenant->mobile);
$smarty->assign("emailid",$objtenant->emailid);
$smarty->assign("grde",$objtenant->scale_grade);
$smarty->assign("bank_name",$objtenant->bank_name);
$smarty->assign("working_branch",$objtenant->working_branch);
$smarty->assign("transfered_banch",$objtenant->transfered_banch);
$smarty->assign("transfered_place",$objtenant->transfered_place);
$smarty->assign("qeamount",$objtenant->qeamount);
$smarty->assign("maamount",$objtenant->maamount);
$smarty->assign("others",$objtenant->others);
$smarty->assign("empcode",$objtenant->empcode);
$smarty->assign("address",$objtenant->address);
$smarty->assign("place",$objtenant->place);
$smarty->assign("city",$objtenant->city);
$smarty->assign("state",$objtenant->state);
$smarty->assign("otp",$objtenant->otp);
$smarty->assign("status",$objtenant->status);
$smarty->display("tenant_view_table.tpl");



?>
