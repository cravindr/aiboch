<?php
/* Smarty version 3.1.30, created on 2017-02-04 17:50:48
  from "E:\wamp\www\1\aiboc\aiboc_admin\templates\role_table.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5895c7204c8968_92059047',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed66d4a5a4c1c158454ab8acee0f832fe2494864' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\aiboc_admin\\templates\\role_table.tpl',
      1 => 1486210842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5895c7204c8968_92059047 (Smarty_Internal_Template $_smarty_tpl) {
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
