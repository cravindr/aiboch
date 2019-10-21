<?php

/**
 * Created by PhpStorm.
 * User: Ravindran
 * Date: 07-Jun-16
 * Time: 4:44 PM
 */
class SMS
{
    var $number;
    var $message;
    var $url;

    public function  __construct()
    {
        $this->url="http://sms.tm3.in/api/sendmsg.php?user=poster&pass=cravindr7661&sender=poster&phone=#NUMBER#&text=#MESSAGE#&priority=ndnd&stype=normal";
    }

    public  static  function sendSMS($number,$message)
    {
        $ins=new self();
        $ins->number=$number;
        $ins->message=urlencode($message);
        $ins->url=str_replace("#NUMBER#",$ins->number,$ins->url);
        $ins->url=str_replace("#MESSAGE#",$ins->message,$ins->url);
        $response = file_get_contents($ins->url);
        if( $response)
        {
            return "success";
        }

    }

    public   function Send()
    {

        $this->url=str_replace("#NUMBER#",$this->number,$this->url);
        $message=urlencode($this->message);
        $this->url=str_replace("#MESSAGE#",$message,$this->url);
        $response = file_get_contents($this->url);
        //return $response;
        if( $response)
        {
            return "success";
        }

    }


}