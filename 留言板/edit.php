
<?php
include "conn.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="select * from blog where blogid='$id'";
    $query=mysqli_query($link,$sql);
    $rs=mysqli_fetch_array($query);
}
if(isset($_GET['sub'])){
    $title=$_GET['title'];
    $con=$_GET['con'];
    $hid=$_GET['hid'];
    $sql="update blog set title='$title',content='$con' where blogid='$hid'";
    $query=mysqli_query($link,$sql);
    if($query){
        echo "<script>alert('编辑成功')</script>";
        echo "<script>location='index.php'</script>";
    }else{
        echo "<script>alert('编辑失败')</script>";
    }

}


?>
<meta charset="utf-8">
<form action="edit.php" method="get">
    <input type="hidden" name="hid" value="<?php echo $rs['blogid']?>">
    标题:<input type="text" name="title" value="<?php echo $rs['title']?>"></br>
       内容:<textarea name="con" rows=10 cols=30> <?php echo $rs['content']?></textarea>
    <input type="submit" name="sub" value="更新">

</form>
