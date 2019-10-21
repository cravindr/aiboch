<?php
/* Smarty version 3.1.30, created on 2019-10-21 13:35:28
  from "/opt/lampp/htdocs/aiboch/aiboc_admin/templates/tenant_table.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5dad66c87a8414_04094711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b590421a5045e267eacc7b5c3e9cf4f09a904a4' => 
    array (
      0 => '/opt/lampp/htdocs/aiboch/aiboc_admin/templates/tenant_table.tpl',
      1 => 1480504288,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dad66c87a8414_04094711 (Smarty_Internal_Template $_smarty_tpl) {
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
