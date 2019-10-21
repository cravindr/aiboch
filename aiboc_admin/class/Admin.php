<?php
require_once ('Database.php');
/**
 * Created by PhpStorm.
 * User: oom
 * Date: 10-Oct-16
 * Time: 12:58 PM
 */
class Admin
{
    var $user_id;
    var $user_name;
    var $name;
    var $emailid;
    var $mobile;
    var $password;
    var $role;
    var $img_url;
    var $address;
    var $place;
    var $created;
    var $modified;
    var $last_login;
    var $reset_pin;
    var $status;
    var $login_status;

    var $database;

        public function __construct()
        {
            $this->database = new Database();
        }

        public static function LoginAdmin($usname,$pass)
        {
            $ins = new self();

            $qry = "SELECT * FROM `admin_user` WHERE (`user_name` = '$usname' OR `emailid` = '$usname' OR `mobile` = '$usname') AND (`password` = md5('$pass') OR `reset_pin` = '$pass')";

            $res = $ins->database->Query($qry);

            $row = mysqli_fetch_object($res);

                if($ins->database->rows == 1)
                {
                    $ins->user_id = $row->user_id;
                    $ins->user_name = $row->user_name;
                    $ins->name = $row->name;
                    $ins->emailid = $row->emailid;
                    $ins->mobile = $row->mobile;
                    $ins->password = $row->password;
                    $ins->role = $row->role;
                    $ins->img_url = $row->img_url;
                    $ins->address = $row->address;
                    $ins->place = $row->place;
                    $ins->created = $row->created;
                    $ins->modified = $row->modified;
                    $ins->last_login = $row->last_login;
                    $ins->reset_pin = $row->reset_pin;
                    $ins->status = $row->status;
                    $ins->login_status=1;

        }
            return $ins;
        }

        public function Save()
        {
            $qry = "INSERT INTO `admin_user`(`user_id`, `user_name`, `name`, `emailid`, `mobile`, `password`, `role`, `img_url`, `address`, `place`, `created`, `modified`, `last_login`, `reset_pin`, `status`) 
                    VALUES (Null,
                                    '$this->user_name',
                                    '$this->name',
                                    '$this->emailid',
                                    '$this->mobile',
                                    md5('$this->password'),
                                    '$this->role',
                                    '$this->img_url',
                                    '$this->address',
                                    '$this->place',
                                    '$this->created',
                                    '$this->modified',
                                    '$this->last_login',
                                    '$this->reset_pin',
                                    '$this->status'
                                    )";
            //echo $qry; exit;
           return  $this->database->Query($qry);
        }

        public static function ChangePassword($id,$old,$new)
        {
            $ins = new self();

            $qry = "SELECT `password` FROM `admin_user` WHERE `password` = md5('$old') AND `user_id` = '$id'";

            $ins->database->Query($qry);

            if($ins->database->rows == 1)
            {
                $qry = "UPDATE `admin_user` SET `password` = md5('$new') WHERE `user_id` = '$id'";
                return $ins->database->Query($qry);
            }
            else
            {
                return 0;
            }

        }

        public function Update()
        {
            $qry = "UPDATE `admin_user` SET
                                            `user_name`='$this->user_name',
                                            `name`='$this->name',
                                            `emailid`='$this->emailid',
                                            `mobile`='$this->mobile',
                                            `password`='$this->password',
                                            `role`='$this->role',
                                            `img_url`='$this->img_url',
                                            `address`='$this->address',
                                            `place`='$this->place',
                                            `created`='$this->created',
                                            `modified`='$this->modified',
                                            `last_login`='$this->last_login',
                                            `reset_pin`='$this->reset_pin',
                                            `status`='$this->status'
                                             WHERE `user_id`='$this->user_id'";

            return $this->database->Query($qry);
        }

