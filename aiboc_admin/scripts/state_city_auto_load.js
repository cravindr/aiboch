/**
 * Created by Andhu on 12/12/2016.
 */

$(function () {
    $('.selectpicker').selectpicker();
    $('#rplace ,#ocity').typeahead({
        name: 'city',
        remote: 'city.php?query=%QUERY',
        limit: 10

    });
    $('#rstate, #ostate').typeahead({
        name: 'state',
        remote: 'state.php?query=%QUERY',
        limit: 10

    });

});