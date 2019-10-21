<?php
/**
 * Created by PhpStorm.
 * User: Ravindran
 * Date: 12/1/2016
 * Time: 11:52 AM
 */
$con=mysqli_connect("localhost","root","","aiboc");

//CREATE QUERY TO DB AND PUT RECEIVED DATA INTO ASSOCIATIVE ARRAY
if (isset($_REQUEST['query'])) {
    $query = $_REQUEST['query'];

    $sql = mysqli_query ($con,"SELECT city_name  FROM citylist WHERE city_name LIKE '%$query%'");
    $array = array();
    while ($row = mysqli_fetch_assoc($sql)) {
        $array[] = array (
            'label' => $row['city_name'],
            'value' => $row['city_name'],
        );
    }
    //RETURN JSON ARRAY
    echo json_encode ($array);
}

?>