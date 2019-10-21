<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 11/9/2016
 * Time: 5:33 PM
 */
require_once('smartysettings.php');
require_once('aiboc_admin/class/Tenant.php');
require_once('aiboc_admin/class/Owner.php');
require_once('aiboc_admin/class/Building.php');
require_once ("aiboc_admin/class/FrontPage.php");


if(isset($_GET['place']))
{
    $place=$_GET['place'];
}
else
{
exit;
}

$_SESSION["SEARCH_PLACE"]=$place;

if(isset($_GET['location']))
{
    $_SESSION["SEARCH_LOCATION"]=$_GET['location'];
    $selected_location=$_GET['location'];
}
else
{
    $_SESSION["SEARCH_LOCATION"]="";
    $selected_location="";
}






$result_count=Building::CountPlace($place,$selected_location);



$smarty->assign('activemenu',"Enquiry List");   // for breadcrumb
$smarty->assign('profileactive',''); // for side menu
$smarty->assign('enqueirylistactive','active');
$smarty->assign('changepass','');
$name = "";

if(isset($_SESSION['OWNER_LOGIN_DETAILS']))
{
    $detailslog = unserialize($_SESSION['OWNER_LOGIN_DETAILS']);
    $name = $detailslog->name;
    $template = "owner_top_menu.tpl";

    $grid_node_template="grid_node.tpl";
    $place_body_template="places_body.tpl";
    $location_body_template="location_body_logged.tpl";
}
elseif(isset($_SESSION['TENANT_LOGIN_DETAILS']))
{
    $detailslog = unserialize($_SESSION['TENANT_LOGIN_DETAILS']);
    $name = $detailslog->name;
    $template = "tenant_top_menu.tpl";

    $grid_node_template="grid_node_logged.tpl";
    $place_body_template="places_body_logged.tpl";
    $location_body_template="location_body_logged.tpl";
}
else
{
    $name = "";
    $template = "top_menu.tpl";
    $location_body_template="location_body_logged.tpl";
}

$smarty->display('html_open.tpl');

$smarty->display('head_open.tpl');
$smarty->assign('titletxt','test');
$smarty->display('title.tpl');
$smarty->display('link_css.tpl');
$smarty->display('index_css.tpl');
$smarty->display('search_css.tpl');
$smarty->display('seach_result_pagination_css.tpl');
$smarty->display('head_close.tpl');

$smarty->display('body_open.tpl');
$smarty->assign('name',$name);
$smarty->display($template);

$smarty->display('search_result_container_open.tpl');
$smarty->assign("resultcount",$result_count);
if($selected_location)
{
    $smarty->assign("placesearch","$place @ $selected_location ");
}
else
{
    $smarty->assign("placesearch",$place);
}


$smarty->display('search_result_top_open.tpl');
$smarty->display('search_result_pagination.tpl');


$smarty->display('search_result_container_close.tpl');

$smarty->display('link_js.tpl');
$smarty->display('search_result_pagination_js.tpl');  // Search result should be done  at javascript(search_result_pagination.js) using fetch_pages.php



// ################################# Location List ################################################

$smarty->display('container_top_open.tpl');
$smarty->assign("placeheader_text","Select Location Wise Properties.");
$smarty->display('places_header.tpl');

$locations=FrontPage::GetLocation($place);

foreach ($locations as $location)
{
    $smarty->assign('places',$place);
    $smarty->assign('location',$location["location"]);
    //$smarty->display('places_body.tpl');
    $smarty->display($location_body_template);
}


$smarty->display('places_footer.tpl');
$smarty->display('container_top_close.tpl');
// ################################# Location List ################################################



$smarty->display('body_close.tpl');

$smarty->display('html_close.tpl');
$smarty->display('modal_success.tpl');

?>