<?php
$conn = mysqli_connect("localhost","root","","itams");

date_default_timezone_set('Asia/Manila');

if (mysqli_connect_errno()) 
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
    
  exit();

}
?>