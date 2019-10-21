<?php
/* Smarty version 3.1.30, created on 2016-10-11 04:09:22
  from "G:\wamp\www\projects\aiboc\aiboc_admin\templates\link_js.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57fc49d2015ed9_33526739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6befa4009ad9c18018d26f6420168c3bb15a7737' => 
    array (
      0 => 'G:\\wamp\\www\\projects\\aiboc\\aiboc_admin\\templates\\link_js.tpl',
      1 => 1475946962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fc49d2015ed9_33526739 (Smarty_Internal_Template $_smarty_tpl) {
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
