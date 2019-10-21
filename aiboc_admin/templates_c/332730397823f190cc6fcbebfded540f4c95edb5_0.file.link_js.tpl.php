<?php
/* Smarty version 3.1.30, created on 2016-10-10 07:51:45
  from "D:\wamp\www\aiboc\aiboc_admin\templates\link_js.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57fb2c71b2c388_77045828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '332730397823f190cc6fcbebfded540f4c95edb5' => 
    array (
      0 => 'D:\\wamp\\www\\aiboc\\aiboc_admin\\templates\\link_js.tpl',
      1 => 1475946962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fb2c71b2c388_77045828 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- jQuery -->
<?php echo '<script'; ?>
 src="vendars/jquery/jquery-1.12.4.min.js"><?php echo '</script'; ?>
>
<!-- jQuery -->
<!-- Bootstrap -->
<?php echo '<script'; ?>
 src="vendars/bootstrap-3.3.6/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- Bootstrap -->
<!-- Custom Theme Scripts -->
<?php echo '<script'; ?>
 src="vendars/build/js/custom.min.js"><?php echo '</script'; ?>
>
<!-- Custom Theme Scripts -->

<!-- gauge.js -->
<?php echo '<script'; ?>
>
    var opts = {
        lines: 12,
        angle: 0,
        lineWidth: 0.4,
        pointer: {
            length: 0.75,
            strokeWidth: 0.042,
            color: '#1D212A'
        },
        limitMax: 'false',
        colorStart: '#1ABC9C',
        colorStop: '#1ABC9C',
        strokeColor: '#F0F3F3',
        generateGradient: true
    };
    var target = document.getElementById('foo'),
            gauge = new Gauge(target).setOptions(opts);

    gauge.maxValue = 6000;
    gauge.animationSpeed = 32;
    gauge.set(3200);
    gauge.setTextField(document.getElementById("gauge-text"));
<?php echo '</script'; ?>
>
<!-- /gauge.js --><?php }
}
