<script>
    function changeimg(obj){

        var vaule=obj.value;
        var oImg=document.getElementById("img");

        if(vaule==2){
            oImg.src="img/qt.jpg";
        }
        if(vaule==1){
            oImg.src="img/jz.jpg";
        }
        if(vaule==0){
            oImg.src="img/b.jpg";
        }
    }
</script>


<meta charset="utf-8">
<form action="猜拳.php" method="post">
    你出拳
    <select name="qt" onclick="changeimg(this)">
        <option value=2>拳</option>
        <option value=1>剪刀</option>
        <option value=0>布</option>
    </select>
    <img src="img/cq.jpg" id="img">
    <input type="submit" name="sub" value="提交">

</form>
<?php
if(isset($_POST["sub"])){
    $val=$_POST['qt'];
    $valrand=rand(0,1);
    if($val==$valrand){
        echo "平局";
    }else if(($val==1&&$valrand==2)||($val==0&&$valrand==1)||($val==2&&$valrand==0)){
        echo "电脑获胜";

    }else{
        echo "你获胜";
    }
}








?>

