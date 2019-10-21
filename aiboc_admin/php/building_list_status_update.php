<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 12/1/2016
 * Time: 5:56 PM
 */
?>
<?php
require_once ('../class/Building.php');

    $id = $_POST['id'];

    $getstatus = Building::Status($id);
    echo $getstatus;
?>