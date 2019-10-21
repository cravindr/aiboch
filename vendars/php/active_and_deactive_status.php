<?php
/**
 * Created by PhpStorm.
 * User: oom
 * Date: 10/26/2016
 * Time: 11:55 AM
 */
?>
<?php
session_start();
require_once ('../../aiboc_admin/class/Building.php');

$id = $_POST['id'];

    $getstatus = Building::Status($id);

    if($getstatus == 1)
    {
        echo "1";
    }
    else
    {
        echo "0";
    }
?>
