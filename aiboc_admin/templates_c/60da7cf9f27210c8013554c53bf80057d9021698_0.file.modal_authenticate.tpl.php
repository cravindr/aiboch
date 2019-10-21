<?php
/* Smarty version 3.1.30, created on 2019-10-21 13:32:24
  from "/opt/lampp/htdocs/aiboch/aiboc_admin/templates/modal_authenticate.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5dad6610a377d4_97834242',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60da7cf9f27210c8013554c53bf80057d9021698' => 
    array (
      0 => '/opt/lampp/htdocs/aiboch/aiboc_admin/templates/modal_authenticate.tpl',
      1 => 1481872750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dad6610a377d4_97834242 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Modal -->
<div id="modalauth" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close"  data-dismiss="modal">&times;</button>
                <div id="modal_header"></div>
            </div>
            <div class="modal-body" id="modelmsg">
            <h2>You don't have permission to access this page.. </h2>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default"  data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>


<?php echo '<script'; ?>
>
    $(function () {
        $("#modalauth").modal("show");
    });
<?php echo '</script'; ?>
><?php }
}
