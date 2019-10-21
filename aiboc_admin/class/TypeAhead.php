<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 12/13/2016
 * Time: 2:09 AM
 */ ?>
<?php
require_once ('Database.php');
class TypeAhead
{
    var $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public static function City($query)
    {
        $ins = new self();

        $qry = "SELECT `name`  FROM cities WHERE `name` LIKE '$query%'";
        $res = $ins->database->Query($qry);
        $array = array();
        while ($row = mysqli_fetch_assoc($res))
        {
            $array[] = array (
                'label' => $row['name'],
                'value' => $row['name'],
            );
        }
        return $array;
    }

    public static function State($state)
    {
        $ins = new self();

        $qry = "SELECT name  FROM states WHERE name LIKE '$state%'";
        $res = $ins->database->Query($qry);
        while ($row = mysqli_fetch_assoc($res))
        {
            $states[] = array(
                'label' => $row['name'],
                'value' => $row['name'],
            );
        }

        return $states;
    }
}

?>