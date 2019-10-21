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

<script src="../vendars/ckeditor/ckeditor.js"></script>
{*Date Picker CSS*}
<link href="vendars/Datedropper3-master/datedropper.min.css" rel="stylesheet">
{*Date Picker CSS*}

{*Time Picker CSS*}
<link href="vendars/datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
{*Time Picker CSS*}

{*Date Picker JS*}
<script src="vendars/Datedropper3-master/datedropper.min.js" type="text/javascript"></script>
{*Date Picker JS*}

{*Time Picker JS*}
<script src="vendars/datetimepicker/js/moments.min.js" type="text/javascript"></script>
<script src="vendars/datetimepicker/js/bootstrap-material-datetimepicker.js" type="text/javascript"></script>
{*Time Picker JS*}
<script>
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
</script>

{*<script>
    $(function () {

    });

</script>*}
