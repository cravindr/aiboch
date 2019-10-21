<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 11/17/2016
 * Time: 5:03 PM
 */
?>
<?php
require_once ('../aiboc_admin/class/FrontPage.php');

$getstate = FrontPage::GetState();
foreach ($getstate as $setstate)
{
    $data[] = $setstate['state'];
}
echo json_encode($data);
?>
