<?php
if(isset($_GET['id'])){
    setcookie('id',NULL);
    setcookie('name',NULL);
    echo "<script>alert('已退出')</script>";
    echo "<script>location='index.php'</script>";
}










?>