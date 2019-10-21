<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 12/29/2016
 * Time: 2:24 PM
 */ ?>
<?php
require_once ('smartysettings.php');
require_once ('class/Bank.php');

    $smarty->display('link_css.tpl');
    $smarty->display('link_js.tpl');
    $smarty->display('model_success.tpl');

        $id = $_SESSION['BANK_EDIT_ID'];

            $bankname = $_POST['bankname'];
            $desc = $_POST['bankdesc'];
            $status = "active";

                $bank = new Bank();

                $bank->bank_id = $id;
                $bank->bank_name = $bankname;
                $bank->description = $desc;
                $bank->status = $status;

                if($bank->Update() == 1)
                {
                    ?>
                    <script>
                        var html = '<div class="alert alert-success">Bank Details Updated.</div>';
                        $('.modal-body').html(html);
                        $('#formsuccess').modal('show');
                        $('button[type="button"]').click(function () {
                            window.location.href = "bank_list.php";
                        });
                    </script>
                    <?php
                }
                else
                {
                    ?>
                    <script>
                        var html = '<div class="alert alert-danger">Bank Details Does Not Updated.</div>';
                        $('.modal-body').html(html);
                        $('#formsuccess').modal('show');
                        $('button[type="button"]').click(function () {
                            window.location.href = "bank_list.php";
                        });
                    </script>
                    <?php
                }
?>