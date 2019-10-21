<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 2/7/2017
 * Time: 5:36 PM
 */ ?>
<?php
require_once ('../aiboc_admin/class/TermsConditions.php');

    $id = '1';
    
    $getval = @TermsConditions::GetById($id);

echo json_encode($getval);
?>