<?php
/*
Name: Ge (Sam) Song2
Filename: Song2.php
http://cngghub.com/Lab/Final/Song2.php
*/

session_start();
//create views:
if(isset($_SESSION['views2']))
    $_SESSION['views2'] = $_SESSION['views2']+1;
else
    $_SESSION['views2']=1;
//create totall views:
if (isset($_SESSION['totalviews'])) {
  $_SESSION['totalviews'] = $_SESSION['views2'] + $_SESSION['views3'];
}
else {
  $_SESSION['totalviews'] = $_SESSION['views2'];
}
//collect value of input field:
$Lname = $_POST['LName'];
$Age = $_POST['Age'];
$Email = $_POST['Email'];
$Email_provider = $_POST['email_provider'];
$certificate = $_POST['certificate'];

$_SESSION['Lname'] = $Lname;
$_SESSION['Age'] = $Age;
$_SESSION['Email'] = $Email;
$_SESSION['Email_provider'] = $Email_provider;
$_SESSION['certificate'] = $certificate;

echo "Name: ".$_SESSION['Lname']."<br>";
echo "AGE: ".$_SESSION['Age']."<br>";
echo "EMAIL: ".$_SESSION['Email'].$_SESSION['Email_provider']."<br>";
echo "MSIST certificate: ".$_SESSION['certificate']."<br>";
echo "Page views: ".$_SESSION['views2']."<br>";
echo "Total number of views of all pages on this site: ".$_SESSION['totalviews']."<br>";
echo "SESSION ID is ".session_id()."<br>";


echo "<a href='Song3.php'>Next Page</a>";
?>
