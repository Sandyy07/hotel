<?php

$host='localhost';
$user='root';
$password='';
$dbname='firstone';
$con= mysqli_connect($host,$user,$password,$dbname);
if(!$con){
    die("connection failed".mysqli_connect_error($con));
}
else{
    echo 'connected succesfully';
}

$name=$_POST["name"];
$email=$_POST["email"];



$sql= "INSERT INTO firstonne(name,email) VALUES ('$name','$email')";

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

header("Location:sign-in.php");
mysqli_close($con);
?>
