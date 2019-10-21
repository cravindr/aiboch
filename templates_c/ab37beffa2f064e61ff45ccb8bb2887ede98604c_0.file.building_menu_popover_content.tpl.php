<?php
/* Smarty version 3.1.30, created on 2016-11-15 11:52:39
  from "E:\wamp\www\1\aiboc\templates\building_menu_popover_content.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_582ae8f76bca50_95629584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab37beffa2f064e61ff45ccb8bb2887ede98604c' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\templates\\building_menu_popover_content.tpl',
      1 => 1476871959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_582ae8f76bca50_95629584 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="menupop" class="hide">
  <div class="panel panel-default">
      <div class="panel-body">
          <button id="log" class="btn btn-success form-control">Login</button><br><br>
          <button id="reg" class="btn btn-primary form-control">Register</button>
      </div>
  </div>
</div>

<style>
    .panel{
        margin-bottom: 6px;
    }
    a{
        cursor: pointer;
    }
</style>

<?php echo '<script'; ?>
>
    $('#popbuild').popover({
        html: true,
        placement: 'bottom',
        content: function () {
            return $('#menupop').html();
        }
    });

    $(document).on("click", "#reg", function() {
        window.location.href = "register_owner.php";
    });

    $(document).on("click", "#log", function() {
        window.location.href = "sigin.php";
    });

<?php echo '</script'; ?>
><?php }
}
