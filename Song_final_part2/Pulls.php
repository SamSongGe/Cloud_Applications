<?php
/*
Name: Ge (Sam) Song
Filename:Pulls.php
http://cngghub.com/Lab/FinalPart2/form.php
*/

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://v6.exchangerate-api.com/v6/068785bffc0a54c40ec21864/latest/USD");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Execute
$data =curl_exec($ch);
$err = curl_error($ch);

// Closing
curl_close($ch);

if ($err) {
	echo "cURL Error #:" . $err;
}
//decode
$Array = json_decode($data,true);
//var_dump($Array);
//date change
date_default_timezone_set('UTC');

//Database
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
$DATE = date("Y-m-d",$Array["time_last_update_unix"]);
$TIME_UPDATED = date("H:i:s",$Array["time_last_update_unix"]);
$USD = $Array["conversion_rates"]["USD"];
$AUD = $Array["conversion_rates"]["AUD"];
$CAD = $Array["conversion_rates"]["CAD"];
$CHF = $Array["conversion_rates"]["CHF"];
$CNY = $Array["conversion_rates"]["CNY"];
$EUR = $Array["conversion_rates"]["EUR"];
$GBP = $Array["conversion_rates"]["GBP"];
$HKD = $Array["conversion_rates"]["HKD"];

//sql queries:
$sql = "INSERT INTO EXCHANGERATE (DATE,TIME_UPDATED,USD,AUD,CAD,CHF,CNY,EUR,GBP,HKD) VALUES ('$DATE','$TIME_UPDATED','$USD','$AUD','$CAD','$CHF','$CNY','$EUR','$GBP','$HKD')";

if(mysqli_query($connection, $sql)){
            echo "<h2>Data stored successfully! check PHPmyadmin for review</h2>";
        } else {
            echo "ERROR: Sorry $sql. ". mysqli_error($connection);
        }
mysqli_close($connection);

?>
