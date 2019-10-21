<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 11/25/2016
 * Time: 6:04 PM
 */
?>
<?php
require_once ('../class/Owner.php');

    $id = $_POST['id'];

    $deleteitem = Owner::Delete($id);

    echo $deleteitem;
?>