<?php
/**
 * Created by PhpStorm.
 * User: oom
 * Date: 08-Oct-16
 * Time: 12:57 PM
 */ ?>
<?php
require_once('smartysettings.php');

$smarty->display('html_open.tpl');

$smarty->display('head_open.tpl');
$smarty->assign('titletxt','welcome');
$smarty->display('title.tpl');
$smarty->display('link_css.tpl');
$smarty->display('head_close.tpl');

$smarty->display('body_open.tpl');

$smarty->display('container_body_open.tpl');
$smarty->assign('resulttxt','');
$smarty->display('login.tpl');

$smarty->display('link_js.tpl');
$smarty->display('container_body_close.tpl');


$smarty->display('body_close.tpl');

$smarty->display('modal_forgotpassword.tpl');
$smarty->display('html_close.tpl');
?>