<?php
/* Smarty version 3.1.30, created on 2017-01-03 11:22:41
  from "E:\wamp\www\1\aiboc\aiboc_admin\templates\top_tiles.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_586b3c29447548_37110660',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83e071c619ce93b524dafbcb850294fdf1b61105' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\aiboc_admin\\templates\\top_tiles.tpl',
      1 => 1483422715,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_586b3c29447548_37110660 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- top tiles -->
<div class="row tile_count">
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Total Building</span>
        <div class="count green"><?php echo $_smarty_tpl->tpl_vars['totalbuilding']->value;?>
</div>
        <span class="count_bottom"><i class="green"></i><strong style="color: purple;"><?php echo $_smarty_tpl->tpl_vars['activebuild']->value;?>
</strong> Active Buildings</span>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-clock-o"></i> Total Tenant</span>
        <div class="count green"><?php echo $_smarty_tpl->tpl_vars['totaltenant']->value;?>
</div>
        <span class="count_bottom"><i class="green"></i><strong style="color: purple;"><?php echo $_smarty_tpl->tpl_vars['activetenant']->value;?>
</strong> Active Tenants</span>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Total Enquiry</span>
        <div class="count green"><?php echo $_smarty_tpl->tpl_vars['totalenquiry']->value;?>
</div>
        <span class="count_bottom"><i class="green"></i><strong style="color: purple;"><?php echo $_smarty_tpl->tpl_vars['activeenquiry']->value;?>
</strong> Active Tenants</span>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Today Register Building</span>
        <div class="count green"><?php echo $_smarty_tpl->tpl_vars['todayregbuilding']->value;?>
</div>
        
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Today Register Tenant</span>
        <div class="count green"><?php echo $_smarty_tpl->tpl_vars['todayregtenant']->value;?>
</div>
        
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Today's Enquiry</span>
        <div class="count green"><?php echo $_smarty_tpl->tpl_vars['todayenquiry']->value;?>
</div>
        
    </div>
</div>
<!-- /top tiles -->
<?php }
}
