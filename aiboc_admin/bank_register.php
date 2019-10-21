<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 12/23/2016
 * Time: 2:01 PM
 */ ?>
<?php
require_once('smartysettings.php');
require_once('class/Admin.php');
require_once ('class/Total.php');
require_once ("class/Authenticate.php");
Authenticate::CheckUserRights(basename(__FILE__));

$logdetails = unserialize($_SESSION['ADMIN_LOG_DETAILS']);

$smarty->display('html_open.tpl');

$smarty->display('head_open.tpl');
$smarty->assign('titletxt','welcome');
$smarty->display('title.tpl');
$smarty->display('link_css.tpl');
$smarty->display('datatable_css.tpl');
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
$smarty->display('bank_register_form.tpl');
$smarty->display('body_content_close.tpl');

$smarty->display('main_container_close.tpl');

$smarty->display('link_js.tpl');
$smarty->display('ckeditor_js.tpl');
$smarty->display('ckeditor_for_bank_register.tpl');
$smarty->display('container_body_close.tpl');

$smarty->display('body_close.tpl');

$smarty->display('html_close.tpl');
?>