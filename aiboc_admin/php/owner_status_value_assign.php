
<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 11/29/2016
 * Time: 4:01 PM
 */
?>
<?php
session_start();
require_once ('../class/Owner.php');


$id = $_SESSION['OWNER_EDIT_ID'];

    $getvalue = Owner::GetById($id);

    echo json_encode($getvalue);
?>