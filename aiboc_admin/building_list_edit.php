<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 12/2/2016
 * Time: 11:19 AM
 */
?>
<?php
require_once ('smartysettings.php');
require_once ('class/Admin.php');
require_once ('class/Building.php');
require_once ('class/Buidling_Image.php');
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

$editid = $_SESSION['BUILDING_EDIT_ID'];
$getedit = Building::GetById($editid);

$smarty->assign('getlocation',$getedit->location);
$smarty->assign('getplace',$getedit->place);
$smarty->assign('getstate',$getedit->state);
$smarty->assign('getpin',$getedit->pin);
$smarty->assign('getmaincost',$getedit->maintance_cost);
$smarty->assign('getaddress',$getedit->address);
$smarty->assign('getcarpetarea',$getedit->carpet_area);
$smarty->assign('getotherfeci',$getedit->other_facilities);
$smarty->assign('getconditions',$getedit->any_conditions);

$buideditid = $getedit->building_id;
$buidid = Buidling_Image::GetBuildByID($buideditid);

$smarty->display('building_list_edit_form.tpl');
$smarty->display('body_content_close.tpl');

$smarty->display('main_container_close.tpl');

$smarty->display('link_js.tpl');
$smarty->display('selectbox_js.tpl');
$smarty->display('building_list_value_assign_js.tpl');
$smarty->display('state_city_auto_load_js.tpl');

    if($buidid->database->rows > 0)
    {
        $smarty->display('building_list_image_assign_js.tpl');
    }
    else
    {
        $smarty->display('building_list_new_upload_images.js.tpl');
    }


$smarty->display('container_body_close.tpl');
$smarty->display('modal_view.tpl');

$smarty->display('body_close.tpl');

$smarty->display('html_close.tpl');
?>