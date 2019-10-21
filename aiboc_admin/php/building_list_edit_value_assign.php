<?php
/**
 * Created by PhpStorm.
 * User: Ravindran
 * Date: 12/2/2016
 * Time: 4:45 PM
 */
?>
<?php
session_start();
require_once ('../class/Building.php');

    $id = $_SESSION['BUILDING_EDIT_ID'];

    $getvalues = Building::GetById($id);
    $getvalues->water_facility = explode(',',$getvalues->water_facility);
    $getvalues->power_backup = explode(',',$getvalues->power_backup);

    echo json_encode($getvalues);

?>
