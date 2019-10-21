<?php
/* Smarty version 3.1.30, created on 2019-10-21 13:32:24
  from "/opt/lampp/htdocs/aiboch/aiboc_admin/templates/owner_modal_view.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5dad66109b5534_87608194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af12e3d15b38330ce67acde899fdc98067b7c625' => 
    array (
      0 => '/opt/lampp/htdocs/aiboch/aiboc_admin/templates/owner_modal_view.tpl',
      1 => 1481539672,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dad66109b5534_87608194 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Modal -->
<div id="modalowner" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close"  data-dismiss="modal">&times;</button>
                <div id="modal_header"></div>
            </div>
            <div class="modal-body" id="modalshowowner">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default"  data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<style>
    #modalowner .modal-header,.modal-footer{
        background-color: pink;
    }
</style><?php }
}
