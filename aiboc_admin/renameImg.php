<?php
/**
 * Created by PhpStorm.
 * User: oom
 * Date: 11/1/2016
 * Time: 2:48 PM
 */
?>
<?php
function renameIMG($path,$file,$num=0)
{
    // echo "Entry<br>";

    if($num==0)
    {
        // echo "Num $num <br>";
        $split = pathinfo($file);
        $file_name = $split['filename'];
        $file_ext = $split['extension'];
        $full_file=$file_name.".".$file_ext;
    }
    else
    {
        //echo "Num $num <br>";
        $split = pathinfo($file);
        $file_name = $split['filename'];
        $file_ext = $split['extension'];
        $full_file=$file_name.$num.".".$file_ext;
    }

    if(file_exists($path.$full_file)==true)
    {
        // echo "File Name  $path.$full_file exist <br>";
        $num=$num+1;
        return renameIMG($path,$file_name.".".$file_ext,$num);
    }

    else
    {
        //echo "Finale File Name  $full_file <br>";
        return $full_file;
    }
}
?>