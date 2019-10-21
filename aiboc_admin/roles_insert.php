<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 2/7/2017
 * Time: 10:21 AM
 */ ?>
<?php
require_once ('smartysettings.php');
require_once ('class/Roles.php');

        $rolename = $_POST['rolename'];
        $roledesc = $_POST['roledesc'];

            $obj = new Roles();

                $obj->role_name = $rolename;
                $obj->role_desc = $roledesc;

                    $smarty->display('link_css.tpl');
                    $smarty->display('link_js.tpl');
                    $smarty->display('modal_view.tpl');

                        if($obj->Role_insert() ==  1)
                        {
                            ?>
                            <script>
                                var html = '<div class="alert-success"><strong>Success!!!</strong><br>Roles Successfully Inserted.</div>';
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
                                var html = '<div class="alert-danger"><strong>Failed!!!</strong>Roles Inserted Failed.</div>';
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