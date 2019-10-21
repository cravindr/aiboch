/**
 * Created by Andhu on 12/13/2016.
 */

$(function () {
    $('#role').load('php/get_roles.php',function (res) {
        $(this).html(res).selectpicker('refresh');
    });
});

