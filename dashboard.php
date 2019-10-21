<?php
/**
 * Created by PhpStorm.
 * User: oom
 * Date: 10/25/2016
 * Time: 1:52 PM
 */
?>
<?php
require_once('smartysettings.php');
require_once ('aiboc_admin/class/Owner.php');
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
$smarty->display('validation_engine_css.tpl');
$smarty->display('fileinput_css.tpl');
$smarty->display('selectbox_css.tpl');
$smarty->display('head_close.tpl');

$smarty->display('body_open.tpl');

$smarty->assign('regbuild','active');
$smarty->assign('profile','');
$smarty->assign('building','');
$smarty->assign('pass','');
$smarty->display('dashboard_side_menu.tpl');

$smarty->display('dashboard_main_content_open.tpl');
$smarty->assign('activemenu','');
$smarty->display('dashboard_breadcrumb.tpl');
$smarty->display('owner_building_register_form.tpl');
$smarty->display('dashboard_main_content_close.tpl');


$smarty->display('link_js.tpl');
$smarty->display('selectbox_js.tpl');
$smarty->display('fileinput_js.tpl');
$smarty->display('building_register_file_upload_js.tpl');

$smarty->display('modal_success.tpl');
$smarty->display('validation_engine_js.tpl');

$smarty->display('body_close.tpl');

$smarty->display('html_close.tpl');
?>