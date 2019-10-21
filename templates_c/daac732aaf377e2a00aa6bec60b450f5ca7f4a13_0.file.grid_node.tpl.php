<?php
/* Smarty version 3.1.30, created on 2019-10-21 10:00:03
  from "/opt/lampp/htdocs/aiboch/templates/grid_node.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5dad6583c080a5_18406843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'daac732aaf377e2a00aa6bec60b450f5ca7f4a13' => 
    array (
      0 => '/opt/lampp/htdocs/aiboch/templates/grid_node.tpl',
      1 => 1479710214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dad6583c080a5_18406843 (Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="col-md-3 box_1">
    <div class="panel panel-default">
        <div class="panel-heading"><center><?php echo $_smarty_tpl->tpl_vars['city_name']->value;?>
</center></div>
        <div class="panel-body">
            <a href="single.html"><img src="<?php echo $_smarty_tpl->tpl_vars['image_url']->value;?>
" class="img-responsive" alt=""/></a>

            <div class="box_3">
                <button data-toggle="popover" onclick="assign_selected_city('<?php echo $_smarty_tpl->tpl_vars['city_name']->value;?>
')" data-placement="bottom" class="btn btn-success form-control pop">Search</button>
            </div>
        </div>
    </div>
</div>

<?php }
}
