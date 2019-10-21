<?php
/**
 * Created by PhpStorm.
 * User: oom
 * Date: 08-Oct-16
 * Time: 12:58 PM
 */
?>
<?php
session_start();
require_once ('../aiboc_admin/Smarty-3.1.30/libs/Smarty.class.php');


    $smarty = new Smarty();

        $smarty->setTemplateDir('../templates');
        $smarty->setCompileDir('../templates_c');
?>