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
//require_once ('aiboc_admin/class/Owner.php');
//require_once ('aiboc_admin/class/Building.php');
require_once ('tenant_authenticate.php');


$smarty->assign('activemenu',"Enquiry List");   // for breadcrumb
$smarty->assign('profileactive',''); // for side menu
$smarty->assign('enqueirylistactive','active');
$smarty->assign('changepass','');


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
$smarty->display('datatable_css.tpl');
//$smarty->display('validation_engine_css.tpl');
$smarty->display('head_close.tpl');

$smarty->display('body_open.tpl');



$smarty->display('dashboard_side_menu_tenant.tpl ');

$smarty->display('dashboard_main_content_open.tpl');
$smarty->display('dashboard_breadcrumb.tpl');
$smarty->display('tenant_enquiry_list.tpl');
$smarty->display('dashboard_main_content_close.tpl');


$smarty->display('link_js.tpl');
$smarty->display('datatable_js.tpl');
$smarty->display('tenant_enquiry_list_data_table_js.tpl');
$smarty->display('modal_success.tpl');
//$smarty->display('validation_engine_js.tpl');

$smarty->display('body_close.tpl');

$smarty->display('html_close.tpl');
?>