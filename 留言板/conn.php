<?php
//链接数据库m
$link=@mysqli_connect('localhost','root','') or die('链接数据库失败');
//选择数据库名
@mysqli_select_db($link,'blogl') or die('选择数据库名失败');
//设置传输字符编码
mysqli_set_charset($link,'utf8');


?>