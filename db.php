<?php
$host='localhost';
$user='root';
$password='';
$dbname='hotel_reviews';
$con= mysqli_connect($host,$user,$password,$dbname);
if(!$con){
    die("connection failed".mysqli_connect_error($con));
}
/*else{
    echo 'connected succesfully';
}*/
?>
