<?php
$host ="localhost";
$user = "root";
$password = "";
$conn = mysqli_connect('$host','$user','$password');
if($conn)
{
  eho "connection created successfully";
}
else
{
  die( "unable to connect to database");
}
?>
