<?php

/**
 * Created by PhpStorm.
 * User: Ravindran
 * Date: 12/16/2016
 * Time: 11:53 AM
 */
require_once ("Database.php");
require_once ("Admin.php");
class Authenticate
{
    var $loginInfo;
    var $database;

    public function __construct()
    {
        $this->loginInfo=new Admin();
        $this->database=new Database();
    }

    public static function CheckUserRights($fileName){

        if (isset($_SESSION['ADMIN_LOG_DETAILS']))
        {
            $loginDetail=unserialize($_SESSION['ADMIN_LOG_DETAILS']);
           // $loginDetail= new Admin();

            if($loginDetail->login_status==1)
            {

                $res= self::RollCheck($fileName,$loginDetail->role);

                if($res!=1)
                    {
                        header("Location:authenticate_message.php");
                    }

            }
        }
        else
        {
             header("Location: index.php");
        }

    }

  static  function RollCheck($fileName,$role){
        $rol_id="";
        $qry="SELECT * from user_role WHERE role_name='$role' ";

        $ins=new self();
        $ins->database->Query($qry);

        if($ins->database->rows==1)
        {
            $row=mysqli_fetch_object($ins->database->result);
            $rol_id=$row->role_id;
            $qry_file_check="SELECT * FROM `role_access` WHERE `role_id`='$rol_id' AND `menu`='$fileName'";

            $ins->database->Query($qry_file_check);
            if($ins->database->rows==1)
            {
                return 1;
            }
            else
            {
                return 0;
            }
            }

    }

}