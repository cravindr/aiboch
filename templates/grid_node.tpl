{*<div class="col-md-3 box_1">
    <div class="panel panel-default">
        <div class="panel-heading"><center>Chennai</center></div>
        <div class="panel-body">
            <a href="single.html"><img src="vendars/300X225/Chennai.jpg" class="img-responsive" alt=""/></a>

            <div class="box_3">
                <button data-toggle="popover" data-placement="bottom" class="btn btn-success form-control pop">Search</button>
            </div>
        </div>
    </div>
</div>*}

<div class="col-md-3 box_1">
    <div class="panel panel-default">
        <div class="panel-heading"><center>{$city_name}</center></div>
        <div class="panel-body">
            <a href="single.html"><img src="{$image_url}" class="img-responsive" alt=""/></a>

            <div class="box_3">
                <button data-toggle="popover" onclick="assign_selected_city('{$city_name}')" data-placement="bottom" class="btn btn-success form-control pop">Search</button>
            </div>
        </div>
    </div>
</div>

