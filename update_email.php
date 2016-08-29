<?php
include "conn.php";
$email=$_GET['email'];
$userid=$_GET['userid'];
$aql="update list set email='$email' where userid=$userid";
$query=mysqli_query($link,$aql);
if(mysqli_affected_rows()>0){

    echo 'Success';
}
else{
    echo $email;

}







?>