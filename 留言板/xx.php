<?php
include "conn.php";
if(isset($_GET['name'])){
    $name=$_GET['name'];
    //echo $name;
    $sql = "select *from user where name='$name'";
    $query = mysqli_query($link, $sql);//无论有没有都有返回值 没有就返回null 所以下面用数组的方式去检验
    $result = mysqli_fetch_array($query);
    if ($result) {
        //alert(123);
        echo 'error';
    }else{
        echo 'lala';
    }
}


?>