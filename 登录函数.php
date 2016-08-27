
<?php
function login($name,$pass){
    if($name=="admin"&&$pass=="326123"){
        return true;
    }else{
        return false;
    }
}

if(isset($_POST["sub"])){
    $user=$_POST['username'];
    $pass=$_POST['pass'];
    $istrue=login($user,$pass);
    if($istrue){
        echo "登录成功";
    }else{
        echo "登录失败";
    }

}

?>
<meta charset="utf-8">
<form action="登录函数.php" method="post">
    name:<input type="text" name="username">
    passward:<input type="password" name="pass">
    <input type="submit" name="sub" value="登录">
</form>