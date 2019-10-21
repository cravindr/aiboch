<?php
require_once ('Database.php');
/**
 * Created by PhpStorm.
 * User: oom
 * Date: 10/19/2016
 * Time: 4:26 PM
 */
class Owner
{
    var $owner_id;
    var $name;
    var $emailid;
    var $mobile;
    var $password;
    var $address;
    var $place;
    var $city;
    var $state;
    var $pin;
    var $cdate;
    var $mdate;
    var $otp;
    var $status;


    var $database;
    var $login_Status;

        public function __construct()
        {
            $this->database = new Database();
        }

        public static function LoginOwner($username,$password)
        {
            $qry = "SELECT * FROM `owner_register` 
                    WHERE (`emailid` = '$username' OR `mobile` = '$username') 
                    AND (`password` = md5('$password') OR `otp` = '$password' ) AND `status` = 'active'";

            $ins = new self();

            $res = $ins->database->Query($qry);

            if($row = mysqli_fetch_object($res))
            {
                $ins->owner_id = $row->owner_id;
                $ins->name = $row->name;
                $ins->emailid = $row->emailid;
                $ins->mobile = $row->mobile;
                $ins->password = $row->password;
                $ins->address = $row->address;
                $ins->place = $row->place;
                $ins->city = $row->city;
                $ins->state = $row->state;
                $ins->pin = $row->pin;
                $ins->cdate = $row->cdate;
                $ins->mdate = $row->mdate;
                $ins->otp = $row->otp;
                $ins->status = $row->status;
                $ins->login_Status = "true";

                $ins->OtpClear($ins->owner_id);
            }
            else
            {
                $ins->login_Status = "false";
            }

            return $ins;
        }

        public function Save()
        {
            $qry = "INSERT INTO `owner_register`(`name`, `emailid`, `mobile`, `password`, 
                    `address`, `place`, `city`, `state`, `pin`, `cdate`, `mdate`, `status`)
                    VALUES (                            
                            '$this->name',
                            '$this->emailid',
                            '$this->mobile',
                            '$this->password',
                            '$this->address',
                            '$this->place',
                            '$this->city',
                            '$this->state',
                            '$this->pin',
                            '$this->cdate',
                            '$this->mdate',
                            '$this->status'
                          )";

            return $this->database->Query($qry);
        }

        public function Update()
        {
            $qry = "UPDATE `owner_register`
                    SET  
                    `name`='$this->name',
                    `emailid`='$this->emailid',
                    `mobile`='$this->mobile',
                    `password`='$this->password',
                    `address`='$this->address',
                    `place`='$this->place',
                    `city`='$this->city',
                    `state`='$this->state',
                    `pin`='$this->pin',
                    `cdate`='$this->cdate',
                    `mdate`='$this->mdate',
                    `status`='$this->status'
                    
                    WHERE `owner_id`='$this->owner_id'";

            return $this->database->Query($qry);
        }

        public static function GetById($id)
        {
            $ins = new self();

            $qry = "SELECT * FROM `owner_register` WHERE `owner_id` = '$id'";

            $res = $ins->database->Query($qry);

            while($row = mysqli_fetch_object($res))
            {
                $ins->owner_id = $row->owner_id;
                $ins->name = $row->name;
                $ins->emailid = $row->emailid;
                $ins->mobile = $row->mobile;
                $ins->password = $row->password;
                $ins->address = $row->address;
                $ins->place = $row->place;
                $ins->city = $row->city;
                $ins->state = $row->state;
                $ins->pin = $row->pin;
                $ins->cdate = $row->cdate;
                $ins->mdate = $row->mdate;
                $ins->status = $row->status;
            }
            return $ins;
        }

        public static function GetAll()
        {
            $qry = "SELECT * FROM `owner_register`";

            $ins = new self();

            $res = $ins->database->Query($qry);

            $array = array();

            while($row = mysqli_fetch_object($res))
            {
                array_push($array,array(

                    'owner_id'=>$row->owner_id,
                    'name'=>$row->name,
                    'emailid'=>$row->emailid,
                    'mobile'=>$row->mobile,
                    'password'=>$row->password,
                    'address'=>$row->address,
                    'place'=>$row->place,
                    'city'=>$row->city,
                    'state'=>$row->state,
                    'pin'=>$row->pin,
                    'cdate'=>$row->cdate,
                    'mdate'=>$row->mdate,
                    'status'=>$row->status
                ));
            }

            return $array;
        }

    public static function ValidateEmailID($email)
    {
        $qry = "SELECT * FROM `owner_register` WHERE `emailid` = '$email'";

        $ins = new self();

        $ins->database->Query($qry);

        return $ins->database->rows;
    }

    public static function ValidateMobileNo($number)
    {
        $qry = "SELECT * FROM `owner_register` WHERE `mobile` = '$number'";

        $ins = new self();

        $ins->database->Query($qry);

        return $ins->database->rows;
    }


    public static function ChangePassword($pass,$id,$newpass)
        {
            $ins = new self();

            $qry = "SELECT * FROM `owner_register` WHERE `password`= md5('$pass') AND `owner_id` = '$id'";

            $ins->database->Query($qry);

            if($ins->database->rows == 1)
            {
                $qry = "UPDATE `owner_register` SET `password`= md5('$newpass') WHERE `owner_id` = '$id'";
                return $ins->database->Query($qry);
            }
            else
            {
                return 0;
            }
        }

        public static function OtpClear($id)
        {
            $ins = new self();
            $qry = "UPDATE `owner_register` SET `otp`= '' WHERE `owner_id` = '$id'";
            $ins->database->Query($qry);
        }

        public static function Status($id)
        {
            $ins = new self();

            $status = $ins->GetById($id);

            if($status->status == 'active')
            {
                $qry = "UPDATE `owner_register` SET `status`= 'inactive' WHERE `owner_id`= '$id'";
            }
            else
            {
                $qry = "UPDATE `owner_register` SET `status`= 'active' WHERE `owner_id`= '$id'";
            }

            return $ins->database->Query($qry);
        }

        public static function Delete($id)
        {
            $ins = new self();

            $qry = "DELETE FROM `owner_register` WHERE `owner_id` = '$id'";

            return $ins->database->Query($qry);
        }

}
?>