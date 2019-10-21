<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 2/7/2017
 * Time: 1:10 PM
 */ ?>
<?php
require_once ('smartysettings.php');
require_once ('class/Roles.php');

    $id = $_POST['getid'];
    $rolename = $_POST['rolename'];
    $roledesc = $_POST['roledesc'];

    $obj = new Roles();

        $obj->role_id = $id;
        $obj->role_name = $rolename;
        $obj->role_desc = $roledesc;

            $smarty->display('link_css.tpl');
            $smarty->display('link_js.tpl');
            $smarty->display('modal_view.tpl');

                if($obj->Role_update() ==  1)
                {
                    ?>
                    <script>
                        var html = '<div class="alert-success"><strong>Success!!!</strong><br>Roles Successfully Updated.</div>';
                        $('.modal-body').html(html);
                        $('#orumodal').modal('show');

                        // when close the modal redirect this page
                        $('button[type="button"]').click(function () {
                            window.location.href = "role_list.php";
                        });
                    </script>
                    <?php
                }
                else
                {
                    ?>
                    <script>
                        var html = '<div class="alert-danger"><strong>Failed!!!</strong>Roles Updated Failed.</div>';
                        $('.modal-body').html(html);
                        $('#orumodal').modal('show');

                        // when close the modal redirect this page
                        $('button[type="button"]').click(function () {
                            window.location.href = "role_list.php";
                        });
                    </script>
                    <?php
                }
?>