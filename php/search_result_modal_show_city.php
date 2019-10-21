<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 11/18/2016
 * Time: 3:59 PM
 */
?>
<?php
require_once ('../aiboc_admin/class/FrontPage.php');

$state = $_POST['state'];

$places=FrontPage::GetPlace($state);

foreach ($places as $place)
{
    $pls[] = $place['place'];
}
echo json_encode($pls);
?>
