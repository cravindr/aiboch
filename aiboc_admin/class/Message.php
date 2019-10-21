<?php

/**
 * Created by PhpStorm.
 * User: Ravindran
 * Date: 11/8/2016
 * Time: 3:15 PM
 */
require_once ("Database.php");
class Message
{
    var $database;
    public  function __construct()
    {
        $this->database=new Database();
    }

    public static function GetMessage($messagetype)
    {
        $ins=new self();
        $qry="SELECT * FROM message WHERE  (message_id='$messagetype' OR message_type='$messagetype') AND status='active'";

        $ins->database->Query($qry);
        if($ins->database->rows>0)
        {
            $row=mysqli_fetch_object($ins->database->result);
            return $row->message_text;
        }


    }

}

?>