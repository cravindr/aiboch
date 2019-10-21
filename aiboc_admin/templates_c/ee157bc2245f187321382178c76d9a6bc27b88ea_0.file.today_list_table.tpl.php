<?php
/* Smarty version 3.1.30, created on 2017-01-04 16:11:53
  from "E:\wamp\www\1\aiboc\aiboc_admin\templates\today_list_table.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_586cd171b5aa84_84165926',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee157bc2245f187321382178c76d9a6bc27b88ea' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\aiboc_admin\\templates\\today_list_table.tpl',
      1 => 1483526511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_586cd171b5aa84_84165926 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ol class="breadcrumb" style="background-color:#e0dfe3 ; color: dodgerblue; font-family: Elephant">
    <h3>Today Registration List</h3>
</ol>
<div class="row">
    <div class="col-lg-6 well">
        <h3 style="color: #0000cc;"><u>Building List</u></h3>
        <table id="mybuild" class="table table-inverse table-bordered">
            <thead>
            <tr style="background-color: #00AA88; color: whitesmoke" width="90%">
                <th>Id</th>
                <th>Owner_id</th>
                <th>Build Type</th>
                <th>Rooms</th>
                <th>Location</th>
                <th width="10%">Status</th>
                <th width="20%">Action</th>
            </tr>
            </thead>
        </table>
    </div>
    <div class="col-lg-6 well">
        <h3 style="color: #0000cc;"><u>Tenant List</u></h3>
        <table id="mytenant" class="table table-inverse table-bordered">
            <thead>
            <tr style="background-color: #00AA88; color: whitesmoke" width="100%">
                <th>Id</th>
                <th>Name</th>
                <th>Mobile</th>
                <th width="10%">Status</th>
                <th width="20%">Action</th>
            </tr>
            </thead>
        </table>
    </div>
</div>

<?php }
}
