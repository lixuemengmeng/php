<?php
/**
 * Created by PhpStorm.
 * User: whf
 * Date: 17/2/8
 * Time: 下午5:46
 */

$conn = mysqli_connect('127.0.0.1','root','','Manger');
mysqli_set_charset($conn,'utf8');
$datatimeend=$_POST['datatimeend'];
$datatimestart=$_POST['datatimestart'];
$order=$_POST['order'];
$tableName=sensor_data;
function writeTable($tableName,$datatimeend,$datatimestart,$order)
{
    global $conn;

    $sql = "select * from $tableName where data_time between '".$datatimestart."' and '".$datatimeend."' order by data_temp " .$order."";
    
    $result=mysqli_query($conn,$sql);

    while( $row = mysqli_fetch_row($result)) {

        $res[]= $row[2];

    }
    echo json_encode($res);
    mysqli_close($conn);
    return;

}
    writeTable($tableName,$datatimeend,$datatimestart,$order);


?>

