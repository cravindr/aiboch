<?php
/**
 * Created by PhpStorm.
 * User: Ravindran
 * Date: 12/12/2016
 * Time: 5:54 PM
 */
require_once ("smartysettings.php");
require_once ("../aiboc_admin/class/Tenant.php");

$building_id=$_GET['building_id'];
$login=unserialize($_SESSION['TENANT_LOGIN_DETAILS']);
//$tenant_id =$_SESSION['tenant_id'];
$smarty->assign("building_id",$building_id);
$smarty->assign("tenant_id",$login->tenant_id);
$smarty->display("enquiry_form.tpl");

?>