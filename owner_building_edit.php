<?php
/**
 * Created by PhpStorm.
 * User: oom
 * Date: 11/2/2016
 * Time: 5:48 PM
 */
?>
<?php
require_once('smartysettings.php');
require_once ('aiboc_admin/class/Owner.php');
require_once ('aiboc_admin/class/Building.php');
require_once ('authandicate.php');

if(isset($_SESSION['OWNER_LOGIN_DETAILS']))
{
    $detailslog = unserialize($_SESSION['OWNER_LOGIN_DETAILS']);
    $name = $detailslog->name;
    $smarty->assign('name',$name);
}
else
{
    $smarty->assign('name','');
}

$smarty->display('html_open.tpl');

$smarty->display('head_open.tpl');
$smarty->assign('titletxt','test');
$smarty->display('title.tpl');
$smarty->display('link_css.tpl');
$smarty->display('selectbox_css.tpl');
$smarty->display('validation_engine_css.tpl');
$smarty->display('fileinput_css.tpl');
$smarty->display('head_close.tpl');

$smarty->display('body_open.tpl');

$smarty->assign('regbuild','');
$smarty->assign('profile','');
$smarty->assign('building','active');
$smarty->assign('pass','');
$smarty->display('dashboard_side_menu.tpl');

$smarty->display('dashboard_main_content_open.tpl');
$smarty->assign('activemenu','Building Edit');
$smarty->display('dashboard_breadcrumb.tpl');

$editid = $_SESSION['BUILD_LIST_EDIT_ID'];

$getedit = Building::GetById($editid);

$smarty->assign('getlocation',$getedit->location);
$smarty->assign('getplace',$getedit->place);
$smarty->assign('getstate',$getedit->state);
$smarty->assign('getpin',$getedit->pin);
$smarty->assign('getmaincost',$getedit->maintance_cost);
$smarty->assign('getaddress',$getedit->address);
$smarty->assign('getotherfeci',$getedit->other_facilities);
$smarty->assign('getconditions',$getedit->any_conditions);

$smarty->display('owner_building_edit_form.tpl');
$smarty->display('dashboard_main_content_close.tpl');


$smarty->display('link_js.tpl');
$smarty->display('selectbox_js.tpl');
$smarty->display('fileinput_js.tpl');
$smarty->display('building_edit_value_assign_js.tpl');
$smarty->display('building_edit_image_assign_js.tpl');
$smarty->display('modal_success.tpl');
$smarty->display('validation_engine_js.tpl');

$smarty->display('body_close.tpl');

$smarty->display('html_close.tpl');
?>