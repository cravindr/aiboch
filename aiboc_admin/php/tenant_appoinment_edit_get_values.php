<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 2/4/2017
 * Time: 4:49 PM
 */ ?>
<?php
require_once ('../class/Appoinment.php');

    $id = $_POST['id'];

  $getvalues = @Appoinment::GetTenantById($id);

echo json_encode($getvalues);
?>