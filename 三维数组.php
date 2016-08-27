<style>
    td{
        width: 200px;
    }
</style>
<?php
$info=array(
    "user"=>array(
        array(1,'zhangsan',10,'nan'),
        array(2,'lisi',12,'nv'),
        array(3,'wangwu',13,'nan'),

    ),
    'score'=>array(
        array(1,100,90,80),
        array(2,20,43,60),
        array(3,54,67,21),

    ),
    'connet'=>array(
        array(1,'110','aaa@bb.com'),
        array(2,'220','ccc@dd.com'),
        array(3,'300','eee@ff.com'),
    ),
);
foreach($info as $tablename=>$table){
    echo "<table border='1' >";
    echo "<caption><h1>". $tablename."</h1></caption>";
    foreach($table as $v){
        echo "<tr>";
    foreach($v as $value){
        echo "<td>";
        echo $value;
        echo "</td>";
    }
        echo "</tr>";
    }

    echo "</table>";
}









?>