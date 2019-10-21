<?php
/* Smarty version 3.1.30, created on 2016-11-14 07:36:34
  from "E:\wamp\www\1\aiboc\templates\grid_node_logged.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58295b725c48b0_39328786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc5d956886ab3b3109d34531f98e446a1a7d04bc' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\templates\\grid_node_logged.tpl',
      1 => 1478603689,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58295b725c48b0_39328786 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-md-3 box_1">
    <div class="panel panel-default">
        <div class="panel-heading"><center><?php echo $_smarty_tpl->tpl_vars['city_name']->value;?>
</center></div>
        <div class="panel-body">
            <a href="single.html"><img src="<?php echo $_smarty_tpl->tpl_vars['image_url']->value;?>
" class="img-responsive" alt=""/></a>

            <div class="box_3">
                <button type="button" onclick="window.location.href='search.php?place=<?php echo $_smarty_tpl->tpl_vars['city_name']->value;?>
'"  data-placement="bottom" class="btn btn-success form-control pop">Search</button>
            </div>
        </div>
    </div>
</div><?php }
}
