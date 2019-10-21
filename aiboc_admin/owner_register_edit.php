<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 11/25/2016
 * Time: 2:34 PM
 */
?>
<?php
require_once ('smartysettings.php');
require_once ('class/Owner.php');
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

$id = $_SESSION['OWNER_EDIT_ID'];

$getowner = Owner::GetById($id);

    $smarty->assign('editname',$getowner->name);
    $smarty->assign('editemail',$getowner->emailid);
    $smarty->assign('editmobile',$getowner->mobile);
    $smarty->assign('editaddress',$getowner->address);
    $smarty->assign('editplace',$getowner->place);
    $smarty->assign('editcity',$getowner->city);
    $smarty->assign('editstate',$getowner->state);
    $smarty->assign('editpin',$getowner->pin);

    $smarty->display('owner_edit_form_admin.tpl');
$smarty->display('body_content_close.tpl');

$smarty->display('main_container_close.tpl');

$smarty->display('link_js.tpl');
$smarty->display('selectbox_js.tpl');
$smarty->display('owner_status_value_assign_js.tpl');
$smarty->display('state_city_auto_load_js.tpl');
$smarty->display('container_body_close.tpl');

$smarty->display('body_close.tpl');

$smarty->display('html_close.tpl');
?>