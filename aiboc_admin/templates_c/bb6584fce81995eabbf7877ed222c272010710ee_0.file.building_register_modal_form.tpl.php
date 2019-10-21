<?php
/* Smarty version 3.1.30, created on 2016-12-12 11:35:44
  from "E:\wamp\www\1\aiboc\aiboc_admin\templates\building_register_modal_form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584e7d803fc487_02543836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb6584fce81995eabbf7877ed222c272010710ee' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\aiboc_admin\\templates\\building_register_modal_form.tpl',
      1 => 1481538941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_584e7d803fc487_02543836 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Modal -->
<div id="buildregmodal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body" id="viewmodallistowner">
                <form method="post" action="building_save.php" enctype="multipart/form-data">
                    <div class="row">
                        <input type="hidden" name="ownerid" id="ownerid" value="<?php echo $_smarty_tpl->tpl_vars['ownerid']->value;?>
">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Location:</label>
                                <input type="text" name="rlocation" id="rlocation" class="form-control" placeholder="Building Location">
                            </div>
                            <div class="form-group">
                                <label>Place:</label>
                                <input type="text" name="rplace" id="rplace" class="form-control"  placeholder="Building Place">
                            </div>
                            <div class="form-group">
                                <label>State:</label>
                                <input type="text" name="rstate" id="rstate" class="form-control"  placeholder="State">
                            </div>
                            <div class="form-group">
                                <label>Pin:</label>
                                <input type="text" name="rpin" id="rpin" class="form-control" placeholder="Pin Code">
                            </div>
                            <div class="form-group">
                                <label>Building type:</label>
                                <select name="rbuildingtype" id="rbuildingtype" class="selectpicker form-control" title="Choose the Options">
                                    <option value="house">House</option>
                                    <option value="flat">Flat</option>
                                    <option value="portion-house">Portion-house</option>
                                    <option value="villas">Villas</option>
                                    <option value="paying-guest-mens">Paying Guest Mens</option>
                                    <option value="paying-guest-womens">Paying Guest Womens</option>
                                    <option value="mens-hostel">Mens Hostel</option>
                                    <option value="womens-hostel">Womens Hostel</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Rooms Options:</label>
                                <select name="rroomsoptions[]"  class="selectpicker form-control" id="rroomsoptions" multiple title="Choose the Rooms Options">
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
                                <label>Carpet Area in (sqf):</label>
                                <input type="text" name="rcarpetarea" id="rcarpetarea" class="form-control"  placeholder="Carpet Area sqf">
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
                            <div class="form-group">
                                <label>Maintance Cost:</label>
                                <input type="text" name="rmaincost" id="rmaincost" class="form-control"  placeholder="Maintance Cost">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Water Facility:</label>
                                <select name="rwaterfacility[]" id="rwaterfacility" class="selectpicker form-control" multiple title="Water Facility">
                                    <option value="borewell">Borewell</option>
                                    <option value="well">Well</option>
                                    <option value="water-connection">Water-Connection</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Power Backup:</label>
                                <select name="rpowerbackup[]" id="rpowerbackup" multiple class="selectpicker form-control" title="Power Backup Options">
                                    <option value="ups">UPS</option>
                                    <option value="3 phase">3 Face</option>
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
                                <label>Address:</label>
                                <textarea rows="3" name="raddress" id="raddress" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Other Facilities:</label>
                                <textarea rows="3" name="rotherfaci" id="rotherfaci" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Any Conditions:</label>
                                <textarea rows="2" name="rconditions" id="rconditions" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Building Images:</label>
                                <input id="ourimges" name="ourimges[]" type="file" multiple="true">
                            </div>
                            <div style="padding: 0px;" class="col-lg-3 col-lg-offset-9">
                                <div class="form-group">
                                    <button class="btn btn-success form-control">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<style>
    .table .table-bordered {
        max-height: calc(100vh - 225px);
    }
</style><?php }
}
