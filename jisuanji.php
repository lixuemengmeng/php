<?php
if(isset($_GET["sub"])){
	$num1=$_GET["num1"];
	$num2=$_GET["num2"];
	$ysf=$_GET["ysf"];
	$num="";
	if(is_numeric($num1)&&is_numeric($num2)){
		if($ysf=="/"&&$num2==0){
			break;
		}else{
		switch($ysf){
	case "+":
		$num=$num1+$num2;
		break;
	case "-":
		$num=$num1-$num2;
		break;
	case "*":
		$num=$num1*$num2;
		break;
	case "/":
		$num=$num1/$num2;
		break;
	case "%":
		$num=$num1%$num2;
		break;
		
	}	
		}
		
	}else{
		$num="请输入数字";
	}
	
	
}
?>
<form action="jisuanji.php" method="get" accept-charset="utf-8">
	
<table border="1px" align="center" >
	<section align="center">计算器</section>
	<tr>
		<td><input type="text" name="num1" value=<?php echo $_GET["num1"]?$_GET["num1"]:''?>></td>
		<td>
			<select name="ysf">
				<option value="+" <?php echo ($_GET["ysf"]=="+")?'selected':""?>>+</option>
				<option value="-" <?php echo ($_GET["ysf"]=="-")?'selected':""?>>-</option>
				<option value="*" <?php echo ($_GET["ysf"]=="*")?'selected':""?>>×</option>
				<option value="/" <?php echo ($_GET["ysf"]=="/")?'selected':""?>>/</option>
				<option value="%" <?php echo ($_GET["ysf"]=="%")?'selected':""?>>%</option>
			</select>
		</td>
		<td><input type="text" name="num2"  value=<?php echo $_GET["num2"]?$_GET["num2"]:''?>></td>
		<td><input type="submit" name="sub" value="计算"></td>
	</tr>
	<?php
if(isset($_GET["sub"])){	
 echo "<tr><td colspan='4'>".$num."</td></tr>";	
}
?>

</table>
</form>
