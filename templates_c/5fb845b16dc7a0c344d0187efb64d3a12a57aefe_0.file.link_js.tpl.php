<?php
/* Smarty version 3.1.30, created on 2019-10-21 10:00:03
  from "/opt/lampp/htdocs/aiboch/templates/link_js.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5dad6583c28495_82756660',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fb845b16dc7a0c344d0187efb64d3a12a57aefe' => 
    array (
      0 => '/opt/lampp/htdocs/aiboch/templates/link_js.tpl',
      1 => 1477913420,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dad6583c28495_82756660 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- jQuery -->
<?php echo '<script'; ?>
 src="aiboc_admin/vendars/jquery/jquery-1.12.4.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- jQuery -->
<!-- Bootstrap -->
<?php echo '<script'; ?>
 src="aiboc_admin/vendars/bootstrap-3.3.6/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- Bootstrap -->
<!-- Responsive Slider -->
<?php echo '<script'; ?>
 src="vendars/scripts/responsiveslides.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="vendars/scripts/slidercontrol.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- Responsive Slider -->

<!-- Bootstap-dropdown -->
<?php echo '<script'; ?>
 src="aiboc_admin/vendars/bootstrap-3.3.6/bootstrap-dropdown/bootstrap-dropdown.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(function () {
        $('.dropdown-toggle').dropdown();
    });
<?php echo '</script'; ?>
>
<!-- Bootstap-dropdown -->

<?php echo '<script'; ?>
 src="vendars/scripts/easyResponsiveTabs.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });
<?php echo '</script'; ?>
>

<!-- script for menu -->
<?php echo '<script'; ?>
>
    $( "span.menu" ).click(function() {
        $( ".top-menu" ).slideToggle( "slow", function() {
            // Animation complete.
        });
    });
<?php echo '</script'; ?>
>
<!-- script for menu -->
<?php echo '<script'; ?>
 src="vendars/submenu/js/bootstrap-submenu.min.js" type="text/javascript"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(function () {
        $('#about').submenupicker();
    });
<?php echo '</script'; ?>
>


<?php }
}
