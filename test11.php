<form action="sixin.php?id=<?php echo $_GET['id']?>" method="post">
    <input type="hidden" name="reid" value="<?php if(isset($_GET['id'])){
        echo $_GET['id'];
    }?>">
    <textarea rows="10" cols="30" name="con"></textarea><br/>
    <input type="submit" name="sub" value="发送">
</form>

<?php
include "conn.php";
if(isset($_POST['sub'])){
    $con= $_POST['con'];
    $sendid = $_COOKIE['id'];
    if(!$sendid){
        header('locattion:login.php');
    }
    $reid = $_POST['reid'];
    if($reid==$sendid){
        //echo "<script>alert('不能对自己发送私信')<script>";
        echo "<script>location='index.php'</script>";
    }
    $sql = "insert into message(mid,mcon,mtime,sendid,reid) values(null,'$con',now(),'$sendid','$reid')";
    $query = mysqli_query($link,$sql);
    $sql1 = "select * from user,message where user.userid=message.reid and message.sendid='$sendid'";
    $query1 = mysqli_query($link,$sql1);
    while($result = mysqli_fetch_array($query1)){


        ?>

        <h3>发信人：<?php echo $_COOKIE['name']?></h3>
        <p><?php echo $result['mcon']?></p>
        <h5>收信人：<?php echo $result['name']?></h5>
        <li><?php echo $result['mtime']?></li>
        <?php
    }
}
?>