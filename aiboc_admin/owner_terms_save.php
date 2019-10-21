<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 2/27/2017
 * Time: 3:30 PM
 */ ?>
<?php
require_once ('smartysettings.php');
require_once ('class/TermsConditions.php');

    $terms = $_POST['ownterm'];

    $obj = new TermsConditions();

    $obj->term_id = '1';
    $obj->owner_condition = $terms;

            $smarty->display('link_css.tpl');
            $smarty->display('link_js.tpl');
            $smarty->display('model_success.tpl');

        if($obj->UpdateOwner() == 1)
        {
            ?>
            <script>
                var html = '<div class="alert alert-success">Condition Updated.</div>';
                $('.modal-body').html(html);
                $('#formsuccess').modal('show');
                $('button[type="button"]').click(function () {
                    window.location.href = "owner_terms.php";
                });
            </script>
            <?php
        }
        else
        {
            ?>
            <script>
                var html = '<div class="alert alert-danger">Condition Does not Updated.</div>';
                $('.modal-body').html(html);
                $('#formsuccess').modal('show');
                $('button[type="button"]').click(function () {
                    window.location.href = "owner_terms.php";
                });
            </script>
            <?php
        }
?>