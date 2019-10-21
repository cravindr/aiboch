<?php
/* Smarty version 3.1.30, created on 2019-10-21 13:35:25
  from "/opt/lampp/htdocs/aiboch/aiboc_admin/templates/admin_user_table.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5dad66c5156134_71144434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70fa8f511e059a49ed0acdcc5007de081bb06af6' => 
    array (
      0 => '/opt/lampp/htdocs/aiboch/aiboc_admin/templates/admin_user_table.tpl',
      1 => 1481805704,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dad66c5156134_71144434 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ol class="breadcrumb" style="background-color:#e0dfe3 ; color: dodgerblue; font-family: Elephant">
    <h3>Users List</h3>
</ol>
<div class="well">
    <table id="mytable" class="table table-inverse table-bordered">
        <thead>
        <tr style="background-color: #00AA88; color: whitesmoke" width="100%">
            <th>Id</th>
            <th width="10%">User Name</th>
            <th width="10%">Name</th>
            <th>Email</th>
            <th width="8%">Mobile</th>
            <th>Role</th>
            <th>Place</th>
            <th width="4%">Status</th>
            <th>Action</th>
        </tr>
        </thead>
    </table>
</div>
<?php }
}
