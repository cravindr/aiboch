<?php
require_once ('Database.php');
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 2/7/2017
 * Time: 10:27 AM
 */
class Roles
{
    var $role_id;
    var $role_name;
    var $role_desc;

    var $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function Role_insert()
    {
        $qry = "INSERT INTO `user_role`(`role_id`, `role_name`, `role_desc`) VALUES (NULL,'$this->role_name','$this->role_desc')";

        //echo $qry; exit;

        return $this->database->Query($qry);
    }

    public function Role_update()
    {
        $qry = "UPDATE `user_role` SET `role_name`= '$this->role_name',`role_desc`= '$this->role_desc' WHERE `role_id`= '$this->role_id'";

        return $this->database->Query($qry);
    }

    public static function GetRoleById($id)
    {
        $ins = new self();

        $qry = "SELECT * FROM `user_role` WHERE `role_id` = '$id'";

        $res = $ins->database->Query($qry);

        if($row = mysqli_fetch_object($res))
        {
            $ins->role_id = $row->role_id;
            $ins->role_name = $row->role_name;
            $ins->role_desc = $row->role_desc;
        }
        return $ins;
    }

    public static function Role_Delete($id)
    {
        $ins = new self();

        $qry = "DELETE FROM `user_role` WHERE `role_id` = '$id'";

        return $ins->database->Query($qry);
    }
}
?>