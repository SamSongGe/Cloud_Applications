<?php
/*
Your Name: Ge Song
GWID: G41612444
Date: 11/23/2022
FileName: grocerylist.php
*/
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <title>Grocery List</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/misc.js"></script>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/styles.css" />

<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 60%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>

</head>
<body>
<?php include 'header.inc.php'; ?>

<main>
    <section class="results">

    <table id="customers">
    <tr>
      <th>Grocery list:</th>
    </tr>
    <?php
     /*
     $Supermarkets = array('Whole Foods','Giant','Wegmans');
     $Items = array("Spinach", "Bread", "Butter", "Oranges", "Cucumbers", "Bananas", "Green Peppers", "Apples");
     if (substr($_POST['GWID'], -1)%2 == 0 && empty($_POST['Supermarket'])) {
       echo " <caption class='results__caption'>My grocery list for ".$Supermarkets[1]." </caption>";
       for ($i=1; $i < count($Items)-2 ; $i+=2) {
         echo "<tr>";
         echo "<td>".$Items[$i]."</td>";
         echo "</tr>";
       }
     } elseif (substr($_POST['GWID'], -1)%2 != 0 && empty($_POST['Supermarket'])) {
       echo " <caption class='results__caption'>My grocery list for ".$Supermarkets[2]." </caption>";
       for ($i=0; $i < count($Items)-2 ; $i+=2) {
         echo "<tr>";
         echo "<td>".$Items[$i]."</td>";
         echo "</tr>";
       }
     } elseif (!empty($_POST['Supermarket'])) {
           echo " <caption class='results__caption'>My grocery list for ".$_POST['Supermarket']." </caption>";
           $itemname = $_POST['itmes'];
           foreach ($itemname as $value) {
             echo "<tr>";
             echo "<td>".$value."</td>";
             echo "</tr>";
           }
         }
     */
    ?>

    <?php
    $Supermarkets = array('Whole Foods','Giant','Wegmans');
    $Items = array("Spinach", "Bread", "Butter", "Oranges", "Cucumbers", "Bananas", "Green Peppers", "Apples");

    if (substr($_POST['GWID'], -1)%2 == 0 && empty($_POST['itmes'])) {
      echo " <caption class='results__caption'>My grocery list for ".$Supermarkets[1]." </caption>";
      for ($i=1; $i < count($Items)-2 ; $i+=2) {
        echo "<tr>";
        echo "<td>".$Items[$i]."</td>";
        echo "</tr>";
      }
    } elseif (substr($_POST['GWID'], -1)%2 != 0 && empty($_POST['itmes'])) {
      echo " <caption class='results__caption'>My grocery list for ".$Supermarkets[2]." </caption>";
      for ($i=0; $i < count($Items)-2 ; $i+=2) {
        echo "<tr>";
        echo "<td>".$Items[$i]."</td>";
        echo "</tr>";
      }
    }elseif (isset($_POST['Supermarket'])) {
      echo " <caption class='results__caption'>My grocery list for ".$_POST['Supermarket']." </caption>";

    $itemname = $_POST['itmes'];
    foreach ($itemname as $value) {
      echo "<tr>";
      echo "<td>".$value."</td>";
      echo "</tr>";
    }
    }
     ?>
    </table>

    </section>

</main>

<footer style="text-align: center;">
  <?php
  echo "<p>Name: Ge Song <br>
  GWID:".$_POST['GWID']."</p>";
   ?>
</footer>

</body>
</html>
