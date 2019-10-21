<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 12/1/2016
 * Time: 1:52 PM
 */
?>
<?php
session_start();
require_once ('../class/Building.php');


$id = $_POST['id'];

$getvalue = Building::GetById($id);

echo json_encode($getvalue);
?>