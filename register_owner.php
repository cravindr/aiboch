<?php
/**
 * Created by PhpStorm.
 * User: oom
 * Date: 10/19/2016
 * Time: 12:26 PM
 */
?>
<?php
require_once('smartysettings.php');
require_once ('aiboc_admin/class/Owner.php');
require_once ('aiboc_admin/class/Tenant.php');

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
$smarty->display('selectbox_css.tpl');
$smarty->display('form_align_css.tpl');
$smarty->display('validation_engine_css.tpl');
$smarty->display('head_close.tpl');

$smarty->display('body_open.tpl');
$smarty->assign('name',$name);

$smarty->display($template);
$smarty->display('owner_register_form.tpl');
$smarty->display('container_top_open.tpl');
$smarty->display('page_footer.tpl');
$smarty->display('container_top_close.tpl');

$smarty->display('link_js.tpl');
$smarty->display('validation_engine_js.tpl');
$smarty->display('selectbox_js.tpl');
$smarty->display('terms_and_condition_js.tpl');
$smarty->display('popover_signup_content.tpl');
$smarty->display('body_close.tpl');
$smarty->display('modal_success.tpl');

$smarty->display('html_close.tpl');
?>