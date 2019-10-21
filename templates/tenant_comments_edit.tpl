<div class="row">
    <div class="col-lg-12 well">
        <h2 id="titleregbuild">Update Comments</h2>

        <form id="ownerfrom"  method="post" action="tenant_enquiry_update.php">
            <input type="hidden" id="enquiryid" name="enquiryid" value="{$enquiryid}">
                <div class="form-group">
                    <label>Comments:</label>
                    <textarea rows="3" name="comments" id="comments" class="form-control " placeholder="Give your Comments" >{$comments}</textarea>
                </div>


            <div class="form-group">
                <label></label>
                <button class="btn btn-primary pull-right">Update</button>
            </div>
        </form>


    </div>
</div>