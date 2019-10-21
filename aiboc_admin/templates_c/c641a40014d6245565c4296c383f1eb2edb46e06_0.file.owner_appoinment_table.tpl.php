<?php
/* Smarty version 3.1.30, created on 2019-10-21 13:35:18
  from "/opt/lampp/htdocs/aiboch/aiboc_admin/templates/owner_appoinment_table.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5dad66beba0878_29508354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c641a40014d6245565c4296c383f1eb2edb46e06' => 
    array (
      0 => '/opt/lampp/htdocs/aiboch/aiboc_admin/templates/owner_appoinment_table.tpl',
      1 => 1486191634,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dad66beba0878_29508354 (Smarty_Internal_Template $_smarty_tpl) {
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
