<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 12/16/2016
 * Time: 11:16 AM
 */ ?>
<?php
require_once ('smartysettings.php');
require_once ('class/Admin.php');
require_once ('class/Total.php');
require_once ("class/Authenticate.php");
Authenticate::CheckUserRights(basename(__FILE__));

$logdetails = unserialize($_SESSION['ADMIN_LOG_DETAILS']);

$smarty->display('html_open.tpl');

$smarty->display('head_open.tpl');
$smarty->assign('titletxt','welcome');
$smarty->display('title.tpl');
$smarty->display('link_css.tpl');
$smarty->display('selectbox_css.tpl');
$smarty->display('validation_engine_css.tpl');
$smarty->display('head_close.tpl');

$smarty->display('body_open.tpl');

$smarty->display('container_body_open.tpl');

$smarty->display('main_container_open.tpl');
$smarty->assign('username',$logdetails->name);
$smarty->display('header_left.tpl');
$smarty->display('top_navigation.tpl');

$smarty->display('body_content_open.tpl');
$smarty->assign('totalbuilding',@Total::TotalBuilding());
$smarty->assign('activebuild',@Total::TotalBuildingActive());
$smarty->assign('totaltenant',@Total::TotalTenant());
$smarty->assign('activetenant',@Total::TotalTenantActive());
$smarty->assign('totalenquiry',@Total::TotalEnquiry());
$smarty->assign('activeenquiry',@Total::TotalEnquiryActive());
$smarty->assign('todayregbuilding',@Total::TodaysRegBuilding());
$smarty->assign('todayregtenant',@Total::TodaysRegTenant());
$smarty->assign('todayenquiry',@Total::TodaysEnquiry());
$smarty->display('top_tiles.tpl');
$smarty->assign('rescout','');

$id = $_SESSION['ADMIN_USER_EDIT_ID'];
$getval = Admin::GetById($id);

    $smarty->assign('username',$getval->user_name);
    $smarty->assign('name',$getval->name);
    $smarty->assign('email',$getval->emailid);
    $smarty->assign('mobile',$getval->mobile);
    $smarty->assign('address',$getval->address);
    $smarty->assign('place',$getval->place);

$smarty->display('admin_user_register_form_edit.tpl');
$smarty->display('body_content_close.tpl');

$smarty->display('main_container_close.tpl');

$smarty->display('link_js.tpl');
$smarty->display('selectbox_js.tpl');
$smarty->display('validation_engine_js.tpl');
$smarty->display('admin_user_register_form_js.tpl');
$smarty->display('admin_user_role_value_assign_js.tpl');
$smarty->display('container_body_close.tpl');

$smarty->display('body_close.tpl');

$smarty->display('html_close.tpl');
?>