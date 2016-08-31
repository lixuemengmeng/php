<?php
include 'conn.php';

$sql="insert into list(userid,username,passward,email) values(null,'lisi','12345','10154@qq.com')";
//$sql="insert into blog(blogid,title,content,time) values(null,'$title','$con',now())";
$query=mysqli_query($link,$sql);
if($query){
    echo "chenhgong";
}else{
    echo "失败";
}





?>