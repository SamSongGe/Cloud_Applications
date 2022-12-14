<?php
/*
Name: Ge (Sam) Song
Filename:Capture.php
*/


session_start();

$host = "cngghub.com";
$database = "FINALEXAM";
$user = "SamSong";
$pass = "cfsongge";
//connection
$connection = mysqli_connect($host, $user, $pass, $database);
// Check connection
if (!$connection) {
  die("Connection failed:" . mysqli_connect_error());
}

//collect value of input field:
$Amount = $_POST['amount'];
$Currency = $_POST['Currency'];

//sql queries:
$sql = "SELECT * FROM EXCHANGERATE";
//result:
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);
$output = $Amount * $row[$Currency];

//create views:
if(isset($_SESSION['views']))
    $_SESSION['views'] = $_SESSION['views']+1;
else
    $_SESSION['views']=1;

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    echo "USD amount: " .$Amount."<br><br>";
    echo "select currency: ".$Currency."<br><br>";
    echo "output: ".$output." ".$Currency."<br><br><br>";
    echo "report:<br>";
    echo "date: ".$row['DATE']."<br>";
    echo "time_updated: ".$row['TIME_UPDATED']."<br>";
    echo "conversion rates to CAD: ".$row['CAD']."<br>";
    echo "conversion rates to EUR: ".$row['EUR']."<br>";
    echo "conversion rates to GBP: ".$row['GBP']."<br>";
    echo "<div style='position: absolute; top: 0; right: 0; width: 300px; text-align:right;'>Pages Viewed by Ge (Sam) Song:".$_SESSION['views']."</div>";
    ?>
  </body>
</html>
