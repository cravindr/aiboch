<?php
/**
 * Created by PhpStorm.
 * User: Ravindran
 * Date: 11/4/2016
 * Time: 12:16 PM
 */

require_once('smartysettings.php');
require_once ('aiboc_admin/class/Tenant.php');
require_once ('tenant_authenticate.php');


$smarty->assign('name',"Welcome");
$smarty->assign('activemenu',"Enquiry List");

if(isset($_SESSION['ENQUIRY_LIST_EDIT_ID']))
{
    $enqiryid=$_SESSION['ENQUIRY_LIST_EDIT_ID'];
    $smarty->assign('enquiryid',$enqiryid);
    $smarty->assign('comments',Tenant::SelectEnquiry($enqiryid));
    $smarty->display('html_open.tpl');
    $smarty->display('head_open.tpl');
    $smarty->assign('titletxt','AIBOH Apps');
    $smarty->display('title.tpl');
    $smarty->display('link_css.tpl');
    $smarty->display('validation_engine_css.tpl');
    $smarty->display('head_close.tpl');
    $smarty->display('body_open.tpl');
    $smarty->assign('profileactive','active');
    $smarty->assign('enqueirylistactive','');
    $smarty->display('dashboard_side_menu_tenant.tpl');
    $smarty->display('dashboard_main_content_open.tpl');
    $smarty->display('dashboard_breadcrumb.tpl');
    $smarty->display('tenant_comments_edit.tpl');
    $smarty->display('dashboard_main_content_close.tpl');
    $smarty->display('link_js.tpl');
    $smarty->display('validation_engine_js.tpl');
    $smarty->display('body_close.tpl');
    $smarty->display('ckeditor_js.tpl');
    $smarty->display('html_close.tpl');
}


?>