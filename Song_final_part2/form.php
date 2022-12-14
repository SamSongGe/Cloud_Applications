<?php
/*
Name: Ge (Sam) Song
Filename:form.php
http://cngghub.com/Lab/FinalPart2/form.php
*/
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="Capture.php" method="post">
      <fieldset>
        <label>Amount USD:</label>
        <input type="number" name="amount" class="input" placeholder="enter Amount USD here"><br><br>
        <label>Select Currency:</label>
        <select name="Currency">
          <option value="AUD">AUD</option>
          <option value="CAD">CAD</option>
          <option value="CHF">CHF</option>
          <option value="CNY">CNY</option>
          <option value="EUR">EUR</option>
          <option value="GBP">GBP</option>
          <option value="HKD">HKD</option>
        </select><br><br>
        <input type="submit" value="Submit"> <input type="reset" value="Reset">
      </fieldset>
    </form>

    <footer>
      <p>GWID: G41612444</p>
    </footer>
  </body>
</html>
