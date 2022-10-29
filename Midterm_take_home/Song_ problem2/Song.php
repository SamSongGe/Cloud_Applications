<html>
  <head>
    <style>
      table,th,tr,td {border-collapse: collapse;border: 1px solid black;}
      th {background-color: orange;}
    </style>
  </head>

<?php
$letters = array(
  'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y',
  'Z');


$number = substr($_POST["GWID"],-1);

if (empty($_POST["GWID"])){
  $num = intval($_POST["shift"]);
    }
elseif($number % 2 == 0){
      $num = 6;
  }
elseif($number % 2 != 0){
      $num = 5;
  }

$newarray = array();
$b = 0;
for ($i=0; $i <= 25 ; $i++) {
  $n = $i+$num;
  if ($n > 25) {
    $newarray[$i] = $letters[$b];
    $b++;
  }else {
    $newarray[$i] = $letters[$n];
  }
}


echo "My Name:".$_POST["name"]."<br>";
echo "GWID:".$_POST["GWID"]."<br>";

echo "<table>";
echo "<th>Plaintext</th>";
echo "<th>Ciphertext</th>";
for ($i=0; $i <25 ; $i++) {
  echo "<tr>";
    echo "<td>".$letters[$i]."</td>";
    echo "<td>".$newarray[$i]."</td>";
  echo "</tr>";
}
echo "</table>";
 ?>

 </html>
