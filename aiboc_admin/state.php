<?php
/**
 * Created by PhpStorm.
 * User: Ravindran
 * Date: 12/1/2016
 * Time: 6:25 PM
 */


require_once ('class/TypeAhead.php');

//CREATE QUERY TO DB AND PUT RECEIVED DATA INTO ASSOCIATIVE ARRAY
if (isset($_REQUEST['query'])) {
    $query = $_REQUEST['query'];

    $states = TypeAhead::State($query);
    //RETURN JSON ARRAY
    echo json_encode ($states);
}

?>