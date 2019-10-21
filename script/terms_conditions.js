/**
 * Created by Andhu on 2/7/2017.
 */

$('#ownerterms').click(function () {
    $.post('php/terms_condition.php', function (data) {
        var object = $.parseJSON(data);
        $('#modal_header').html('<h2>Terms and Conditions</h2>');
        $('#modelmsg').html(object.owner_condition);
        $('#formsuccess').modal('show');
    });
});

$('#tenantterms').click(function () {
    $.post('php/terms_condition.php', function (data) {
        var object = $.parseJSON(data);
        $('#modal_header').html('<h2>Terms and Conditions</h2>');
        $('#modelmsg').html(object.tenant_condition);
        $('#formsuccess').modal('show');
    });
});