        public static function GetById($id)
        {
            $ins = new self();

            $qry = "SELECT * FROM `admin_user` WHERE `user_id` = '$id'";

            $res = $ins->database->Query($qry);

            while($row = mysqli_fetch_object($res))
            {
                $ins->user_id = $row->user_id;
                $ins->user_name = $row->user_name;
                $ins->name = $row->name;
                $ins->emailid = $row->emailid;
                $ins->mobile = $row->mobile;
                $ins->password = $row->password;
                $ins->role = $row->role;
                $ins->img_url = $row->img_url;
                $ins->address = $row->address;
                $ins->place = $row->place;
                $ins->created = $row->created;
                $ins->modified = $row->modified;
                $ins->last_login = $row->last_login;
                $ins->reset_pin = $row->reset_pin;
                $ins->status = $row->status;
            }

            return $ins;
        }

        public static function ForgotPassword($email)
        {
            $ins = new self();

            $qry = "SELECT * FROM `admin_user` WHERE `emailid` = '$email'";

            $res = $ins->database->Query($qry);

            $row = mysqli_fetch_object($res);

            if($ins->database->rows == 1)
            {
                $ins->user_id = $row->user_id;
                $ins->user_name = $row->user_name;
                $ins->name = $row->name;
                $ins->emailid = $row->emailid;
                $ins->mobile = $row->mobile;
                $ins->role = $row->role;
                $ins->created = $row->created;
                $ins->modified = $row->modified;
                $ins->last_login = $row->last_login;
                $ins->status = $row->status;
            }
            return $ins;
        }

        public static function UsernameCheck($username)
        {
            $ins = new self();

            $qry = "SELECT * FROM `admin_user` WHERE `user_name` = '$username'";

             $ins->database->Query($qry);

             return $ins->database->rows;
        }
    public static function EmailCheck($email)
    {
        $ins = new self();

        $qry = "SELECT * FROM `admin_user` WHERE `emailid` = '$email'";

        $ins->database->Query($qry);

        return $ins->database->rows;
    }

    public static function MobileCheck($mobile)
    {
        $ins = new self();

        $qry = "SELECT * FROM `admin_user` WHERE `mobile` = '$mobile'";

        $ins->database->Query($qry);

        return $ins->database->rows;
    }
        public static function Otp($id,$otp)
        {
            $ins = new self();

            $qry = "UPDATE `admin_user` SET `reset_pin`= '$otp' WHERE `user_id`= '$id'";

            return $ins->database->Query($qry);

        }

        public static function DeleteOtp($id)
        {
            $ins = new self();

            $qry = "UPDATE `admin_user` SET `reset_pin` = '' WHERE `user_id` = '$id'";


            return $ins->database->Query($qry);
        }

        public static function Delete($id)
        {
            $ins = new self();

            $qry = "DELETE FROM `admin_user` WHERE `user_id` = '$id'";

            return $ins->database->Query($qry);
        }

        public static function Status($id)
        {
            $ins = new self();

            $getstatus = $ins->GetById($id);

                if($getstatus->status == "active")
                {
                    $qry = "UPDATE `admin_user` SET `status`= 'inactive' WHERE `user_id` = '$id'";
                }
                else
                {
                    $qry = "UPDATE `admin_user` SET `status`= 'active' WHERE `user_id` = '$id'";
                }

                return $ins->database->Query($qry);

        }

        public static function getRoleforSelectPicker()
        {
            $ins = new self();

            $qry = "SELECT `role_name` FROM `user_role`";

            $res = $ins->database->Query($qry);

            $retstr=""; // this style is used for selectpicker and use title option
            while($row=mysqli_fetch_object($ins->database->result))
            {
                $retstr.="<option value='$row->role_name'>$row->role_name</option>";
            }
            echo $retstr;

        }

        public static function ProfileImgSave($img,$id)
        {
            $ins = new self();

            $qry = "UPDATE `admin_user` SET `img_url`= '$img' WHERE `user_id` = '$id'";

           return $ins->database->Query($qry);
        }

        public static function ProfileImgRemove($id)
        {
            $ins = new self();

            $qry = "UPDATE `admin_user` SET `img_url`= '' WHERE `user_id` = '$id'";

            return $ins->database->Query($qry);
        }
}
?>