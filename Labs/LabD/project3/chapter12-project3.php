<?php
include 'includes/book-utilities.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Chapter 12</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-orange.min.css">

    <link rel="stylesheet" href="css/styles.css">


    <script   src="https://code.jquery.com/jquery-1.7.2.min.js" ></script>

    <script src="https://code.getmdl.io/1.1.3/material.min.js"></script>
    <script src="js/jquery.sparkline.2.1.2.js"></script>


</head>

<body>

<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
            mdl-layout--fixed-header">

    <?php include 'includes/header.inc.php'; ?>
    <?php include 'includes/left-nav.inc.php'; ?>

    <main class="mdl-layout__content mdl-color--grey-50">
        <section class="page-content">
          <a href="#"></a>
            <div class="mdl-grid">

              <!-- mdl-cell + mdl-card -->
              <div class="mdl-cell mdl-cell--7-col card-lesson mdl-card  mdl-shadow--2dp">
                <div class="mdl-card__title mdl-color--orange">
                  <h2 class="mdl-card__title-text">Customers</h2>
                </div>
                <div class="mdl-card__supporting-text">
                    <table class="mdl-data-table  mdl-shadow--2dp">
                      <thead>
                        <tr>
                          <th class="mdl-data-table__cell--non-numeric">Name</th>
                          <th class="mdl-data-table__cell--non-numeric">University</th>
                          <th class="mdl-data-table__cell--non-numeric">City</th>
                          <th>Sales</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        include "includes/read_customers.inc.php"; //include the file reading file
                        for ($i=0; $i <count($user) ; $i++) {
                          echo "<tr>";
                            echo "<td><a href='chapter12-project3.php?customer_id=".$user[$i]['customer_id']."'>".$user[$i]['fname']." ".$user[$i]['lname']."</a></td>";
                            echo "<td>".$user[$i]['university']."</td>";
                            echo "<td>".$user[$i]['city']."</td>";
                            echo "<td class='linebar'>".$user[$i]['sales']."</td>";
                          echo "</tr>";
                        }
                        ?>
                        <script>
                          $('.linebar').sparkline('html', {type: 'bar', barColor: '#673ab7'} );
                        </script>

                      </tbody>
                    </table>
                </div>
              </div>  <!-- / mdl-cell + mdl-card -->

              <?php
                if(empty($_GET)) {
                  $display="style='display: none;'";
                }else {
                  $display="";
                }
               ?>
            <div class="mdl-grid mdl-cell--5-col" <?php echo $display ?>>



                  <!-- mdl-cell + mdl-card -->
                  <div class="mdl-cell mdl-cell--12-col card-lesson mdl-card  mdl-shadow--2dp">
                    <div class="mdl-card__title mdl-color--deep-purple mdl-color-text--white">
                      <h2 class="mdl-card__title-text">Customer Details</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <?php
                        $ii = array_search($_GET["customer_id"], array_column($user,'customer_id'));
                        echo "<h4>".$user[$ii]['fname']." ".$user[$ii]['lname']."</h4>";
                        echo $user[$ii]['university']."<br>";
                        echo $user[$ii]['address']."<br>";
                        echo $user[$ii]['city']." ";
                        echo $user[$ii]['country'];
                         ?>

                    </div>
                  </div>  <!-- / mdl-cell + mdl-card -->

                  <!-- mdl-cell + mdl-card -->
                  <div class="mdl-cell mdl-cell--12-col card-lesson mdl-card  mdl-shadow--2dp">
                    <div class="mdl-card__title mdl-color--deep-purple mdl-color-text--white">
                      <h2 class="mdl-card__title-text">Order Details</h2>
                    </div>
                    <div class="mdl-card__supporting-text">



                               <table class="mdl-data-table  mdl-shadow--2dp">
                                <?php
                                  include "includes/read_orders.inc.php";
                                  $iii = array_keys(array_column($ordertable,'customer_id'),$_GET["customer_id"]);
                                   if (!empty($iii)) {
                                    echo "
                                  <thead>
                                    <tr>
                                      <th class='mdl-data-table__cell--non-numeric'>Cover</th>
                                      <th class='mdl-data-table__cell--non-numeric'>ISBN</th>
                                      <th class='mdl-data-table__cell--non-numeric'>Title</th>
                                    </tr>
                                  </thead>
                                  <tbody>";
                                    foreach ($iii as $value) {
                                      echo "<tr>";
                                        echo "<th><img src='images/tinysquare/".$ordertable[$value]['ISBN'].".jpg'></th>";
                                        echo "<th>".$ordertable[$value]['ISBN']."</th>";
                                        echo "<th>".$ordertable[$value]['title']."</th>";
                                      echo "</tr>";
                                    }
                                  echo "</tbody>";
                                  } else {
                                    echo "<p>there is no order information for the requested customer! <p>";
                                  }
                                 ?>
                            </table>


                        </div>
                   </div>  <!-- / mdl-cell + mdl-card -->


               </div>


            </div>  <!-- / mdl-grid -->

        </section>
    </main>
</div>    <!-- / mdl-layout -->

</body>
</html>
