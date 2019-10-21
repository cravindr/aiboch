<?php
/**
 * Created by PhpStorm.
 * User: oom
 * Date: 10/21/2016
 * Time: 11:49 AM
 */
?>
<?php
require_once('smartysettings.php');
session_destroy();
header("Location: index.php");
?>