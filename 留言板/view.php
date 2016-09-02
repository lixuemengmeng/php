<?php
include "conn.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="update blog set hits=hits+1 where blogid='$id'";
    $query=mysqli_query($link,$sql);
    if($query){
        $sql="select * from blog where blogid='$id'";
        $query=mysqli_query($link,$sql);
        $rs=mysqli_fetch_array($query);
    }
}


?>

    <h2><?php echo $rs['title']?></h2>
    <p ><?php echo $rs['content']?></p>
    <span>访问量:<?php echo $rs['hits']?></span>
    <li><?php echo $rs['time']?></li>
    <hr/>
<?php
include 'conn.php';
if(isset($_GET['sub'])){
    $con=$_GET['con'];
    $bid=$_GET['hid'];
    $uid=$_COOKIE['id'];
    $sql="insert into pl(plid,puid,pcon,ptime,pbid) values(null,'$uid','$con',now(),'$bid')";
    $query=mysqli_query($link,$sql);

    if($query){
        echo "<script>alert('评论成功')</script>";
        echo "<script>location='view.php?id=".$bid. "'</script>";
    }else{
        echo "<script>alert('评论失败')</script>";
    }
}


?>

<form action="view.php" method="get">
    <input type="hidden" name="hid" value="<?php echo $rs['blogid']?>">
 <textarea name="con"></textarea>
    <input type="submit" name="sub" value="评论">
<?php
include "conn.php";
$sql="select *from pl,user where pl.puid=user.userid and pbid='$id'";
$query=mysqli_query($link,$sql);

while($rs=mysqli_fetch_array($query)){


?>
</form>
    <p><?php echo $rs['pcon'] ?></p>
    <li><?php echo $rs['ptime'] ?></li>
 <span>评论者:<?php echo $rs['name'] ?></span>
     <?php
}




?>
