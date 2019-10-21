<ol class="breadcrumb" style="background-color:#e0dfe3 ; color: dodgerblue; font-family: Elephant">
    <h3>Terms & Condition</h3>
</ol>
<div class="container">
    <div class="row">
        <div class="col-lg-offset-1 col-lg-5">
            <form method="post" action="owner_terms_save.php">
                <div class="form-group">
                    <label>Owner Terms and Conditions</label>
                    <textarea rows="6" name="ownterm" id="ownterm" class="form-control">{$ownerterms}</textarea>
                </div>
                <div class="form-group">
                    <button  name="owner" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>

        <div class="col-lg-offset-1 col-lg-5">
            <form method="post" action="tenant_terms_save.php">
                <div class="form-group">
                    <label>Tenant Terms and Conditions</label>
                    <textarea rows="6" name="tenterm" id="tenterm" class="form-control">{$tenantterms}</textarea>
                </div>
                <div class="form-group">
                    <button name="tenant" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>