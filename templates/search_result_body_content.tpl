{*
<section class="col-xs-12 col-sm-6 col-md-12">
    <article class="search-result row">
        <div class="col-xs-12 col-sm-12 col-md-2">
            <a href="#" title="Lorem ipsum" class="thumbnail"><img src="{$image}" alt="Lorem ipsum" /></a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-2">
            <ul class="meta-search">
                <li><i class="glyphicon glyphicon-calendar"></i> <span>{$no_of_rooms}</span></li>
                <li><i class="glyphicon glyphicon-time"></i> <span>Rs. {$rent}</span></li>
                <li><i class="glyphicon glyphicon-tags"></i> <span>{$parking}</span></li>
            </ul>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-7 excerpet">
            <h3><a href="#" title="">{$city} - {$location}</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, exercitationem, suscipit, distinctio, qui sapiente aspernatur molestiae non corporis magni sit sequi iusto debitis delectus doloremque.</p>

        </div>
        *}
{*<span class="plus"><a href="#" title="Lorem ipsum"><i class="glyphicon glyphicon-plus"></i></a></span>*}{*

        <span class="clearfix borda"></span>
    </article>
</section>*}

<section class="col-xs-12 col-sm-6 col-md-12">
    <article class="search-result row">
        <div class="col-xs-12 col-sm-12 col-md-2">
            <a href="#" data-toggle="modal" data-target="#formsuccess" onclick="slideshow('{$building_id}')" title="AIBOC" class="thumbnail"><img src="{$image}" alt="Lorem ipsum" /></a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-2">
            <ul class="meta-search">
                {*<li><i class="glyphicon glyphicon-bed"></i> <span>{$no_of_rooms}</span></li>*}
                <li><i class="glyphicon glyphicon-bed"></i> <span> 2 Bed Rooms</span></li>
                <li><i class="fa fa-inr"></i> <span>Rent Rs. {$rent}</span></li>

            </ul>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-7 excerpet">

            <div class="row"><h3><a href="#" title="">{$city} - {$location}</a></h3></div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-5">
                    <ul class="meta-search">
                        <li> {$parking}</li>
                        <li><i class="fa fa-bath"></i> <span>{$no_of_toilets} Toilet(s)</span></li>
                        <li><i class="fa fa-battery-full"></i> <span>{$powerbackup}</span></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-5">
                    <ul class="meta-search">
                        <li><i class="fa fa-tint"></i> <span>{$waterfacility}</span></li>
                        <li><i class="fa fa-building"></i> <span>Lift. {$lift}</span></li>
                        <li><i class="fa fa-area-chart"></i> <span>{$corpetarea} Sqf Corpet Area</span></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2">
                    <ul class="meta-search">

                        <li><button type="button" class="btn btn-primary btn-sm " id="interested" name="interested" onclick="fnInterested('{$building_id}')"><i style="color: white" class="fa fa-thumbs-up"></i>
                                Interested</button>  </li>
                        <li> <p>&nbsp;</p></li>
                        <li><a class="" title="Images" data-toggle="modal" data-target="#formsuccess" onclick="slideshow('{$building_id}')">Images..</a> </li>
                    </ul>


                </div>
            </div>

        </div>
        {*<span class="plus"><a href="#" title="Lorem ipsum"><i class="glyphicon glyphicon-plus"></i></a></span>*}
        <span class="clearfix borda"></span>
    </article>
</section>