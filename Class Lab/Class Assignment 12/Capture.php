<?php
session_start();

$host = "72.167.68.223";
$database = "USER";
$user = "SamSong";
$pass = "cfsongge";
//connection
$connection = mysqli_connect($host, $user, $pass, $database);
// Check connection
if (!$connection) {
  die("Connection failed:" . mysqli_connect_error());
}

//collect value of input field:
$Username = $_POST['Username'];
$Password = $_POST['Password'];


//sql queries:
$sql = "SELECT * FROM USER_INFO WHERE USERNAME = '$Username' AND PASSWORD = '$Password'";
//result
$result = mysqli_query($connection, $sql);
//Display
if(mysqli_num_rows($result) === 1){
  $row = mysqli_fetch_assoc($result);
  if($row['USERNAME'] === $Username && $row['PASSWORD'] === $Password){
    echo $Username." has logged in! <br><br>";
    echo "Session started <br>";
    echo "session_ID is:".session_id();
    $_SEESSION['Username'] = $row['USERNAME'];
    $_SEESSION['Password'] = $row['PASSWORD'];
    exit();
  } else {
      echo "Username or password incorrect! <br>";
      echo "Click here to return to login page.";
      echo "<a href='Form.html'>login page</a>";
      exit();
  }
}
else {
  echo "Username or password incorrect! <br>";
  echo "Click here to return to login page.";
  echo "<a href='Form.html'>login page</a>";
  exit();
}

?>
