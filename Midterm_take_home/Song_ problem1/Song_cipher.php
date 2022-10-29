<?php
$convert = array(
  'A' => 'D',
  'B' => 'E',
  'C' => 'F',
  'D' => 'G',
  'E' => 'H',
  'F' => 'I',
  'G' => 'J',
  'H' => 'K',
  'I' => 'L',
  'J' => 'M',
  'K' => 'N',
  'L' => 'O',
  'M' => 'P',
  'N' => 'Q',
  'O' => 'R',
  'P' => 'S',
  'Q' => 'T',
  'R' => 'U',
  'S' => 'V',
  'T' => 'W',
  'U' => 'X',
  'V' => 'Y',
  'W' => 'Z',
  'X' => 'A',
  'Y' => 'B',
  'Z' => 'C',
);
 ?>

 <html>
   <head>
     <style>
       table {border-collapse: collapse;border: 1px solid black;}
       #x1 {border: 1px solid black; width: 50%;}
       #x2 {border: 1px solid black;}
     </style>
   </head>
   <body>
     <table>
       <tr>
         <td colspan="5">My Name:</td>
         <td colspan="5" id="x1"><?php echo $_POST["name"] ?></td>
       </tr>
       <td><br></td>
       <tr>
         <td colspan="5">GWID:</td>
         <td colspan="5" id="x1"><?php echo $_POST["GWID"] ?></td>
       </tr>
       <td><br></td>
       <tr>
         <td colspan="5">The Ciphertext of the Wordle is:</td>
         <td id="x2"><?php echo $convert[$_POST['w1']]; ?></td>
         <td id="x2"><?php echo $convert[$_POST['w2']]; ?></td>
         <td id="x2"><?php echo $convert[$_POST['w3']]; ?></td>
         <td id="x2"><?php echo $convert[$_POST['w4']]; ?></td>
         <td id="x2"><?php echo $convert[$_POST['w5']]; ?></td>
       </tr>
       <td><br></td>

     </table>
   </body>
 </html>
