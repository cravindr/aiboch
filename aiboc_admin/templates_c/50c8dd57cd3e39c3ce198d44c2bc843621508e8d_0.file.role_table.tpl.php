<?php
/* Smarty version 3.1.30, created on 2019-10-21 13:39:06
  from "/opt/lampp/htdocs/aiboch/aiboc_admin/templates/role_table.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5dad67a25faeb6_39522470',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50c8dd57cd3e39c3ce198d44c2bc843621508e8d' => 
    array (
      0 => '/opt/lampp/htdocs/aiboch/aiboc_admin/templates/role_table.tpl',
      1 => 1486210842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dad67a25faeb6_39522470 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ol class="breadcrumb" style="background-color:#e0dfe3 ; color: dodgerblue; font-family: Elephant">
    <h3>Tenant Registration List</h3>

</ol>

<div  class="container">
    <button name="addnew" id="addnew" class="btn btn-success pull-right"><i class="fa fa-plus"></i> New</button>
</div>

<div class="well ">

    <table id="mytable" class="table table-inverse table-bordered">
        <thead>
        <tr style="background-color: #00AA88; color: whitesmoke" width="100%">

            <th>Id</th>
            <th>Name</th>
            <th>Description</th>
            <th>Action</th>

        </tr>
        </thead>
    </table>

</div>

<?php }
}
