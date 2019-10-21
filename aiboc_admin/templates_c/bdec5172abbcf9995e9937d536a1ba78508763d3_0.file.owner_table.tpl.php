<?php
/* Smarty version 3.1.30, created on 2019-10-21 13:38:45
  from "/opt/lampp/htdocs/aiboch/aiboc_admin/templates/owner_table.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5dad678def7e96_17350387',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdec5172abbcf9995e9937d536a1ba78508763d3' => 
    array (
      0 => '/opt/lampp/htdocs/aiboch/aiboc_admin/templates/owner_table.tpl',
      1 => 1481183440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dad678def7e96_17350387 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ol class="breadcrumb" style="background-color:#e0dfe3 ; color: dodgerblue; font-family: Elephant">
    <h3>Building Owners Registration List</h3>
</ol>
<div class="well">
    <table id="mytable" class="table table-inverse table-bordered">
        <thead>
        <tr style="background-color: #00AA88; color: whitesmoke" width="100%">
            <th>Id</th>
            <th width="10%">Name</th>
            <th>Email</th>
            <th width="8%">Mobile</th>
            <th>Place</th>
            <th>City</th>
            <th>State</th>
            <th width="4%">Status</th>
            <th>Action</th>
        </tr>
        </thead>
    </table>
</div>
<?php }
}
