<?php
/* Smarty version 3.1.30, created on 2016-11-29 13:28:42
  from "E:\wamp\www\1\aiboc\aiboc_admin\templates\tenant_view_table.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583d747af112b6_01172253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bb479ce75a6c6228cdcea494a2e7015e509faf9' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\aiboc_admin\\templates\\tenant_view_table.tpl',
      1 => 1480422508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583d747af112b6_01172253 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table id="tenant_table_modal" class="table table-bordered">
    <tr>
        <td>  Name    </td>
        <td>  <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
  </td>
    </tr>
    <tr>
        <td>  Mobile    </td>
        <td>  <?php echo $_smarty_tpl->tpl_vars['mobile']->value;?>
  </td>
    </tr>
    <tr>
        <td>  Email Id    </td>
        <td>  <?php echo $_smarty_tpl->tpl_vars['emailid']->value;?>
  </td>
    </tr>
    <tr>
        <td>  Scale / Grade     </td>
        <td>  <?php echo $_smarty_tpl->tpl_vars['grde']->value;?>
  </td>
    </tr>
    <tr>
        <td>  Bank Name    </td>
        <td>  <?php echo $_smarty_tpl->tpl_vars['bank_name']->value;?>
  </td>
    </tr>
    <tr>
        <td>  Working Branch    </td>
        <td>  <?php echo $_smarty_tpl->tpl_vars['working_branch']->value;?>
  </td>
    </tr>
    <tr>
        <td>  Transferred Branch    </td>
        <td>  <?php echo $_smarty_tpl->tpl_vars['transfered_banch']->value;?>
  </td>
    </tr>
    <tr>
        <td>  Transferred Place    </td>
        <td>  <?php echo $_smarty_tpl->tpl_vars['transfered_place']->value;?>
  </td>
    </tr>
    <tr>
        <td>  Quarters Eligibility Amount    </td>
        <td>  <?php echo $_smarty_tpl->tpl_vars['qeamount']->value;?>
  </td>
    </tr>
    <tr>
        <td>  Max.Affordable  Amount    </td>
        <td>  <?php echo $_smarty_tpl->tpl_vars['maamount']->value;?>
  </td>
    </tr>
    <tr>
        <td>  Max.Affordable  Amount    </td>
        <td>  <?php echo $_smarty_tpl->tpl_vars['maamount']->value;?>
  </td>
    </tr>
    <tr>
        <td>  Others    </td>
        <td>  <?php echo $_smarty_tpl->tpl_vars['others']->value;?>
  </td>
    </tr>
    <tr>
        <td>  Emp Code    </td>
        <td>  <?php echo $_smarty_tpl->tpl_vars['empcode']->value;?>
  </td>
    </tr>
    <tr>
        <td>  Perma.Address    </td>
        <td>  <?php echo $_smarty_tpl->tpl_vars['address']->value;?>
  </td>
    </tr>
    <tr>
        <td>  Place    </td>
        <td>  <?php echo $_smarty_tpl->tpl_vars['place']->value;?>
  </td>
    </tr>
    <tr>
        <td>  City    </td>
        <td>  <?php echo $_smarty_tpl->tpl_vars['city']->value;?>
  </td>
    </tr>
    <tr>
        <td>  State    </td>
        <td>  <?php echo $_smarty_tpl->tpl_vars['state']->value;?>
  </td>
    </tr>
    <tr>
        <td>  OTP    </td>
        <td>  <?php echo $_smarty_tpl->tpl_vars['otp']->value;?>
  </td>
    </tr>
    <tr>
        <td>  Status    </td>
        <td>  <?php echo $_smarty_tpl->tpl_vars['status']->value;?>
  </td>
    </tr>

</table>
<style>
    tr:nth-child(even){
        background-color: #f5f5f5;
    }
    #tenant_table_modal>tbody>tr>td {
       padding: 2px;
    }

</style><?php }
}
