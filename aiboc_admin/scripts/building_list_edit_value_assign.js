/**
 * Created by Ravindran on 12/2/2016.
 */

/*
 $(function () {
 $.ajax({
 url: 'php/building_list_edit_value_assign.php',
 type: 'POST',
 success: function (data) {
 var value = data;
 var get = $.parseJSON(value);

 $('selecr[name="rbuildingtype"]').selectpicker('val',get.building_type);
 $('#rroomsoptions').selectpicker('val',[get.room_options,get.no_of_toilets]);
 $('select[name=rcarpetarea]').selectpicker('val',get.carpet_area);
 $('select[name=rexceptedrent]').selectpicker('val',get.excepted_rent);
 $('#rwaterfacility').selectpicker('val',get.water_facility);  // for multiple choice we have to use this method only
 $('#rpowerbackup').selectpicker('val',get.power_backup);
 $('select[name="rlift"]').selectpicker('val',get.lift_facility);
 $('select[name="rparking"]').selectpicker('val',get.parking_area);
 }
 });
 });*/

$(function () {
    $.ajax({
        url: 'php/building_list_edit_value_assign.php',
        type: 'POST',
        success: function (result) {
            //var array1 = ["borewell","well"];


            var valoresArea=result; // it has the multiple values to set, separated by comma
            var obj = $.parseJSON(valoresArea);

            $('select[name=rbuildingtype]').selectpicker('val',obj.building_type);
            $('#rroomsoptions').selectpicker('val',[obj.room_options,obj.no_of_toilets]);
            $('select[name=rcarpetarea]').selectpicker('val',obj.carpet_area);
            $('select[name=rexceptedrent]').selectpicker('val',obj.excepted_rent);
            $('#rwaterfacility').selectpicker('val',obj.water_facility);  // for multiple choice we have to use this method only(in array format eg: array1)
            $('#rpowerbackup').selectpicker('val',obj.power_backup);
            $('select[name="rlift"]').selectpicker('val',obj.lift_facility);
            $('select[name="rparking"]').selectpicker('val',obj.parking_area);

            // or use this method
            //$('select[name=rbuildingtype]').val(obj.building_type);
            //$('.selectpicker').selectpicker('refresh');
        }
    });

});