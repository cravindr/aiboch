<?php
/* Title : Ajax Pagination with jQuery & PHP
Example URL : http://www.sanwebe.com/2013/03/ajax-pagination-with-jquery-php */

require_once('smartysettings.php');
$place=$_SESSION["SEARCH_PLACE"];
$location=$_SESSION["SEARCH_LOCATION"];

//continue only if $_POST is set and it is a Ajax request
//if(isset($_POST) && isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){

    include("config_search_res_pagination.php");  //include config file
    //Get page number from Ajax POST
    if(isset($_POST["page"])){
        $page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH); //filter number
        if(!is_numeric($page_number)){die('Invalid page number!');} //incase of invalid page number
    }else{
        $page_number = 1; //if there's no page number, set it to 1
    }

    if($page_number<0)
    {
        $page_number=1;
    }




    //get total number of records from database for pagination
    $tablename="`buiding_register` ";
    $fields="*";
    //$whareclass=" WHERE place LIKE '%$location%'";
if(trim($location," ")!="")
{
    $whareclass=" WHERE `place` = '$place' AND `location`='$location' ";
}
else
{
    $whareclass=" WHERE `place` = '$place'";
}

//echo "SELECT COUNT(*) AS 'noofrows'  FROM ".$tablename.$whareclass;

    $res=mysqli_query($con,"SELECT COUNT(*)  FROM ".$tablename.$whareclass);
    $row = mysqli_fetch_array($res);
    $get_total_rows=$row[0];

    //break records into pages
    $total_pages = ceil($get_total_rows/$item_per_page);

    //get starting position to fetch the records
    $page_position = (($page_number-1) * $item_per_page);


    //Limit our results within a specified range.

    $res=mysqli_query($con,"SELECT $fields FROM $tablename $whareclass  ORDER BY `building_id` ASC LIMIT $page_position, $item_per_page");



    //Display records fetched from database.

    while($row_res=mysqli_fetch_assoc($res))
    { //fetch values
       if( $row_res["building_type"]=="house")
       {
        $building_type="house.jpg";
       }elseif($row_res["building_type"]=="villas")
       {
           $building_type="villa.jpg";
       }elseif($row_res["building_type"]=="flat")
       {
           $building_type="appartment.jpg";
       }
       elseif($row_res["building_type"]=="paying-guest-mens")
       {
           $building_type="paying-guest-mens.jpg";
       } elseif($row_res["building_type"]=="paying-guest-womens")
       {
           $building_type="paying-guest-womens.jpg";
       }elseif($row_res["building_type"]=="mens-hostel")
       {
           $building_type="mens-hostel.jpg";
       }
       elseif($row_res["building_type"]=="womens-hostel")
       {
           $building_type="womens-hostel.jpg";
       }
       else
       {
           $building_type="house.jpg";
       }

        $smarty->assign("building_id",$row_res['building_id']);
        $smarty->assign("image",BUILDING_TYPE.$building_type);
        $smarty->assign("no_of_rooms",$row_res["room_options"]);
        $smarty->assign("rent",$row_res["excepted_rent"]);
        $smarty->assign("no_of_toilets",$row_res["no_of_toilets"]);

        $parking=fnParking($row_res["parking_area"]);
        $smarty->assign("parking",$parking);

        $powerbackup=fnPowerBackup($row_res["power_backup"]);
        $smarty->assign("powerbackup",$powerbackup);

        $waterfacility=fnWater($row_res["water_facility"]);
        $smarty->assign("waterfacility",$waterfacility);


        $smarty->assign("lift",ucfirst($row_res["lift_facility"]));

        $smarty->assign("corpetarea",ucfirst($row_res["carpet_area"]));


        $smarty->assign("city",$row_res["place"]);
        $smarty->assign("location",$row_res["location"]);
        $smarty->display("search_result_body_content.tpl");

    }


    echo '<div align="center">';
    /* We call the pagination function here to generate Pagination link for us.
    As you can see I have passed several parameters to the function. */
//echo "paginate_function($item_per_page, $page_number, $get_total_rows, $total_pages)";
    echo paginate_function($item_per_page, $page_number, $get_total_rows, $total_pages);
    echo '</div>';

    exit;
