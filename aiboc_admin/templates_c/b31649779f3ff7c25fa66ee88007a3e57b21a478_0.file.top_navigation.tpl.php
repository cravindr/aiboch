<?php
/* Smarty version 3.1.30, created on 2019-10-21 10:02:24
  from "/opt/lampp/htdocs/aiboch/aiboc_admin/templates/top_navigation.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5dad6610955727_05517029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b31649779f3ff7c25fa66ee88007a3e57b21a478' => 
    array (
      0 => '/opt/lampp/htdocs/aiboch/aiboc_admin/templates/top_navigation.tpl',
      1 => 1481952646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dad6610955727_05517029 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <nav class="" role="navigation">
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img id="topimg" src="images/user-images.jpg" alt=""><?php echo $_smarty_tpl->tpl_vars['username']->value;?>

                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li><a href="javascript:;">Profile</a></li>
                        <li>
                            <a href="javascript:;">
                                <span class="badge bg-red pull-right">50%</span>
                                <span>Settings</span>
                            </a>
                        </li>
                        <li><a href="javascript:;">Help</a></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                    </ul>
                </li>

                <li role="presentation" class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge bg-green">6</span>
                    </a>
                    
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->

<?php }
}
