<?php
session_start();

$LastName = $_SESSION["FistName"];
$FistName = $_SESSION["LastName"];
$GWID = $_SESSION["GWID"];

echo "FistName:".$FistName."<br>";
echo "LastName:".$LastName."<br>";
echo "GWID:".$GWID."<br>";
echo "session Continue! <br>";
echo "session_ID is:".session_id();

?>
