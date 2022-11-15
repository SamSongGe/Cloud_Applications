<?php
session_start();
//collect value of input field:
$LastName = $_POST['LastName'];
$FistName = $_POST['FistName'];
$GWID = $_POST['GWID'];


//Display
echo "FistName:".$FistName."<br>";
echo "LastName:".$LastName."<br>";
echo "GWID:".$GWID."<br>";
echo "session started!";

$_SESSION["FistName"] = $LastName;
$_SESSION["LastName"] = $FistName;
$_SESSION["GWID"] = $GWID;

echo "<a href='LastPage.php'>Next Page</a>";
?>
