<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://www.mercadobitcoin.net/api/BTC/trades/1500881369/1501892200/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Execute
$data =curl_exec($ch);

$err = curl_error($ch);
// Closing
curl_close($ch);

if ($err) {
	echo "cURL Error #:" . $err;
}

$myArray = json_decode($data,true);

$price =	$myArray [0] ["price"];
$amount = $myArray  [3]["amount"];
$type = $myArray [11] ["type"];
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <style type="text/css">
   		table,td,th {border: 1px solid black;}
   		table {border-collapse: collapse;}
   	</style>
   </head>
   <body>
     <table>
       <tr>
         <th>price</th>
         <th>amount</th>
         <th>type</th>
       </tr>
       <tr>
         <td><?php echo $price; ?></td>
         <td><?php echo $amount; ?></td>
         <td><?php echo $type; ?></td>
       </tr>

     </table>
   </body>
 </html>
