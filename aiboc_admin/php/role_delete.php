<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 2/7/2017
 * Time: 2:11 PM
 */ ?>
<?php
require_once ('../class/Roles.php');

    $id = $_POST['id'];

echo $res = @Roles::Role_Delete($id);
?>