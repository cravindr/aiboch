<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 12/16/2016
 * Time: 12:46 PM
 */ ?>
<?php
require_once ('../class/Admin.php');

    $id = $_POST['id'];

    $getval = Admin::GetById($id);

echo json_encode($getval);
?>