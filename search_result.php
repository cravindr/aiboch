<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 11/12/2016
 * Time: 1:46 PM
 */
require_once('smartysettings.php');
require_once('aiboc_admin/class/Tenant.php');
require_once('aiboc_admin/class/Owner.php');
$location = $_GET['place'];
//print_r($_GET);exit;
$_SESSION["SEARCH_PLACE"] = $location;


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
}
elseif(isset($_SESSION['TENANT_LOGIN_DETAILS']))
{
    $detailslog = unserialize($_SESSION['TENANT_LOGIN_DETAILS']);
    $name = $detailslog->name;
    $template = "tenant_top_menu.tpl";

    $grid_node_template="grid_node_logged.tpl";
    $place_body_template="places_body_logged.tpl";
}
else
{
    $name = "";
    $template = "top_menu.tpl";
}

$smarty->display('html_open.tpl');

$smarty->display('head_open.tpl');
$smarty->assign('titletxt','test');
$smarty->display('title.tpl');
$smarty->display('link_css.tpl');
$smarty->display('index_css.tpl');
$smarty->display('search_css.tpl');
$smarty->display('mysearch_css.tpl');
$smarty->display('head_close.tpl');

$smarty->display('body_open.tpl');
//$smarty->display('header_menu.tpl');
$smarty->assign('name',$name);
//$smarty->assign('name',$name);
$smarty->display($template);

$smarty->display('search_result_container_open.tpl');
$smarty->display('search_result_top_open.tpl');
//$smarty->display('search_result_body_content.tpl');
$smarty->display('search_result_pagination.tpl');
$smarty->display('search_result_container_close.tpl');

$smarty->display('link_js.tpl');
$smarty->display('search_result_pagination_js.tpl');
$smarty->display('body_close.tpl');

$smarty->display('html_close.tpl');

?>