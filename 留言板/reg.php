<?php
include "conn.php";

if(isset($_POST['sub'])) {
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $pass1 = $_POST['pass1'];
    // 判断两次输入的密码是否一样

    if ($pass == $pass1) {
        $flag = true;
            $arr = array('%', ' ', '=', '>', '&');
            for ($i = 0; $i < strlen($name); $i++) {
                for ($j = 0; $j < count($arr); $j++) {
                    if ($name[$i] == $arr[$j]) {
                        $flag = false;

                    }

                }
            if (!$flag) {
                echo "<script>alert('用户名非法')</script>";
                echo "<script>location='reg.php'</script>";

            } else {
                $sql1 = "insert into user(userid,name,pass) values (NULL ,'$name','$pass' )";
               $query1 = mysqli_query($link, $sql1);
                if ($query1) {
                    echo "<script>alert('注册成功')</script>";
                    echo "<script>location='login.php'</script>";
                } else {
                    echo "<script>alert('注册失败')</script>";
                    echo "<script>location='reg.php'</script>";
                }

            }
        }
    } else {
        echo "<script>alert('两次密码不同')</script>";
        echo "<script>location='reg.php'</script>";
    }

}



?>
<form action="reg.php" method="post">
    用户名:<input type="text" name="name" id="ul1"><br/>
    密码:<input  type="password" name="pass" id="pass1"><br/>
    再次确认密码:<input type="password" name="pass1" id="pass2"><br/>
    <input type="submit" name="sub" value="注册" >
    <input type="reset" name="sub" value="重置">
</form>
<script src="jquery.min.js"></script>
<script>
    $(function () {
       $("#ul1").on('blur',function () {

           $.get('xx.php','name='+this.value,function(data){
                if(data=='error'){
                    alert(112);
                    $("#ul1").after('<span id="sp">用户名已存在</span>');
                }
           })
       });
        var pass1value;
        $('#pass1').on('blur',function () {
            pass1value=this.value;
        })
        $('#pass2').on('blur',function(){
            $.get('yy.php','name='+this.value+'&value='+pass1value,function(data){
                if(data=='error'){
                    $("#pass2").after('<span >两次密码不同</span>');
                }
            },'text');
        })
    });







</script>
