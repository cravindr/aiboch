<?php
/**
 * Created by PhpStorm.
 * User: oom
 * Date: 10/19/2016
 * Time: 3:41 PM
 */
?>
<?php
require_once('smartysettings.php');
require_once ('aiboc_admin/class/Owner.php');
unset($_SESSION['OWNER_LOGIN_DETAILS']);

$smarty->display('html_open.tpl');
$smarty->display('head_open.tpl');
$smarty->assign('titletxt','test');
$smarty->display('title.tpl');
$smarty->display('link_css.tpl');
//$smarty->display('selectbox_css.tpl');
$smarty->display('form_align_css.tpl');
$smarty->display('validation_engine_css.tpl');
$smarty->display('head_close.tpl');

$smarty->display('body_open.tpl');
$smarty->display('top_menu.tpl');
$smarty->display('tenant_login_form.tpl');
$smarty->display('container_top_open.tpl');
$smarty->display('page_footer.tpl');
$smarty->display('container_top_close.tpl');

$smarty->display('link_js.tpl');
//$smarty->display('selectbox_js.tpl');
$smarty->display('validation_engine_js.tpl');
//$smarty->display('building_menu_popover_content.tpl');
$smarty->display('body_close.tpl');

$smarty->display('html_close.tpl');
?>