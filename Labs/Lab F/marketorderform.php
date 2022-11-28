<?php
/*
Your Name: Ge Song
GWID: G41612444
Date: 11/23/2022
FileName: marketorderform.php
*/
$GWID = 'G41612444';
$Name = 'Ge Song';
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <title>Market Order</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/misc.js"></script>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/styles.css" />
</head>
<body>
<?php include 'header.inc.php'; ?>

<main>
<form class="form" id="mainForm" action="grocerylist.php" method="POST">
   <fieldset class="form__panel">
      <legend class="form__heading">Create My Shopping List</legend>

       <p class="form__row">
           <label>My Supermarket</label><br/>
           <select name="Supermarket">
             <option value='no selection' hidden >Please select one</option>
           <?php
           $Supermarkets = array('Whole Foods','Giant','Wegmans');
           foreach ($Supermarkets as $value) {
             echo "<option value='".$value."'>".$value."</option>";
           }
           ?>
           </select>
       </p>

       <p class="form__row">
           <label>Items</label><br/>
           <?php
           $Items = array("Spinach", "Bread", "Butter", "Oranges", "Cucumbers", "Bananas", "Green Peppers", "Apples");
           foreach ($Items as $value) {
             echo "<input type='checkbox' name='itmes[]' value='".$value."'>
                    <label>".$value."</label><br> ";
           }

           echo "<input type='text' name='GWID' value='".$GWID."' hidden>";
           ?>
       </p>

       <div class="form__box">
          <input type="submit" class="form__btn"> <input type="reset" value="Clear Form" class="form__btn">
       </div>
   </fieldset>
</form>
</main>

<footer style="text-align: center;">
  <?php
  echo "<p>Name:".$Name."<br>
  GWID:".$GWID."</p>";
   ?>
</footer>

</body>
</html>
