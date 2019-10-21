<div class="container">

    <div class="panel panel-default">
        <div class="panel-body">
            <h2>Register Your Building</h2><br>
            <form method="post" enctype="multipart/form-data" action="owner_building_save.php">
                <div class="col-lg-offset-1 col-lg-5">
                    <div class="form-group">
                        <label>Address:</label>
                        <textarea rows="3" name="raddress" id="raddress" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Area:</label>
                        <input type="text" name="rlocation" id="rlocation" class="form-control" placeholder="Area of Building Located">
                    </div>
                    <div class="form-group">
                        <label>City:</label>
                        <input type="text" name="rplace" id="rplace" class="form-control" placeholder="Building City">
                    </div>
                    <div class="form-group">
                        <label>State:</label>
                        <input type="text" name="rstate" id="rstate" class="form-control" placeholder="State">
                    </div>
                    <div class="form-group">
                        <label>Pin:</label>
                        <input type="text" name="rpin" id="rpin" class="form-control" placeholder="Pin Code">
                    </div>
                    <div class="form-group">
                        <label>Building type:</label>
                        <select name="rbuildingtype" class="selectpicker form-control" title="Choose the Options">
                            <option value="house">House</option>
                            <option value="flat">Flat</option>
                            <option value="portion-house">Portion-house</option>
                            <option value="Villas">Villas</option>
                            <option value="paying-guest">Paying Guest</option>
                            <option value="hostel">Hostel</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Rooms Options:</label>
                        <select name="rroomsoptions[]" class="selectpicker form-control" id="map" multiple title="Choose the Rooms Options">
                            <optgroup label="Rooms" data-max-options="1">
                                <option value="1-bhk">1 BHK</option>
                                <option value="2-bhk">2 BHK</option>
                                <option value="3-bhk">3 BHK</option>
                                <option value="4-bhk">4 BHK</option>
                                <option value="5-bhk">5 BHK</option>
                            </optgroup>
                            <optgroup label="No Of Toilets" data-max-options="1">
                                <option value="1">1 Toilet</option>
                                <option value="2">2 Toilets</option>
                                <option value="3">3 Toilets</option>
                                <option value="4">4 Toilets</option>
                                <option value="5">5 Toilets</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Carpet Area(in sqf):</label>
                        <input type="text" name="rcarpetarea" class="form-control" placeholder="Carpet Area in Square Feet">
                    </div>
                    <div class="form-group">
                        <label>Excepted Rent:</label>
                        <select name="rexceptedrent" class="selectpicker form-control" title="Excepted Rent">
                            <option value="2000">2000</option>
                            <option value="3000">3000</option>
                            <option value="4000">4000</option>
                            <option value="5000">5000</option>
                            <option value="6000">6000</option>
                            <option value="2000">7000</option>
                            <option value="3000">80000</option>
                            <option value="4000">9000</option>
                            <option value="5000">10000</option>
                            <option value="6000">11000</option>
                            <option value="6000">12000</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="form-group">
                        <label>Maintance Cost:</label>
                        <input type="text" name="rmaincost" id="rmaincost" class="form-control" placeholder="Maintance Cost">
                    </div>
                    <div class="form-group">
                        <label>Water Facility:</label>
                        <select name="rwaterfacility[]" class="selectpicker form-control" multiple title="Water Facility">
                            <option value="borewell">Borewell</option>
                            <option value="well">Well</option>
                            <option value="water-connection">Water-Connection</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Power Backup:</label>
                        <select name="rpowerbackup[]" class="selectpicker form-control" multiple title="Power Backup Options">
                            <option value="ups">UPS</option>
                            <option value="3 phase">3 Phase</option>
                            <option value="gen-set">Gen-Set</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Lift Facility:</label>
                        <select name="rlift" class="selectpicker form-control" title="Lift Facility Options">
                            <option value="yes">YES</option>
                            <option value="no">NO</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Parking Area:</label>
                        <select name="rparking" class="selectpicker form-control" title="Parking Area Options">
                            <option value="bike-only" data-subtext="Bike only Available">Bike Only</option>
                            <option value="car-only" data-subtext="Car only Available">Car Only</option>
                            <option value="both" data-subtext="Bike & Car Available">Both</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Other Facilities:</label>
                        <textarea rows="3" name="rotherfaci" id="rotherfaci" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Any Conditions:</label>
                        <textarea rows="3" name="rconditions" id="rconditions" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Building Images:</label>
                        <input id="buildingImgs" name="buildingImgs[]" type="file" multiple=true>
                    </div>
                </div>
                <div  class="row col-lg-offset-4 col-lg-4">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <button class="btn btn-success form-control">Register</button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <button class="btn btn-danger form-control">Cancel</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

