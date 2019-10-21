<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 2/7/2017
 * Time: 1:47 PM
 */ ?>
<?php
require_once ('../class/Roles.php');

    $id = $_POST['id'];

        $values = @Roles::GetRoleById($id);

echo json_encode($values);
?>