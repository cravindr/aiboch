<?php
/**
 * Created by PhpStorm.
 * User: Ravindran
 * Date: 12/7/2016
 * Time: 4:42 PM
 */
/*require_once ("../class/Database.php");

$db=new Database();

        $id = $_GET['state'];
        $sql = "SELECT DISTINCT (place) FROM buiding_register WHERE state like '%". $id ."%'";

        $result = $db->Query($sql);


        $json = array();
        while ($row = $result->fetch_assoc()) {
            $json[] = array(
                'place' => $row['place'],
                'place' => $row['place'] // Don't you want the name?
            );
        }
        echo json_encode($json);*/

$state = $_POST['state'];
require_once ("../class/Building.php");
return Building::GetCityHTML($state);

?>