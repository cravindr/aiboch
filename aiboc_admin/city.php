<?php
/**
 * Created by PhpStorm.
 * User: Ravindran
 * Date: 12/1/2016
 * Time: 11:52 AM
 */
require_once ('class/Database.php');
require_once ('class/TypeAhead.php');

//CREATE QUERY TO DB AND PUT RECEIVED DATA INTO ASSOCIATIVE ARRAY
if (isset($_REQUEST['query'])) {
    $query = $_REQUEST['query'];

   $citys =  @TypeAhead::City($query);

    //RETURN JSON ARRAY
    echo json_encode ($citys);
}

?>