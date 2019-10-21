<?php
/* Smarty version 3.1.30, created on 2016-12-21 13:01:56
  from "E:\wamp\www\1\aiboc\aiboc_admin\templates\enquiry_form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_585a6f34adcb78_90288987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57cc3c8cc0ff0f3835b8459c8fa89ef38d4a0da5' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\aiboc_admin\\templates\\enquiry_form.tpl',
      1 => 1482321698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_585a6f34adcb78_90288987 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="enquiry_update.php" method="post" >
    <input type="hidden" name="enquiry_id" id="enquiry_id" value="<?php echo $_smarty_tpl->tpl_vars['enquiry_id']->value;?>
">
    <div class="row ">
    <select name="progress_status" id="progress_status" class="form-control">
        <option value="processing">Processing</option>
        <option value="success">Success</option>
        <option value="failed">Failed</option>
    </select>
    </div>

    
    <div class="row">
    <input class="form-group"  id="datepicker" data-large-mode="true"  placeholder="Select Appointment Date"  data-format="d-m-Y"  data-max-year="2030"   data-min-year="2016"    data-id="datedropper-0" readonly="" type="text">
    </div>
    <textarea name="enquiry_message" id="enquiry_message" class="form-control"> <?php echo $_smarty_tpl->tpl_vars['comments']->value;?>
 </textarea>

    <br>
    
    <center><button  name="submit" class="btn btn-success" >Send Enquiry</button></center>


</form>
<?php echo '<script'; ?>
 src="../vendars/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(function () {
      var x=<?php echo $_smarty_tpl->tpl_vars['progress_status']->value;?>
;
       $("#progress_status").val(x) ;
           });

<?php echo '</script'; ?>
><?php }
}
