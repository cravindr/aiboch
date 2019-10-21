<?php
require_once ('Database.php');
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 1/3/2017
 * Time: 10:31 AM
 */
class Total
{
    var $database;


        public function __construct()
        {
            $this->database = new Database();
        }

        public static function TotalBuilding()
        {
            $ins = new self();

            $qry = "SELECT * FROM `buiding_register`";

            $res = $ins->database->Query($qry);

            return $res->num_rows;
        }

        public static function TotalBuildingActive()
        {
            $ins = new self();

            $qry = "SELECT * FROM `buiding_register` WHERE `status` = 'active'";

            $res = $ins->database->Query($qry);

            return $res->num_rows;
        }

        public static function TotalTenant()
        {
            $ins = new self();

            $qry = "SELECT * FROM `tenant_register`";

            $res = $ins->database->Query($qry);

            return $res->num_rows;

        }
        public static function TotalTenantActive()
        {
            $ins = new self();

            $qry = "SELECT * FROM `tenant_register` WHERE `status` = 'active'";

            $res = $ins->database->Query($qry);

            return $res->num_rows;

        }

        public static function TotalEnquiry()
        {
            $ins = new self();

            $qry = "SELECT * FROM `tenant_enquiry`";

            $res = $ins->database->Query($qry);

            return $res->num_rows;

        }

        public static function TotalEnquiryActive()
        {
            $ins = new self();

            $qry = "SELECT * FROM `tenant_enquiry` WHERE `status` = 'success'";

            $res = $ins->database->Query($qry);

            return $res->num_rows;

        }

        public static function TodaysRegBuilding()
        {
            date_default_timezone_set('Asia/Kolkata');
            $today =  date('Y-m-d');


            $ins = new self();

            $qry = "SELECT * FROM `buiding_register` WHERE `cdate` Like '$today%'";

            $res = $ins->database->Query($qry);

            return $res->num_rows;
        }

        public static function TodaysRegTenant()
        {
            date_default_timezone_set('Asia/Kolkata');
            $today =  date('Y-m-d');


            $ins = new self();

            $qry = "SELECT * FROM `tenant_register` WHERE `cdate` Like '$today%'";

            $res = $ins->database->Query($qry);

            return $res->num_rows;
        }

        public static function TodaysEnquiry()
        {
            date_default_timezone_set('Asia/Kolkata');
            $today =  date('Y-m-d');


            $ins = new self();

            $qry = "SELECT * FROM `tenant_enquiry` WHERE `enquiry_date` Like '$today%'";

            $res = $ins->database->Query($qry);

            return $res->num_rows;
        }


}
?>