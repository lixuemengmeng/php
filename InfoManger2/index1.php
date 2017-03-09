<?php
/**
 * Created by PhpStorm.
 * User: whf
 * Date: 17/2/28
 * Time: 下午4:12
 */

include 'sqlLink.php';


//根据标示从$Item中找到符合条件$condition且长度为$len相应数据  效率比正则匹配快
function getStrFromItem($Item,$condition,$len){
    $rearStr = strstr($Item,$condition);
    if (empty($rearStr)) return;
    $rearStr = substr($rearStr,strlen($condition),$len);
    return $rearStr;
}


//默认读取'1901.txt' 可以换成别的值
function readDataFromFile($fileName='1901.txt'){


//    $resFile = fopen("result.txt", "w") or die("Unable to open file!");
    $myfile = fopen($fileName, "r") or die("Unable to open file!");
    $data_id = 1;

    $flag1 = "99999";
    $flag2 = "N0000001N9";

    while (!feof($myfile)){
        $str = fgets($myfile);

        //构造时间
        $date = getStrFromItem($str,$flag1,13);
        $year = substr($date,0,4);
        $month = substr($date,4,2);
        $day = substr($date,6,2);
        $hour = substr($date,8,2);
        $min = '00';
        $sec = '00';

        $date = $year.'-'.$month.'-'.$day.' '.$hour.':'.$min.':'.$sec;

        //得到温度数据
        $data_tem = getStrFromItem($str,$flag2,6);;
        $item = $data_id.','.'"'.$date.'"' .','.$data_tem;
        $data_id++;

//        //写文件
//        fwrite($resFile,($item."\n"));

        //写数据库
        writeTable('sensor_data',$item);
        echo $date." ".$data_tem;
    }

//    fclose($resFile);
    fclose($myfile);
}

readDataFromFile('1902.txt');

?>