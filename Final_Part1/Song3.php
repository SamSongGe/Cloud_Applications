<?php
/*
Name: Ge (Sam) Song2
Filename: Song3.php
http://cngghub.com/Lab/Final/Song3.php
*/

session_start();
//create views:
if(isset($_SESSION['views3']))
    $_SESSION['views3'] = $_SESSION['views3']+1;
else
    $_SESSION['views3']=1;
//totalviews:
if (isset($_SESSION['totalviews'])) {
  $_SESSION['totalviews'] = $_SESSION['views2'] + $_SESSION['views3'];
}
else {
  $_SESSION['totalviews'] = $_SESSION['views2'];
}

//collect value of input field:
$Lname = $_SESSION['Lname'];
$Age = $_SESSION['Age'];
$Email = $_SESSION['Email'];
$Email_provider = $_SESSION['Email_provider'];
$certificate = $_SESSION['certificate'];


echo "Name: ".$Lname."<br>";
echo "AGE: ".$Age."<br>";
echo "EMAIL: ".$Email.$Email_provider."<br>";
echo "MSIST certificate: ".$certificate."<br>";
echo "Page views: ".$_SESSION['views3']."<br>";
echo "Total number of views of all pages on this site:".$_SESSION['totalviews']."<br>";
echo "Total number of views of previous page 2: ". $_SESSION['views2']."<br>";
echo "SESSION ID is ".session_id()."<br>";


echo "<a href='Song2.php'>previous Page</a>";
?>
