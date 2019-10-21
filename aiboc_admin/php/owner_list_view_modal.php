<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 11/30/2016
 * Time: 5:34 PM
 */
?>
<?php
session_start();
require_once ('../class/Owner.php');


$id = $_POST['id'];

$getvalue = Owner::GetById($id);

echo json_encode($getvalue);
?>