<?php
/* Smarty version 3.1.30, created on 2019-10-21 13:32:48
  from "/opt/lampp/htdocs/aiboch/aiboc_admin/templates/tenant_appoinment_table.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5dad6628e68f18_00205947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25bfc5873f768df5d64f1f33dca82f1e2c21fd24' => 
    array (
      0 => '/opt/lampp/htdocs/aiboch/aiboc_admin/templates/tenant_appoinment_table.tpl',
      1 => 1486191888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dad6628e68f18_00205947 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ol class="breadcrumb" style="background-color:#e0dfe3 ; color: dodgerblue; font-family: Elephant">
    <h3>Tenant Appoinment</h3>
</ol>
<div class="col-lg-offset-4 col-lg-3">
    <div class="form-group">
        <label>Choose Date</label>
        <input type="text" id="selectdate" class="form-control">
    </div>
</div>
<div class="well">
    <table id="mytable" class="table table-inverse table-bordered">
        <thead>
        <tr style="background-color: #00AA88; color: whitesmoke" width="100%">

            <th>Id</th>
            <th>wid</th>
            <th>Name</th>
            <th>Mobile</th>
            <th>Date</th>
            <th>Time</th>
            <th>Description</th>
            <th width="10%">Status</th>
            <th>Action</th>

        </tr>
        </thead>
    </table>
</div><?php }
}
