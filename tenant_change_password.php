<?php
/**
 * Created by PhpStorm.
 * User: Ravindran
 * Date: 11/7/2016
 * Time: 12:08 PM
 */
?>

<?php
require_once('smartysettings.php');
require_once ('aiboc_admin/class/Tenant.php');
require_once ('tenant_authenticate.php');

$smarty->assign('activemenu',"Change Password");   // for breadcrumb
$smarty->assign('profileactive',''); // for side menu
$smarty->assign('enqueirylistactive','');
$smarty->assign('changepass','active');


if(isset($_SESSION['TENANT_LOGIN_DETAILS']))
{
    $detailslog = unserialize($_SESSION['TENANT_LOGIN_DETAILS']);
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
$smarty->display('head_close.tpl');
$smarty->display('body_open.tpl');



$smarty->display('dashboard_side_menu_tenant.tpl');

$smarty->display('dashboard_main_content_open.tpl');
$smarty->display('dashboard_breadcrumb.tpl');
$smarty->display('tenant_password_change_form.tpl');
$smarty->display('dashboard_main_content_close.tpl');


$smarty->display('link_js.tpl');
$smarty->display('modal_success.tpl');
$smarty->display('validation_engine_js.tpl');

$smarty->display('body_close.tpl');

$smarty->display('html_close.tpl');
?>
