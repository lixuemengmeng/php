<?php
	

if(isset($_POST["sub"])){
	$file=$_FILES["sfile"];
	$arr=array('txt','exe','jpg');
	$arrfile=explode(".", $file[name]);
	echo $arrfile;
	$num=count($arrfile)-1;
	echo $num;
	for($i=0;$i<count($arr);$i++){
		if($num==$arr[i]){
			echo "文件非法";
			break;
		}
		
	}
	
}



?>
<form action="imgtest.php" method="post">
	<input type="file" name="sfile">
	<input type="submit" name="sub" value="上传">
	<form>
	