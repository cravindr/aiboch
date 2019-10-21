<?php
require_once ('config.php');
/**
 * Created by PhpStorm.
 * User: home
 * Date: 10/8/2016
 * Time: 8:56 PM
 */
class Database
{
    var $host;
    var $username;
    var $password;
    var $dbname;
    var $result;
    var $rows;
    var $con;
    var $inserted_id;
    var $primary_key;

    var $database;

    public function __construct()
    {
        $this->host = HOST;
        $this->username = USERNAME;
        $this->password = PASSWORD;
        $this->dbname = DATABASE;
    }

    public function Connect()
    {
        $this->con = mysqli_connect($this->host,$this->username,$this->password) or die("Connection Error");
        mysqli_select_db($this->con,$this->dbname) or die("Select DB Error");
    }

    public function ConnectionClose()
    {
        mysqli_close($this->con);
    }

    public function Query($query)
    {
        $this->Connect();
        $this->result = mysqli_query($this->con,$query) or die("Query Error");

       // $this->inserted_id = mysqli_insert_id($this->con);

        if(preg_match("/INSERT/i",$query))
        {
            $this->inserted_id = mysqli_insert_id($this->con);
        }

        if(preg_match("/SELECT/i",$query))
        {
             $this->rows = mysqli_num_rows($this->result);
        }


        if(preg_match("/UPDATE/i",$query))
        {
            $this->rows=mysqli_affected_rows($this->con);
         }
        if(preg_match("/DELETE/i",$query))
        {
            $this->rows=mysqli_affected_rows($this->con);
        }

        $this->ConnectionClose();

        return $this->result;
    }

    public  function GetPrimaryKey($tablename)
    {
        $qry="SHOW KEYS FROM $tablename WHERE Key_name = 'PRIMARY' ";
        $row=mysqli_fetch_object(self::Query($qry));
        $this->primary_key=$row->Column_name;
        return $this->primary_key;
    }

    public function GetSingle($table,$PrimaryKeyValue)
    {
        $primary_key=self::GetPrimaryKey($table);
        $qry="SELECT * FROM  $table WHERE `$primary_key`='$PrimaryKeyValue'";
        $row=mysqli_fetch_object(self::Query($qry));

        /*$arrnode="";
        foreach ($row as $rowObject=>$rowValue)
        {
          $arrpair=" '$rowObject' => $rowValue ";
          $arrnode.=($arrnode=="")?$arrpair:",$arrpair";
        }
        $arr_ret=[$arrnode];
        return $arr_ret;
        */
        return $row;

    }

    public function GetTableData($table,$where=null)
    {
        $condition="";
        $condition1="";
        $condition2="";
        if(is_null($where))
        {
            $qry="SELECT * FROM  $table ";
        }elseif (is_array($where))
        {
            foreach($where as $whareFieldName=>$whereFieldValue)
            {
                $condition1 ="`$whareFieldName`='$whereFieldValue'";
                $condition2 =" AND `$whareFieldName`='$whereFieldValue'";
                $condition.=($condition=="")?$condition1:$condition2;
            }

            $qry="SELECT * FROM  $table WHERE $condition  ";

        }
        $rs=self::Query($qry);
        $array=array();
        while($rows=mysqli_fetch_object($rs))
        {
            $array[]=$rows;

        }
        return $array;

        //############################## Calling Coode##################################
        /*
      $db=new Database();
      $tabRows=$db->GetTableData("tenant_register",['working_branch'=>"Coimbatore",'transfered_banch'=>"Tiruchengode"]);
        foreach($tabRows as $tabRow )
        {
            print_r($tabRow);
            print_r($tabRow->name);

        }*/
        //############################## Calling Coode##################################

    }

}
?>