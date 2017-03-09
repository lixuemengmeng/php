<?php
/**
 * Created by PhpStorm.
 * User: whf
 * Date: 17/2/8
 * Time: 下午5:46
 */

$conn = mysqli_connect('localhost','root','','Manger');
mysqli_set_charset($conn,'utf8');

function writeTable($tableName,$item){
    global $conn;

    $sql = "insert into $tableName VALUES ($item)";

    if (!mysqli_query($conn,$sql)){
        echo '数据库写入失败!' . $sql .'<br/>';
    }
    else{
        echo '数据库写入成功!' . $sql . '<br/>';
    }
}

