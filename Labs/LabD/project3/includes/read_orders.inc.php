<?php
$orders = file('data/orders.txt');
$delimiter2 = ",";

$ordertable = array();
$onum=0;
foreach ($orders as $ord => $data) {
  $orderFields = explode($delimiter2, $data); //array
    $ordertable[$onum] = array(
      'order_id' => $orderFields[0],
      'customer_id' => $orderFields[1],
      'ISBN' => $orderFields[2],
      'title' => $orderFields[3],
      'category' => $orderFields[4]
    );
    $onum++;
  }

// using echo $ordertable[number]['names'] for exact number
//echo $ordertable[0]['order_id']
?>
