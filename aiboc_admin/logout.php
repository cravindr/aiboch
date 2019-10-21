<?php
/**
 * Created by PhpStorm.
 * User: oom
 * Date: 10-Oct-16
 * Time: 5:21 PM
 */ ?>
<?php
session_start();
session_destroy();
header("Location: index.php");
?>