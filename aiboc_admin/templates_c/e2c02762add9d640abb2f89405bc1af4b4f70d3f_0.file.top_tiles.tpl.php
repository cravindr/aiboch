<?php
/* Smarty version 3.1.30, created on 2019-10-21 13:32:24
  from "/opt/lampp/htdocs/aiboch/aiboc_admin/templates/top_tiles.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5dad66109a5516_55238670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2c02762add9d640abb2f89405bc1af4b4f70d3f' => 
    array (
      0 => '/opt/lampp/htdocs/aiboch/aiboc_admin/templates/top_tiles.tpl',
      1 => 1483422714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dad66109a5516_55238670 (Smarty_Internal_Template $_smarty_tpl) {
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
