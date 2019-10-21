<form action="eqnuiry_save.php" method="post" >
    <input type="hidden" name="building_id" id="building_id" value="{$building_id}">
    <input type="hidden" name="tenant_id" id="tenant_id" value="{$tenant_id}">
    <textarea name="enquiry_message" id="enquiry_message" class="form-control"> I want this...   </textarea>
    <br>
    <center><button type="button" name="submit" class="btn btn-success" onclick="fnSaveEnquiry()">Send Enquiry</button></center>


</form>