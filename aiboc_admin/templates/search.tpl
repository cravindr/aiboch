<ol class="breadcrumb" style="background-color:#e0dfe3 ; color: dodgerblue; font-family: Elephant">
    <h3>Owner's Registration</h3>
</ol>
<div class="well">
    <form id="validate" method="post" action="search_result.php">
        <div class="col-lg-3">
            <div class="form-group">
                <label>State:</label>
                <select id="state" name="state" class="form-control selectpicker show-tick " title="Please Select State">

                </select>

            </div>
            <div class="form-group">
                <label>City:</label>
                <select id="city" name="city" class="form-control">
                    <option value="0">Please Select City</option>
                </select>
                {*<input type="text" name="oemail" id="oemail" class="form-control validate[required,custom[email,ajax[ajaxAdminEmailCheck]]]" placeholder="Your Email Address">*}
            </div>
            <div class="form-group">
                <label>Area:</label>
                <select id="area" name="area[]" class="form-control selectpicker show-tick " multiple>

                </select>
                {*<input type="text" name="oemail" id="oemail" class="form-control validate[required,custom[email,ajax[ajaxAdminEmailCheck]]]" placeholder="Your Email Address">*}
            </div>
            <div class="form-group">
                <label></label>
                <button type="button" name="search" class="btn btn-primary form-control" >Search</button>
            </div>

        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label>Bedroom:</label>
                <select id="bedroom" name="bedroom" class="form-control selectpicker show-tick " title="Please Select Room Option" multiple>

                </select>

            </div>
            <div class="form-group">
                <label>Toilet:</label>
                <select id="toilet" name="toilet" class="form-control selectpicker show-tick " title="Please Select Toilet Option" multiple>

                </select>
                {*<input type="text" name="oemail" id="oemail" class="form-control validate[required,custom[email,ajax[ajaxAdminEmailCheck]]]" placeholder="Your Email Address">*}
            </div>
            <div class="form-group">
                <label>Parking Area::</label>
                <select id="parking" name="parking" class="form-control selectpicker show-tick " title="Please Select Parking Option" multiple>

                </select>
                {*<input type="text" name="oemail" id="oemail" class="form-control validate[required,custom[email,ajax[ajaxAdminEmailCheck]]]" placeholder="Your Email Address">*}
            </div>


        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label>Building Type:</label>
                <select id="buildingtype" name="buildingtype" class="form-control selectpicker show-tick " title="Please Select Building Type Option" multiple>

                </select>

            </div>



        </div>




    </form>
        </div>




