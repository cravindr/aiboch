<?php
/* Smarty version 3.1.30, created on 2017-01-12 16:13:23
  from "E:\wamp\www\1\aiboc\aiboc_admin\templates\model_enquiry.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58775dcb99d952_06301220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a1346d4f13e617cfaaf4c1a76a9473bcce6c702' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\aiboc_admin\\templates\\model_enquiry.tpl',
      1 => 1484217376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58775dcb99d952_06301220 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Modal -->
<div id="modal_enquiry" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close"  data-dismiss="modal">&times;</button>
                <div id="modal_header"></div>
            </div>
            <div class="modal-body" id="modal_enq_msg">
                <form action="enquiry_update.php" method="post">
                    <input type="hidden" name="enquiry_id" id="enquiry_id" value="">
                    <div class="form-group">
                        <select name="progress_status" id="progress_status" class="form-control selectpicker">
                            <option value="processing">Processing</option>
                            <option value="success">Success</option>
                            <option value="failed">Failed</option>
                        </select>
                    </div>
                   <div class="row">
                       <div class="col-lg-6">
                          <div class="form-group">
                              <select name="appoinment[]" id="appoinment" class="form-control selectpicker" title="Appoinment For" multiple>
                                  <option value="tenant">Tenant</option>
                                  <option value="owner">Owner</option>
                              </select>
                          </div>
                       </div>
                       <div class="col-lg-3">
                           <div class="form-group">
                               <input class="form-control"  id="datepicker" name="datepicker" data-large-mode="true"
                                      placeholder="Select Appointment Date"  data-format="d-m-Y"
                                      data-max-year="2030"   data-min-year="2016"    da-yeta-id="datedropper-0" readonly="" type="text">
                           </div>
                       </div>
                       <div class="col-lg-3">
                           <input type="text" name="nowtime" class="form-control" id="nowtime" readonly>
                           </div>
                       </div>
                   </div>
                    <div class="form-group">
                        <textarea name="enquiry_message" id="enquiry_message" class="form-control">  </textarea>
                    </div>
                    <div class="form-group">
                        <center><button  name="submit" class="btn btn-success" >Send Enquiry</button></center>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default"  data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<?php echo '<script'; ?>
 src="../vendars/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>

<link href="vendars/Datedropper3-master/datedropper.min.css" rel="stylesheet">



<link href="vendars/datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">



<?php echo '<script'; ?>
 src="vendars/Datedropper3-master/datedropper.min.js" type="text/javascript"><?php echo '</script'; ?>
>



<?php echo '<script'; ?>
 src="vendars/datetimepicker/js/moments.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="vendars/datetimepicker/js/bootstrap-material-datetimepicker.js" type="text/javascript"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(function () {
        //CKEDITOR.replace('enquiry_message');
        CKEDITOR.replace('enquiry_message');
        $('#datepicker').dateDropper();
        //$('#nowtime').bootstrapMaterialDatePicker({ date: false });
        $('#nowtime').bootstrapMaterialDatePicker
        ({
            date: false,
            shortTime: false,
            format: 'HH:mm'
        });


    });
<?php echo '</script'; ?>
>


<?php }
}
