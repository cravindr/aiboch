<?php
/**
 * Created by PhpStorm.
 * User: oom
 * Date: 14-Oct-16
 * Time: 5:13 PM
 */ ?>
<?php
require_once('smartysettings.php');
require_once ('aiboc_admin/class/Owner.php');

if(isset($_SESSION['OWNER_LOGIN_DETAILS']))
{
    $detailslog = unserialize($_SESSION['OWNER_LOGIN_DETAILS']);
    $name = $detailslog->name;
    $template = "owner_top_menu.tpl";
}
elseif(isset($_SESSION['TENANT_LOGIN_DETAILS']))
{
    $detailslog = unserialize($_SESSION['TENANT_LOGIN_DETAILS']);
    $name = $detailslog->name;
    $template = "tenant_top_menu.tpl";
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
$smarty->display('selectbox_css.tpl');
$smarty->display('form_align_css.tpl');
$smarty->display('fileinput_css.tpl');
$smarty->display('head_close.tpl');

$smarty->display('body_open.tpl');
//$smarty->display('header_menu.tpl');
$smarty->assign('name',$name);

$smarty->display($template);
$smarty->display('owner_building_register_form.tpl');
$smarty->display('container_top_open.tpl');
$smarty->display('page_footer.tpl');
$smarty->display('container_top_close.tpl');

$smarty->display('link_js.tpl');
$smarty->display('selectbox_js.tpl');
$smarty->display('fileinput_js.tpl');
$smarty->display('building_register_file_upload_js.tpl');
$smarty->display('popover_signup_content.tpl');
$smarty->display('body_close.tpl');

$smarty->display('html_close.tpl');
?>