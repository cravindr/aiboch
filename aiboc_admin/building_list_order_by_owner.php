<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 12/8/2016
 * Time: 1:31 PM
 */
?>
<?php
require_once ('smartysettings.php');
require_once ('class/Building.php');
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
$smarty->display('datatable_css.tpl');
$smarty->display('selectbox_css.tpl');
$smarty->display('fileinput_css.tpl');
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
$smarty->assign('buttonfile','<div class="container"><button id="newbtn" class="btn btn-success pull-right"><i class="fa fa-plus"></i> New</button></div>');
$smarty->display('building_table.tpl');
$smarty->display('body_content_close.tpl');

$smarty->display('main_container_close.tpl');

$smarty->display('link_js.tpl');
$smarty->display('datatable_js.tpl');
$smarty->display('selectbox_js.tpl');
$smarty->display('fileinput_js.tpl');
$smarty->display('building_list_order_by_owner_js.tpl');
$smarty->display('building_list_new_upload_images.js.tpl');
$smarty->display('container_body_close.tpl');
$smarty->display('modal_view.tpl');
$smarty->display('owner_modal_view.tpl');
$smarty->assign('ownerid',$_SESSION['OWNER_LIST_ORDER_ID']);
$smarty->display('building_register_modal_form.tpl');
$smarty->display('state_city_auto_load_js.tpl');


$smarty->display('body_close.tpl');

$smarty->display('html_close.tpl');
?>