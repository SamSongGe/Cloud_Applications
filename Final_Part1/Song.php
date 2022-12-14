<?php
/*
Name: Ge (Sam) Song2
Filename: Song.php
http://cngghub.com/Lab/Final/Song.php
*/

$lastName = "Song";
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>A form for <?php echo $lastName; ?>(G41612444)</h3>
    <form class="" action="Song2.php" method="post">
      <fieldset>
        <label>First and Last Name:</label>
        <input type="text" name="FName" class="input" placeholder="enter your First Name here">
        <input type="text" name="LName" class="input" placeholder="enter your Last Name here"><br><br>
        <label>AGE:</label><br>
        <input type="checkbox" name="Age" value="15-25"> <label for="vehicle1"> 15-25 </label><br>
        <input type="checkbox" name="Age" value="26-35"> <label for="vehicle1"> 26-35 </label><br>
        <input type="checkbox" name="Age" value="36-45"> <label for="vehicle1"> 36-45 </label><br>
        <input type="checkbox" name="Age" value="46-55"> <label for="vehicle1"> 46-55 </label><br><br>
        <label>EMAIL:</label>
        <input type="text" name="Email" class="input" placeholder="enter your email before @ here">
        <select name="email_provider">
          <option value="@gwu.edu">@gwu.edu</option>
          <option value="@gmail.com">@gmail.com</option>
          <option value="@hotmail.com">@hotmail.com</option>
          <option value="@yahoo.com">@yahoo.com</option>
        </select><br><br>
        <label>MSIST certificate:</label>
        <select name="certificate">
          <option value="Management of Technology">Management of Technology</option>
          <option value="Artificial Intelligence">Artificial Intelligence</option>
          <option value="Cloud Applications">Cloud Applications</option>
        </select>
        <br><br>
        <input type="submit" value="Submit"> <input type="reset" value="Reset">
      </fieldset>
    </form>
  </body>
</html>
