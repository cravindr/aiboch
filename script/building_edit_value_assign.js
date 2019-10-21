/**
 * Created by oom on 10/26/2016.
 */

$(function () {
    $.ajax({
        url: 'vendars/php/building_edit_value_assign.php',
        type: 'POST',
        success: function (result) {
            var array1 = ["borewell","well"];

            //alert(obj.water_facility);

            var valoresArea=result; // it has the multiple values to set, separated by comma
            var obj = jQuery.parseJSON(valoresArea);

            $('select[name=rbuildingtype]').selectpicker('val',obj.building_type);
            $('#rroomsoptions').selectpicker('val',[obj.room_options,obj.no_of_toilets]);
            $('select[name=rcarpetarea]').selectpicker('val',obj.carpet_area);
            $('select[name=rexceptedrent]').selectpicker('val',obj.excepted_rent);
            $('#rwaterfacility').selectpicker('val',obj.water_facility);  // for multiple choice we have to use this method only
            $('#rpowerbackup').selectpicker('val',obj.power_backup);
            $('select[name="rlift"]').selectpicker('val',obj.lift_facility);
            $('select[name="rparking"]').selectpicker('val',obj.parking_area);

            // or use this method
            //$('select[name=rbuildingtype]').val(obj.building_type);
            //$('.selectpicker').selectpicker('refresh');
        }
    });

});