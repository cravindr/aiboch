<?php
/* Smarty version 3.1.30, created on 2016-11-21 10:04:56
  from "E:\wamp\www\1\aiboc\templates\popover_signup_content.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5832b8b8bfffb4_21462086',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbed5bdd8197d7c5fd5f90e24ab205c3d275ee36' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\templates\\popover_signup_content.tpl',
      1 => 1478170741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5832b8b8bfffb4_21462086 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="signupmenu" class="hide">
    <div class="panel panel-default">
        <div class="panel-body">
            <button id="profile" class="btn btn-info form-control">Profile</button><br><br>
            <button id="logout" class="btn btn-danger form-control">Logout</button>
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
    $('#signupid').popover({
        html: true,
        placement: 'bottom',
        content: function () {
            return $('#signupmenu').html();
        }
    });

    $(document).on("click", "#profile", function() {
        window.location.href = "dashboard.php";
    });

    $(document).on("click", "#logout", function() {
        window.location.href = "../logout.php";
    });

<?php echo '</script'; ?>
><?php }
}