//}
################ pagination function #########################################
function paginate_function($item_per_page, $current_page, $total_records, $total_pages)
{
    $pagination = '';
    if($total_pages > 0 && $total_pages != 1 && $current_page <= $total_pages){ //verify total pages and current page number
        $pagination .= '<ul class="pagination">';

        $right_links    = $current_page + 3;
        $previous       = $current_page - 3; //previous link 
        $next           = $current_page + 1; //next link
        $first_link     = true; //boolean var to decide our first link

        if($current_page > 1){
            $previous_link = ($previous==0)? 1: $previous;
            $pagination .= '<li class="first"><a href="#" data-page="1" title="First">&laquo;</a></li>'; //first link
            $pagination .= '<li><a href="#" data-page="'.$previous_link.'" title="Previous">&lt;</a></li>'; //previous link
            for($i = ($current_page-2); $i < $current_page; $i++){ //Create left-hand side links
                if($i > 0){
                    $pagination .= '<li><a href="#" data-page="'.$i.'" title="Page'.$i.'">'.$i.'</a></li>';
                }
            }
            $first_link = false; //set first link to false
        }

        if($first_link){ //if current active page is first link
            //$pagination .= '<li class="first active">'.$current_page.'</li>';
            $pagination .= '<li class="active"><a href="#" data-page="'.$current_page.'" title="Page '.$current_page.'">'.$current_page.'</a></li>';
        }elseif($current_page == $total_pages){ //if it's the last active link
            //$pagination .= '<li class="last active">'.$current_page.'</li>';
            $pagination .= '<li class="active"><a href="#" data-page="'.$current_page.'" title="Page '.$current_page.'">'.$current_page.'</a></li>';
        }else{ //regular current link
            //$pagination .= '<li class="active">'.$current_page.'</li>';
            $pagination .= '<li class="active"><a href="#" data-page="'.$current_page.'" title="Page '.$current_page.'">'.$current_page.'</a></li>';
        }

        for($i = $current_page+1; $i < $right_links ; $i++){ //create right-hand side links
            if($i<=$total_pages){
                $pagination .= '<li><a href="#" data-page="'.$i.'" title="Page '.$i.'">'.$i.'</a></li>';
            }
        }
        if($current_page < $total_pages){
            $next_link = ($i > $total_pages) ? $total_pages : $i;
            $pagination .= '<li><a href="#" data-page="'.$next_link.'" title="Next">&gt;</a></li>'; //next link
            $pagination .= '<li class="last"><a href="#" data-page="'.$total_pages.'" title="Last">&raquo;</a></li>'; //last link
        }

        $pagination .= '</ul>';
    }
    //echo "#####################################################################" .$pagination;

    return $pagination; //return pagination links


}

function fnParking($parkingtype)
{
    if($parkingtype=="bike-only")
    {
        $parking="<i class='fa fa-motorcycle'></i> <span>Byke Only</span>";
    }elseif ($parkingtype=="car-only")
    {
        $parking="<i class='fa fa-car' aria-hidden='true'></i> <span>Car Only</span>";
    }
    else
    {
        $parking="<i class='fa fa-car' aria-hidden='true'></i> <i class='fa fa-motorcycle'></i> <span> Car and Byke </span>";
    }

    return $parking;
}

function fnPowerBackup($powertype)
{

    $powerarray=explode(",",$powertype);

    $retval="";
      for($i=0;$i<count($powerarray);$i++)
    {

        switch ($powerarray[$i]) {

            case "gen-set":

                $retval.= ($retval=="") ? " Gen Set ":" / Gen Set ";

                //$retval.="/ "." Gen Set ";

                break;
            case "ups":
                $retval.= ($retval=="") ? " UPS ":" / UPS ";
                //$retval.="/ "." UPS ";

                break;
            case "3 phase":

                $retval.= ($retval=="") ? " 3 Phase ":" / 3 Phase ";

                //$retval.="/ ". "3 Phase";

                break;
        }

    }

    return $retval;
}
function fnWater($watertype)
{

    $waterarray=explode(",",$watertype);

    $retval="";
    for($i=0;$i<count($waterarray);$i++)
    {

        switch ($waterarray[$i]) {

            case "borewell":
                $retval.= ($retval=="") ? " Bore well ":" / Bore well ";
                break;
            case "well":
                $retval.= ($retval=="") ? " Well ":" / Well ";
                break;
            case "water-connection":

                $retval.= ($retval=="") ? " Water Connection ":" / Water Connection ";
                break;
        }

    }

    return $retval;
}


?>

