<?php
$host = "cngghub.com";
$database = "faculty";
$user = "SamSong";
$pass = "cfsongge";
//connection
$connection = mysqli_connect($host, $user, $pass, $database);
// Check connection
if (!$connection) {
  die("Connection failed:" . mysqli_connect_error());
}

//collect value of input field:
$ID = $_REQUEST['FACULTY_ID'];
$LASTNAME = $_REQUEST['FACULTY_LASTNAME'];
$FIRSTNAME = $_REQUEST['FACULTY_FIRSTNAME'];
$OFFICE = $_REQUEST['FACULTY_OFFICE'];

//sql queries:
$sql = "INSERT INTO faculty_info (FACULTY_ID,FACULTY_LASTNAME,FACULTY_FIRSTNAME,FACULTY_OFFICE) VALUES ('$ID','$LASTNAME','$FIRSTNAME','$OFFICE')";

if(mysqli_query($connection, $sql)){
            echo "<h2>Data stored successfully! check PHPmyadmin for review</h2>";
            echo nl2br("\n Faculty ID: $ID\n Faculty LastName: $LASTNAME\n Faculty FirstName: $FIRSTNAME\n Faculty Office: $OFFICE");
        } else{
            echo "ERROR: Sorry $sql. ". mysqli_error($connection);
        }
mysqli_close($connection);
?>
