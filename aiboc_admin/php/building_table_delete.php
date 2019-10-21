<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 12/2/2016
 * Time: 11:13 AM
 */
?>
<?php
require_once ('../class/Building.php');

    $id = $_POST['id'];

    $delete = Building::DeleteRow($id);

    echo $delete;
?>