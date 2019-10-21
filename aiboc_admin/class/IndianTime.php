<?php
/**
 * Created by PhpStorm.
 * User: oom
 * Date: 10/31/2016
 * Time: 3:37 PM
 */
?>
<?php

class IndianTime
{
    var $zone = "Asia/Kolkata";

    public static function CurrentTime()
    {
        $ins = new self();
        date_default_timezone_set($ins->zone);
        return date('Y-m-d H:i:s'); //Returns IST
    }

   public static function CurrentDate()
   {
       $ins = new self();
       date_default_timezone_set($ins->zone);
       return date('Y-m-d'); //Returns IST
   }
}

?>