<?php
require_once ('smartysettings.php');
require_once ('class/Bank.php');
/**
 * Created by PhpStorm.
 * User: Ravindran
 * Date: 12/24/2016
 * Time: 4:33 PM
 */

$smarty->display('link_css.tpl');
$smarty->display('link_js.tpl');
$smarty->display('model_success.tpl');

    $bankname = $_POST['bankname'];
    $desc = $_POST['bankdesc'];
    $status = "active";

        $bank = new Bank();

            $bank->bank_name = $bankname;
            $bank->description = $desc;
            $bank->status = $status;

                if($bank->Save() == 1)
                {
                    ?>
                    <script>
                        var html = '<div class="alert alert-success">Bank Details Saved.</div>';
                        $('.modal-body').html(html);
                        $('#formsuccess').modal('show');
                        $('button[type="button"]').click(function () {
                            window.location.href = "bank_register.php";
                        });
                    </script>
                    <?php
                }
                else
                {
                    ?>
                    <script>
                        var html = '<div class="alert alert-danger">Bank Details Does Not Saved.</div>';
                        $('.modal-body').html(html);
                        $('#formsuccess').modal('show');
                        $('button[type="button"]').click(function () {
                            window.location.href = "bank_register.php";
                        });
                    </script>
                    <?php
                }
?>