<?php
/* Smarty version 3.1.30, created on 2017-02-04 12:30:40
  from "E:\wamp\www\1\aiboc\aiboc_admin\templates\owner_appoinment_table.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58957c18491175_38337252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4695fc53600fa41ccafac481f68e4011e82cb9d' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\aiboc_admin\\templates\\owner_appoinment_table.tpl',
      1 => 1486191635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58957c18491175_38337252 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ol class="breadcrumb" style="background-color:#e0dfe3 ; color: dodgerblue; font-family: Elephant">
    <h3>Owner Appoinment</h3>
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
