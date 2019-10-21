<?php
/* Smarty version 3.1.30, created on 2016-11-30 12:11:31
  from "E:\wamp\www\1\aiboc\aiboc_admin\templates\tenant_table.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583eb3e3ddca10_16206968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1601e7a33fa8407cdab6af92044766985663d320' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\aiboc_admin\\templates\\tenant_table.tpl',
      1 => 1480504288,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583eb3e3ddca10_16206968 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ol class="breadcrumb" style="background-color:#e0dfe3 ; color: dodgerblue; font-family: Elephant">
    <h3>Tenant Registration List</h3>

</ol>

<div  class="container">
    <button name="addnew" id="addnew" class="btn btn-success pull-right" data-toggle="modal" data-target="#formsuccesslg" onclick="addnew()"><i class="fa fa-plus"></i> New</button>
</div>

<div class="well">
    <table id="mytable" class="table table-inverse table-bordered">
        <thead>
        <tr style="background-color: #00AA88; color: whitesmoke" width="100%">

            <th>Id</th>
            <th>Name</th>
            <th>Mobile</th>
            <th>Email</th>

            <th>Scale/Grade</th>
            <th>Working</th>
            <th>Transfered</th>
            <th>Quat.Eligibe</th>
            <th>Action</th>
        </tr>
        </thead>
    </table>
</div>
<?php }
}
