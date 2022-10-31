<?php



$hostname="cngghub.com";
$username="SamSong";
$password="cfsongge";
$dbname="Class Assignment 8 test database";

$connect = mysqli_connect($hostname,$username,$password,$dbname);

if (mysqli_connect_errno()){
  echo "Failed to connect" . mysqli_connect_error();
}

if (mysqli_ping($connect)){
  echo "the connection to your database '".$dbname."' is working!";
  echo "</br>User: ". $username;
}
else {
  echo "Error:" . mysqli_error($connect);
}

mysqli_close($connect);
 ?>
