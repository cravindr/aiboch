<ol class="breadcrumb" style="background-color:#e0dfe3 ; color: dodgerblue; font-family: Elephant">
    <h3>Bank Details Edit</h3>
</ol>
<div class="row well">
    <div class="col-lg-offset-1 col-lg-8">
        <form method="post" action="bank_update.php">
            <div class="form-group">
                <label>Bank Name</label>
                <input type="text" name="bankname" id="bankname" class="form-control" value="{$bankname}" placeholder="Bank Name">
            </div>
            <div class="form-group">
                <label>Bank Description</label>
                <textarea rows="3" name="bankdesc" id="bankdesc" class="form-control" placeholder="Bank Description">{$desc}</textarea>
            </div>
            <div class="form-group">
                <label></label>
                <button class="btn btn-info pull-right">Submit</button>
            </div>
        </form>
    </div>
</div>

