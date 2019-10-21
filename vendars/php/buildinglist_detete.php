<?php
/**
 * Created by PhpStorm.
 * User: home
 * Date: 10/25/2016
 * Time: 10:06 AM
 */
?>
<?php
session_start();
require_once ('../../aiboc_admin/class/Building.php');

$id = $_POST['id'];

$getdelete = Building::DeleteRow($id);

    if($getdelete == 1)
    {
        echo "1";
    }
    else
    {
        echo "0";
    }
?>