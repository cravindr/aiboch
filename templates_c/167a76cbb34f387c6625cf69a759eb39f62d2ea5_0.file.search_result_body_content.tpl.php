<?php
/* Smarty version 3.1.30, created on 2016-12-13 08:47:53
  from "E:\wamp\www\1\aiboc\templates\search_result_body_content.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584fa7a9344568_83875728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '167a76cbb34f387c6625cf69a759eb39f62d2ea5' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\templates\\search_result_body_content.tpl',
      1 => 1481615266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_584fa7a9344568_83875728 (Smarty_Internal_Template $_smarty_tpl) {
?>



<section class="col-xs-12 col-sm-6 col-md-12">
    <article class="search-result row">
        <div class="col-xs-12 col-sm-12 col-md-2">
            <a href="#" data-toggle="modal" data-target="#formsuccess" onclick="slideshow('<?php echo $_smarty_tpl->tpl_vars['building_id']->value;?>
')" title="AIBOC" class="thumbnail"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="Lorem ipsum" /></a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-2">
            <ul class="meta-search">
                
                <li><i class="glyphicon glyphicon-bed"></i> <span> 2 Bed Rooms</span></li>
                <li><i class="fa fa-inr"></i> <span>Rent Rs. <?php echo $_smarty_tpl->tpl_vars['rent']->value;?>
</span></li>

            </ul>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-7 excerpet">

            <div class="row"><h3><a href="#" title=""><?php echo $_smarty_tpl->tpl_vars['city']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['location']->value;?>
</a></h3></div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-5">
                    <ul class="meta-search">
                        <li> <?php echo $_smarty_tpl->tpl_vars['parking']->value;?>
</li>
                        <li><i class="fa fa-bath"></i> <span><?php echo $_smarty_tpl->tpl_vars['no_of_toilets']->value;?>
 Toilet(s)</span></li>
                        <li><i class="fa fa-battery-full"></i> <span><?php echo $_smarty_tpl->tpl_vars['powerbackup']->value;?>
</span></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-5">
                    <ul class="meta-search">
                        <li><i class="fa fa-tint"></i> <span><?php echo $_smarty_tpl->tpl_vars['waterfacility']->value;?>
</span></li>
                        <li><i class="fa fa-building"></i> <span>Lift. <?php echo $_smarty_tpl->tpl_vars['lift']->value;?>
</span></li>
                        <li><i class="fa fa-area-chart"></i> <span><?php echo $_smarty_tpl->tpl_vars['corpetarea']->value;?>
 Sqf Corpet Area</span></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2">
                    <ul class="meta-search">

                        <li><button type="button" class="btn btn-primary btn-sm " id="interested" name="interested" onclick="fnInterested('<?php echo $_smarty_tpl->tpl_vars['building_id']->value;?>
')"><i style="color: white" class="fa fa-thumbs-up"></i>
                                Interested</button>  </li>
                        <li> <p>&nbsp;</p></li>
                        <li><a class="" title="Images" data-toggle="modal" data-target="#formsuccess" onclick="slideshow('<?php echo $_smarty_tpl->tpl_vars['building_id']->value;?>
')">Images..</a> </li>
                    </ul>


                </div>
            </div>

        </div>
        
        <span class="clearfix borda"></span>
    </article>
</section><?php }
}
