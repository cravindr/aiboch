/**
 * Created by Andhu on 11/17/2016.
 */

$('#searchbtnmodal').click(function () {
    $.getJSON('php/search_result_modal_show_state.php', function (data) {
        var html = stateHtml(data);
         $('#adv_searchresult').html(html);
         $('#searchmodal').modal('show');
    });
});

function stateHtml(data) {
    var html = '<div class="panel panel-primary">';
             html += '<div class="panel-heading">Search Your State</div>';
                 html += '<div class="panel-body">';
                    $.each(data, function(index , item){
                        html += '<a href="#" onclick="citychoose(this.innerHTML)" class="tags1">'+ item +'</a>';
                    });
                  html += '</div>';
    html += '</div>';
    return html;
}

function citychoose(data) {
    $.ajax({
        url: 'php/search_result_modal_show_city.php',
        data: {state:data},
        type: 'POST',
        dataType: 'json',
        success: function (res) {
            var html = cityHtml(res);
            $('#adv_searchresult').html(html);
        }
    });
}

function cityHtml(data) {
    var html = '<div class="panel panel-primary">';
    html += '<div class="panel-heading">Search Your City</div>';
    html += '<div class="panel-body">';
    $.each(data, function(index , item){
        html += '<a href="search.php?place='+ item +' "class="tags1">'+ item +'</a>';
    });
    html += '</div>';
    html += '</div>';
    return html;
}


