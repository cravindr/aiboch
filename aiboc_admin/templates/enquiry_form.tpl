<form action="enquiry_update.php" method="post" >
    <input type="hidden" name="enquiry_id" id="enquiry_id" value="{$enquiry_id}">
    <div class="row ">
    <select name="progress_status" id="progress_status" class="form-control">
        <option value="processing">Processing</option>
        <option value="success">Success</option>
        <option value="failed">Failed</option>
    </select>
    </div>

    {*<input id="datepicker" >*}
    <div class="row">
    <input class="form-group"  id="datepicker" data-large-mode="true"  placeholder="Select Appointment Date"  data-format="d-m-Y"  data-max-year="2030"   data-min-year="2016"    data-id="datedropper-0" readonly="" type="text">
    </div>
    <textarea name="enquiry_message" id="enquiry_message" class="form-control"> {$comments} </textarea>

    <br>
    {*<center><button  name="submit" class="btn btn-success" onclick="fnSaveEnquiry()">Send Enquiry</button></center>*}
    <center><button  name="submit" class="btn btn-success" >Send Enquiry</button></center>


</form>
<script src="../vendars/ckeditor/ckeditor.js"></script>

<script>
    $(function () {
      var x={$progress_status};
       $("#progress_status").val(x) ;
           });

</script>