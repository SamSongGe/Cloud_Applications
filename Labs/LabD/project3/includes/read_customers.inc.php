<?php
$customers = file('data/customers.txt');
$delimiter = ";";

$user = array();
$i=0;
foreach ($customers as $cus => $data) {
  $customerFields = explode($delimiter, $data); //array
    $user[$i] = array(
      'customer_id' => $customerFields[0],
      'fname' => $customerFields[1],
      'lname' => $customerFields[2],
      'email' => $customerFields[3],
      'university' => $customerFields[4],
      'address' => $customerFields[5],
      'city' => $customerFields[6],
      'state' => $customerFields[7],
      'country' => $customerFields[8],
      'zip' => $customerFields[9],
      'phone' => $customerFields[10],
      'sales' => $customerFields[11]
    );
    $i++;
  }

// using echo $user[number]['names'] for exact number
//echo $user[0]['fname']
//echo "......".$user[0]['sales']."......";
?>
