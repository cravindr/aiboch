<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 2/4/2017
 * Time: 12:57 PM
 */ ?>
<?php
require_once ('smartysettings.php');
require_once ('class/Appoinment.php');

    $id = $_POST['ownerid'];
    $date = $_POST['appdate'];
    $time = $_POST['apptime'];
    $desc = $_POST['desc'];
    $status = $_POST['appstatus'];

        $obj = new Appoinment();

            $obj->ownappid = $id;
            $obj->app_date = $date;
            $obj->app_time = $time;
            $obj->description = $desc;
            $obj->status = $status;

                $smarty->display('link_css.tpl');
                $smarty->display('link_js.tpl');
                $smarty->display('modal_view.tpl');

                    if($obj->Update_owner()== 1)
                    {
                        ?>
                        <script>
                            var html = '<div class="alert-success"><strong>Success!!!</strong><br>Details Successfully Updated.</div>';
                            $('.modal-body').html(html);
                            $('#orumodal').modal('show');

                            // when close the modal redirect this page
                            $('button[type="button"]').click(function () {
                                window.location.href = "appoinment_owner_today.php";
                            });
                        </script>
                        <?php
                    }
                    else
                    {
                        ?>
                        <script>
                            var html = '<div class="alert-danger"><strong>Failed!!!</strong>Details Updated Failed.</div>';
                            $('.modal-body').html(html);
                            $('#orumodal').modal('show');

                            // when close the modal redirect this page
                            $('button[type="button"]').click(function () {
                                window.location.href = "appoinment_owner_today.php";
                            });
                        </script>
                        <?php
                    }
?>