/**
 * Created by Andhu on 12/16/2016.
 */

$(function () {
    $.get('php/admin_user_value_assign_role.php',function (res) {
        var obj = $.parseJSON(res);
       $('#role').selectpicker('val',obj.role);
    });
});