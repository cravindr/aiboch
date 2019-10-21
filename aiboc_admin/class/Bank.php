<?php
require_once ('Database.php');
/**
 * Created by PhpStorm.
 * User: Ravindran
 * Date: 12/24/2016
 * Time: 4:16 PM
 */
class Bank
{
    var $bank_id;
    var $bank_name;
    var $description;
    var $status;

    var $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function Save()
    {
        $qry = "INSERT INTO `bank_details`(`bank_id`, `bank_name`, `description`, `status`) VALUES (NULL ,'$this->bank_name','$this->description','$this->status')";

        return $this->database->Query($qry);
    }

    public function Update()
    {
        $qry = "UPDATE `bank_details` SET `bank_name`= '$this->bank_name',`description`= '$this->description',`status`= '$this->status' WHERE `bank_id`= '$this->bank_id'";

        return $this->database->Query($qry);
    }

    public static function GetById($id)
    {
        $ins = new self();

        $qry = "SELECT * FROM `bank_details` WHERE `bank_id` = '$id'";

        $res = $ins->database->Query($qry);

        while($row = mysqli_fetch_object($res))
        {
            $ins->bank_id = $row->bank_id;
            $ins->bank_name = $row->bank_name;
            $ins->description = $row->description;
            $ins->status = $row->status;
        }

        return $ins;
    }

    public static function Status($id)
    {
        $ins = new self();

        $getstatus = $ins->GetById($id);

        if($getstatus->status == "active")
        {
            $qry = "UPDATE `bank_details` SET `status`= 'inactive' WHERE `bank_id` = '$id'";
        }
        else
        {
            $qry = "UPDATE `bank_details` SET `status`= 'active' WHERE `bank_id` = '$id'";
        }

        return $ins->database->Query($qry);
    }

    public static function Delete($id)
    {
        $ins = new self();

        $qry = "DELETE FROM `bank_details` WHERE `bank_id` = '$id'";

        return $ins->database->Query($qry);
    }
}
?>


