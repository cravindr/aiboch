<?php
/* Smarty version 3.1.30, created on 2016-11-21 07:36:58
  from "E:\wamp\www\1\aiboc\templates\index_js.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5832960acd9578_70864443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '551275e46a86e49818727d1ef730f6f678454f51' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\templates\\index_js.tpl',
      1 => 1479710214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5832960acd9578_70864443 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    $(document).ready(function(){
        $('[data-toggle="popover"]').popover({
            html: true,
            content: function () {
                $('[data-toggle="popover"]').not(this).popover('hide');
                return  $("#popover_login").html();

            }
        });
    });

<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="script/getOTP.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="script/fnLogOn.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="script/advanced_search_modal_content.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    function assign_selected_city(data)
    {
        $('#selected_place').val(data);
    }
<?php echo '</script'; ?>
>
<?php }
}
