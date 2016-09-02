<?php
include "conn.php";
if(isset($_POST['sub'])){
    $title=$_POST['title'];
    $con=$_POST['con'];
    $classid=$_POST['leibie'];
    //拼一个字符串mysql的插入语法
    $sql="insert into blog(blogid,title,content,time,classid) values(null,'$title','$con',now(),'$classid')";
    $query=mysqli_query($link,$sql);//返回0或1 返回的是状态
    if($query){
        echo "<script>alert('插入数据成功')</script>";
        echo "<script>location='index.php'</script>";
    }


}






?>
<meta charset="UTF-8">
<form action="add.php" method="post">
    标题:<input type="text" name="title"><br />
    内容:<textarea rows=10 cols=30 name="con"></textarea><br />
    类别：<select name="leibie">
        <option value="1">文学类</option>
        <option value="2">动漫类</option>
        <option value="3">历史类</option>
    </select>
    <input type="submit" name="sub" value="发表">
</form
