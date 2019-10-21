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
require_once ('aiboc_admin/class/Tenant.php');
require_once ('tenant_authenticate.php');


$smarty->assign('name',"Welcome");

$smarty->assign('activemenu',"Profile");   // for breadcrumb
$smarty->assign('profileactive','active'); // for side menu
$smarty->assign('enqueirylistactive','');
$smarty->assign('changepass','');

if(isset($_SESSION['TENANT_LOGIN_DETAILS']))
{
    $detailslog = unserialize($_SESSION['TENANT_LOGIN_DETAILS']);

    //d$etailslog=new Tenant();
    $smarty->assign('name',$detailslog->name);
    $smarty->assign('emailid',$detailslog->emailid);
    $smarty->assign('mobile',$detailslog->mobile);
    $smarty->assign('bank_name',$detailslog->bank_name);
    $smarty->assign('workingbranch',$detailslog->working_branch);
    $smarty->assign('transferedbranch',$detailslog->transfered_banch);
    $smarty->assign('transferedplace',$detailslog->transfered_place);
    $smarty->assign('grade',$detailslog->scale_grade);
    $smarty->assign('qeamount',$detailslog->qeamount);
    $smarty->assign('maaount',$detailslog->maamount);
    $smarty->assign('others',$detailslog->others);
    $smarty->assign('empcode',$detailslog->empcode);
    $smarty->assign('address',$detailslog->address);
    $smarty->assign('place',$detailslog->place);
    $smarty->assign('city',$detailslog->city);
    $smarty->assign('state',$detailslog->state);
    $smarty->assign('pin',$detailslog->pin);

}


$smarty->display('html_open.tpl');

$smarty->display('head_open.tpl');
$smarty->assign('titletxt','AIBOH Apps');
$smarty->display('title.tpl');
$smarty->display('link_css.tpl');
$smarty->display('validation_engine_css.tpl');
//$smarty->display('datatable_css.tpl');
//$smarty->display('selectbox_css.tpl');
$smarty->display('head_close.tpl');

$smarty->display('body_open.tpl');

$smarty->display('dashboard_side_menu_tenant.tpl');

$smarty->display('dashboard_main_content_open.tpl');
$smarty->display('dashboard_breadcrumb.tpl');
$smarty->display('update_tenant.tpl');
$smarty->display('dashboard_main_content_close.tpl');

$smarty->display('link_js.tpl');
//$smarty->display('home_tab_js.tpl');
//$smarty->display('datatable_js.tpl');
//$smarty->display('bulding_list_js.tpl');
//$smarty->display('selectbox_js.tpl');


//$smarty->display('modal_success.tpl');
$smarty->display('validation_engine_js.tpl');
//$smarty->display('popover_signup_content.tpl');
$smarty->display('body_close.tpl');

$smarty->display('html_close.tpl');
?>