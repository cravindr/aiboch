/**
 * Created by Andhu on 11/29/2016.
 */

$(function () {
    $.get('php/owner_status_value_assign.php',function (result) {
        var obj = $.parseJSON(result);
        $('select[name="status"]').selectpicker('val',obj.status);
    });
});