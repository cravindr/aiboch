<?php
/* Smarty version 3.1.30, created on 2019-10-21 10:00:03
  from "/opt/lampp/htdocs/aiboch/templates/index_js.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5dad6583c2c488_08214005',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ed33db01497b3ad9b867664c82875b60af72bcd' => 
    array (
      0 => '/opt/lampp/htdocs/aiboch/templates/index_js.tpl',
      1 => 1479710214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dad6583c2c488_08214005 (Smarty_Internal_Template $_smarty_tpl) {
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
