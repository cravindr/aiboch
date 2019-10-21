<?php
require_once ('Database.php');
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 2/7/2017
 * Time: 5:37 PM
 */
class TermsConditions
{
    var $term_id;
    var $owner_condition;
    var $tenant_condition;

    var $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public static function GetById($id)
    {
        $ins = new self();

        $qry = "SELECT * FROM `terms_and_conditions` WHERE `term_id` = '$id'";

        $res = $ins->database->Query($qry);

        if($row = mysqli_fetch_object($res))
        {
            $ins->term_id = $row->term_id;
            $ins->owner_condition = $row->owner_condition;
            $ins->tenant_condition = $row->tenant_condition;
        }

        return $ins;
    }

    public function UpdateOwner()
    {
        $qry = "UPDATE `terms_and_conditions` SET `owner_condition`= '$this->owner_condition'
                WHERE `term_id`='$this->term_id'";

        return $this->database->Query($qry);
    }

    public function UpdateTenant()
    {
        $qry = "UPDATE `terms_and_conditions` SET `tenant_condition`= '$this->tenant_condition' WHERE `term_id` = '$this->term_id'";

        return $this->database->Query($qry);
    }
}
?>