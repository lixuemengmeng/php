
    <a href="add.php">添加文章</a>
    <form action="index.php" method="post">
        <input type="text" name="search">
        <input type="submit" name="sub" value="搜索">
        <input type="submit" name="wenxue" value="文学类">
        <input type="submit" name="dongman" value="动漫类">
        <input type="submit" name="lishi" value="历史类">
    </form>
    <a href="reg.php">注册</a>

<?php
include 'conn.php';
if(isset($_COOKIE['id'])){
    $id=$_COOKIE['id'];
    $name=$_COOKIE['name'];
    echo "<a href='admin/admin.php'>".$name."已登录</a>";
    echo "<a href='logout.php?id=<?php echo $id?>'>退出</a>";
}else{
    echo "<a href='login.php'>游客</a>";
}

if(isset($_POST['sub'])){
   $se= $_POST['search'];
    $e=" title like'%".$se."%'";

}else{
  $e=1;
}
if(isset($_POST['wenxue'])){
    $a="$classid=1";
}elseif(isset($_POST['dongman'])){
    $a="$classid=2";
}elseif(isset($_POST['lishi'])){
    $a="$classid=3";
}else{
   $a=1;
}
$sql="select * from blog where $e and $a order by blogid desc";
$query=mysqli_query($link,$sql);//返回的是资源类型
//用函数将每一行转换成数组输出
while($rs=mysqli_fetch_array($query)) {

    ?>
    <h2><a href="view.php?id=<?php echo $rs['blogid']?>"><?php echo "标题:".$rs['title'] ?></a>|<a href="edit.php?id=<?php echo $rs['blogid']?>">编辑</a>|<a href="del.php?id=<?php echo $rs['blogid']?>">删除</a></h2>
    <p><?php echo $rs['content'] ?></p>
    <h2><?php echo $rs['time'] ?></h2>
    <h2><?php echo $rs['classid'] ?></h2>
    <hr/>

    <?php
}


  ?>
