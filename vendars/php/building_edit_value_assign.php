<?php
/**
 * Created by PhpStorm.
 * User: oom
 * Date: 10/26/2016
 * Time: 12:19 PM
 */
?>
<?php
session_start();
require_once ('../../aiboc_admin/class/Building.php');

$id = $_SESSION['BUILD_LIST_EDIT_ID'];

$getdata = Building::GetById($id);
$getdata->water_facility = explode(',',$getdata->water_facility);
$getdata->power_backup = explode(',',$getdata->power_backup);

echo json_encode($getdata);

?>
