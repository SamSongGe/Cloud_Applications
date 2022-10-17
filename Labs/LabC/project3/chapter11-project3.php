<?php include('travel-data.inc.php')?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title></title>

      <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.css" />

</head>

<body>
<?php include('header.inc.php') ?>


    <!-- Page Content -->
    <main class="container">
        <div class="row">
            <?php include('country.inc.php') ?>
                <!-- end popular countries panel -->
            </aside>


            <div class="col-md-10">

                <div class="jumbotron" id="postJumbo">
                    <h1>Posts</h1>
                    <p>.</p>
                    <p><a class="btn btn-warning btn-lg">Learn more</a></p>
                </div>

                 <!-- start post summaries -->
                 <div class="postlist">
<!----------------------------------------------------------------------------------------------------------------------------------------->
                  <?php
                  function generateLink1($url,$thumb,$title){
                    return "<a href='post.php?id=".$url."' class=''><img src='images/".$thumb."'alt='".$title."' class='img-responsive'/></a>";
                  }
                  function generateLink2($userid,$user){
                    return "<a href='user.php?id=".$userid."'>".$user."</a>";
                  }
                  function generateLink3($post){
                    return "<a href='post.php?id=".$post."' class='btn btn-primary btn-sm'>Read more</a>";
                  }

                  function generateLink($type,$a,$b,$c,$d,$e,$f){
                    if ($type == 0) {
                      return generateLink1($a,$b,$c);
                    }
                    elseif($type == 1){
                      return generateLink2($d,$e);
                    }
                    elseif($type == 2){
                      return generateLink3($f);
                    }
                  }

                  function rating($stars,$reviews){
                    $full = 5;
                    return "<p class='ratings'> ".str_repeat("<img src='images/star-gold.svg' width='16'/>", $stars).str_repeat("<img src='images/star-white.svg' width='16'/>", $full-$stars)."".$reviews."</p>";
                  }

                  function outputPostRow($post,$thumb,$title,$userid,$user,$date,$excerpt,$stars,$reviews){
                    echo
                      "<div class='row'>
                          <div class='col-md-4'>
                          ".generateLink(0,$post,$thumb,$title,$userid,$user,$post)."
                          </div>
                          <div class='col-md-8'>
                            <h2>".$title."</h2>
                            <div class='details'>
                                Posted by ".generateLink(1,$post,$thumb,$title,$userid,$user,$post)."
                              <span class='pull-right'>".$date."</span>
                              ".rating($stars,$reviews)."
                            </div>
                            <p class='excerpt'>
                            ".$excerpt."
                            </p>
                            <p class='pull-left'>".generateLink(2,$post,$thumb,$title,$userid,$user,$post)."
                          </div>
                       </div>
                       <hr/>";
                  }
                  ?>
<!----------------------------------------------------------------------------------------------------------------------------------------->
                   <!-- replace each of these rows with a function call -->
                   <?php
                   for($i=1;$i<=3;$i++)
                   {
                     $postidName = "postId".$i;
                     $thumbName = "thumb".$i;
                     $titleName = "title".$i;
                     $userIdName = "userId".$i;
                     $userName = "userName".$i;
                     $dateName = "date".$i;
                     $excerptName = "excerpt".$i;
                     $starsnum = "reviewsRating".$i;
                     $reviewsnum = "reviewsNum".$i;

                     outputPostRow($$postidName, $$thumbName, $$titleName,$$userIdName,$$userName,$$dateName,$$excerptName,$$starsnum,$$reviewsnum); //// q1 why using sing$ not working? the $i?
                   }
                   ?>
<!----------------------------------------------------------------------------------------------------------------------------------------->
                 </div>   <!-- end postlist -->

            </div>  <!-- end col-md-10 -->
        </div>   <!-- end row -->
    </main>


        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>

</html>
