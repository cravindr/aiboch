<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 11/25/2016
 * Time: 6:04 PM
 */
?>
<?php
require_once ('../class/Tenant.php');

    $id = $_POST['id'];

    $deleteitem = Tenant::Delete($id);

    echo $deleteitem;
?>