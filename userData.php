<?php

$host='localhost';
$user='root';
$password='';
$dbname='hotel_reviews';
$con= mysqli_connect($host,$user,$password,$dbname);
if(!$con){
    die("connection failed".mysqli_connect_error($con));
}
else{
    echo 'connected succesfully';
}

$name=$_POST["name"];
$review=$_POST["review"];



$sql= "INSERT INTO reviewdataa(name,review) VALUES ('$name','$review')";

$run=mysqli_query($con,$sql);
if($run){
  echo "Form is submitted successfully";
   echo "<br>";
}
// if(mysqli_query($con,$sql)){
//     echo "Table created ";
// }
// else{
//     echo "Table creation failed".mysqli_error($con);
// }


mysqli_close($con);
?>
