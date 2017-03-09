<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
   <title>demon</title>
   <link rel="stylesheet" type="text/css" href="demon.css">
</head>

<body >
<?php include 'sqlLink2.php';?>
<div class="div-center" >
<div class="div-select start">
<span>开始时间：</span>
	<span>年份</span>
<select  name="start-year" id="start-year" >
<!--  <option value ="1901">1901</option>-->
  <option value ="1902">1902</option>
</select>
<span>月份</span>
<select  name="start-month" id="start-month">
<?php for($x=1; $x<=12; $x++) {
	echo '<option value="'.$x.'">'.$x.'</option>';
} ?> 
</select>
<span>日</span>
<select  name="start-day" id="start-day">
   <?php for($x=1; $x<=31; $x++) {
	echo '<option value="'.$x.'">'.$x.'</option>';
} ?>
</select>
    <span>时</span>
    <select  name="start-hour" id="start-hour">
        <?php for($x=0; $x<=24; $x++) {
            echo '<option value="'.$x.'">'.$x.'</option>';
        } ?>
</select>
</div>
<div class="div-select end">
<span>结束时间：</span>
	<span>年份</span>
<select  name="end-year" id="end-year">
<!--<option value ="1901">1901</option>-->
  <option value ="1902">1902</option>
</select>
<span>月份</span>
<select  name="end-month" id="end-month">
 <?php for($x=1; $x<=12; $x++) {
	echo '<option value="'.$x.'">'.$x.'</option>';
} ?> 
</select>
<span>日</span>
<select  name="end-day" id="end-day">
  <?php for($x=1; $x<=31; $x++) {
	echo '<option value="'.$x.'">'.$x.'</option>';
} ?> 
</select>
    <span>时</span>
    <select  name="end-hour" id="end-hour">
        <?php for($x=0; $x<=24; $x++) {
            echo '<option value="'.$x.'">'.$x.'</option>';
        } ?>
    </select>
    <p >
        <span>升序还是逆序</span>
        <select  name="order" id="order">
            <option value ="ASC">ASC</option>
            <option value ="DESC">DESC</option>

        </select>
    </p>

</div>

<p class="btn"><a id="sub-btn">提交</a></p>
<p class="order-p"><span>此区间温度为:</span><span id="result"></span></p>
</div>


<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="demon.js"></script>

</body>

</html>
