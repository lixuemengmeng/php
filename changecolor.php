<?php
if(isset($_POST["sub"])){
	$rows=$_POST["rows"];
	$cols=$_POST["cols"];
	echo "<table border='1px' width='100px'>";
	$color="";
	for($i=1;$i<=$rows;$i++){
		if($i%2==0){
			$color="red";
		}else{
			$color="green";
		}
		echo "<tr bgColor=".$color." onmouseover=over(this)  onmouseout=out(this)>";
		for($j=1;$j<=$cols;$j++){
			echo "<td>".$i."</td>";
		}
		echo  "</tr>";
	}
	echo "</table>";
}

?>
<form action="changecolor.php" method="post">
	行:<input type="text" name="rows"></input></br>
	列:<input type="text" name="cols"></input></br>
	<input type="submit" name="sub" value="打印"></input>
</form>
<script>
	var basecolor="";
	function over(obj){
		basecolor=obj.bgColor;
		obj.bgColor="blue";
	}
	function out(obj){
		obj.bgColor=basecolor;
		
	}
</script>