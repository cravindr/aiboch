<?php
/* Smarty version 3.1.30, created on 2016-12-08 11:32:01
  from "E:\wamp\www\1\aiboc\aiboc_admin\templates\building_table.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584936a1352c25_54437480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b397112dd20f8fa0401374517cb0ca392eca31c' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\aiboc_admin\\templates\\building_table.tpl',
      1 => 1481192999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_584936a1352c25_54437480 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ol class="breadcrumb" style="background-color:#e0dfe3 ; color: dodgerblue; font-family: Elephant">
    <h3>Building Registration List</h3>
</ol>
<?php echo $_smarty_tpl->tpl_vars['buttonfile']->value;?>

<div class="well">
    <table id="mytable" class="table table-inverse table-bordered">
        <thead>
        <tr style="background-color: #00AA88; color: whitesmoke" width="100%">
            <th>Id</th>
            <th>Owner_id</th>
            <th width="15%">Build Type</th>
            <th width="2%">Rooms</th>
            <th width="2%">Toilets</th>
            <th>Parking</th>
            <th width="12%">Location</th>
            <th width="10%">Place</th>
            <th width="10%">State</th>
            <th width="3%">Status</th>
            <th>Action</th>
        </tr>
        </thead>
    </table>
</div>

<?php }
}
