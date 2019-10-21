<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 11/23/2016
 * Time: 5:56 PM
 */
?>
<?php

class Email
{
    var $from;
    var $to;
    var $subject;
    var $body;
    var $type;

    public function  __construct($from='')
    {
        if($from=="")
        {
            $this->from="info@99poster.com";
        }
        else
        {
            $this->from=$from;
        }
    }

    public static function sendMail($to,$subject,$body)
    {
        $ins=new self();
        $ins->to=$to;

        $ins->subject=$subject;
        $ins->body=$body;


        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        $headers .= "From:$ins->from \r\n";
        $headers .= 'Cc: ' . "\r\n";
        $headers .= 'Bcc: ' . "\r\n";
        $headers .= "Reply-To: $ins->to \r\n";
        error_reporting(E_ERROR | E_PARSE);
        return mail($ins->to, $ins->subject, $ins->body, $headers);
        error_reporting(E_ERROR | E_PARSE);

    }
}
?>