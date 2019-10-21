<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 2/3/2017
 * Time: 2:31 PM
 */ ?>
<?php
require_once ('../class/Appoinment.php');

    $id = $_POST['id'];

    $getvalues = @Appoinment::GetOwnerById($id);

echo json_encode($getvalues);
?>