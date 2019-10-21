<?php
/* Smarty version 3.1.30, created on 2017-01-04 14:10:44
  from "E:\wamp\www\1\aiboc\aiboc_admin\templates\today_list_table.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_586cb50cac0495_66148043',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6657561ffdec51186c7f9052b41463ba86f91841' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\aiboc_admin\\templates\\today_list_table.tpl',
      1 => 1483519241,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_586cb50cac0495_66148043 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ol class="breadcrumb" style="background-color:#e0dfe3 ; color: dodgerblue; font-family: Elephant">
    <h3>Today Registration List</h3>
</ol>
<div class="row">
    <div class="col-lg-6 well">
        <h3 style="color: #0000cc;"><u>Building List</u></h3>
        <table id="mytable" class="table table-inverse table-bordered">
            <thead>
            <tr style="background-color: #00AA88; color: whitesmoke" width="100%">
                <th>Id</th>
                <th width="20%">Bank Name</th>
                <th>Description</th>
                <th width="10%">Status</th>
                <th width="20%">Action</th>
            </tr>
            </thead>
        </table>
    </div>
    <div class="col-lg-6 well">
        <h3 style="color: #0000cc;"><u>Tenant List</u></h3>
        <table id="mytable" class="table table-inverse table-bordered">
            <thead>
            <tr style="background-color: #00AA88; color: whitesmoke" width="100%">
                <th>Id</th>
                <th width="20%">Bank Name</th>
                <th>Description</th>
                <th width="10%">Status</th>
                <th width="20%">Action</th>
            </tr>
            </thead>
        </table>
    </div>
</div><?php }
}
