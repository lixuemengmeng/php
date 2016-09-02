<?php
include "conn.php";
if(isset($_POST['sub'])){
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    $sql="select * from user where name='$name' and pass='$pass'";
    $query=mysqli_query($link,$sql);
    $rs=mysqli_fetch_array($query);
    if($rs){
//cookie(存储在本地浏览器的缓存文件夹)/session(服务器的相应文件夹)
    setcookie('id',$rs['userid']);
    setcookie('name',$rs['name']);
    echo "<script>location='index.php'</script>";
}else{

       echo "<script>alert('登录失败')</script>";
        echo "<script>location='login.php'</script>";
    }
}


?>
<meta charset="utf-8">
<form action="login.php" method="post">
    用户名:<input type="text" name="name" ><br/>
    密码:<input  type="password" name="pass"><br/>
    <input type="submit" name="sub" value="登录">
    <input type="reset" name="res" value="重置">
</form>


