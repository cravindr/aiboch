<?php
require_once ('Database.php');
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 2/3/2017
 * Time: 3:28 PM
 */
class Appoinment
{
    var $ownappid;
    var $tenappid;
    var $owner_id;
    var $tenant_id;
    var $app_date;
    var $app_time;
    var $description;
    var $status;

    var $database;

        public function __construct()
        {
            $this->database = new Database();
        }

        public function Update_owner()
        {
            $qry = "UPDATE `owner_appoinment` SET 
                                                    `app_date`= '$this->app_date',
                                                    `app_time`= '$this->app_time',
                                                    `description`= '$this->description',
                                                    `status`= '$this->status'
                                                    WHERE  `id`= '$this->ownappid'";

            return $this->database->Query($qry);
        }

        public function Update_tenant()
        {
            $qry = "UPDATE `tenant_appoinment` SET 
                                                        `app_date`= '$this->app_date',
                                                        `app_time`= '$this->app_time',
                                                        `description`= '$this->description',
                                                        `status`= '$this->status'
                                                        WHERE  `id`= '$this->tenappid'";
            return $this->database->Query($qry);
        }

        public static function GetOwnerById($id)
        {
            $ins = new self();

            $qry = "SELECT * FROM `owner_appoinment` WHERE `id` = '$id'";

            $res = $ins->database->Query($qry);

            if($row = mysqli_fetch_object($res))
            {
                $ins->ownappid = $row->id;
                $ins->app_date = $row->app_date;
                $ins->app_time = $row->app_time;
                $ins->description = $row->description;
                $ins->status = $row->status;
            }

            return $ins;
        }

    public static function GetTenantById($id)
    {
        $ins = new self();

        $qry = "SELECT * FROM `tenant_appoinment` WHERE `id` = '$id'";

        $res = $ins->database->Query($qry);

        if($row = mysqli_fetch_object($res))
        {
            $ins->tenappid = $row->id;
            $ins->app_date = $row->app_date;
            $ins->app_time = $row->app_time;
            $ins->description = $row->description;
            $ins->status = $row->status;
        }

        return $ins;
    }
}
?>


