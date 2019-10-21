<?php
/**
 * Created by PhpStorm.
 * User: oom
 * Date: 14-Oct-16
 * Time: 12:06 PM
 */ ?>
<?php
require_once('smartysettings.php');
require_once ('aiboc_admin/class/Owner.php');
require_once ('aiboc_admin/class/Tenant.php');
require_once ("aiboc_admin/class/FrontPage.php");
require_once ("config.php");



if(isset($_SESSION['OWNER_LOGIN_DETAILS']))
{
    $detailslog = unserialize($_SESSION['OWNER_LOGIN_DETAILS']);
    $name = $detailslog->name;
    $template = "owner_top_menu.tpl";
    $search = "";
    $grid_node_template="grid_node.tpl";
    $place_body_template="places_body.tpl";
}
elseif(isset($_SESSION['TENANT_LOGIN_DETAILS']))
{
    $detailslog = unserialize($_SESSION['TENANT_LOGIN_DETAILS']);
    $name = $detailslog->name;
    $template = "tenant_top_menu.tpl";
    $search = "advance_search.tpl";
    $grid_node_template="grid_node_logged.tpl";
    $place_body_template="places_body_logged.tpl";
}
else
{
    $name = "";
    $search = "";
    $template = "top_menu.tpl";
    $grid_node_template="grid_node.tpl";
    $place_body_template="places_body.tpl";
}

$smarty->display('html_open.tpl');

$smarty->display('head_open.tpl');
$smarty->assign('titletxt','test');
$smarty->display('title.tpl');
$smarty->display('link_css.tpl');
$smarty->display('index_css.tpl');
$smarty->display('head_close.tpl');

$smarty->display('body_open.tpl');
//$smarty->display('header_menu.tpl');
$smarty->assign('name',$name);

$smarty->display($template);
$smarty->display('slider.tpl');

if($search)
{
    $smarty->display($search);
}


$smarty->display('container_top_open.tpl');


// ############################ front city list#############################################
$cities=FrontPage::GetDisplayCityList();
$front_page_image_path=FRONT_PAGE_IMGAGES;
$smarty->display('grid_open.tpl');

foreach ($cities as $city)
{
    $smarty->assign("city_name",$city["city_name"]);
    $smarty->assign("image_url",$front_page_image_path.$city["image_url"]);
    //$smarty->display('grid_node.tpl');
    $smarty->display($grid_node_template);
}
$smarty->display('grid_close.tpl');
// ############################ front city list#############################################


// ################################# Place List ################################################
$smarty->assign("placeheader_text","Select City Wise Properties.");
$smarty->display('places_header.tpl');
$places=FrontPage::GetPlace();

foreach ($places as $place)
{
    $smarty->assign('places',$place["place"]);
    //$smarty->display('places_body.tpl');
    $smarty->display($place_body_template);
}


$smarty->display('places_footer.tpl');
// ################################# Place List ################################################



$smarty->display('page_footer.tpl');

$smarty->display('popover_login.tpl');
$smarty->display('container_top_close.tpl');

$smarty->display('link_js.tpl');
$smarty->display('index_js.tpl');
//$smarty->display('building_menu_popover_content.tpl');
//$smarty->display('tenant_menu_popover_content.tpl');
$smarty->display('advance_search_modal.tpl');
$smarty->display('body_close.tpl');

$smarty->display('html_close.tpl');
?>