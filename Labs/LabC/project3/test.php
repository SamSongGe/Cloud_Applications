<?php
  function outputPostRow($user,$thumb,$title,$userId,$userName,$date,$excerpt,$postId){
    echo
      "<div class='row'>
          <div class='col-md-4'>
            <a href='post.php?id=".$user."' class=''><img src='images/".$thumb."'alt='Ekklisia Agii Isidori church' class='img-responsive'/></a>
          </div>
          <div class='col-md-8'>
            <h2>".$title."</h2>
            <div class='details'>
                Posted by <a href='user.php?id=".$userId."'>".$userName."</a>
              <span class='pull-right'>".$date."</span>
              <p class='ratings'> </p>
            </div>
            <p class='excerpt'>
            ".$excerpt."
            </p>
            <p class='pull-left'><a href='post.php?id=".$postId."' class='btn btn-primary btn-sm'>Read more</a></p>
          </div>
       </div>
       <hr/>";
  }

  for($i=1;$i<=2;$i++)
  {
    $userName = "userId".$i;
    $thumbName = "thumb".$i;
    $titleName = "title".$i;
    $userIdName = "userId".$i;
    $userNameName = "userName".$i;
    $dateName = "date".$i;
    $excerptName = "excerpt".$i;
    $postIdName = "postId".$i;

    outputOrderRow($$userName, $$thumbName, $$titleName,$$userIdName,$$userNameName,$$dateName,$$excerptName,$$postIdName); //// q1 why using sing$ not working? the $i?
  }




  function generateLink($type,$url,$thumb,$title,$userid,$user,$post){
    if ($type == 1) {
      generateLink1($url,$thumb,$title);
    }
    elseif($type == 0){
      generateLink2($userid,$user);
    }
    else{
      generateLink3($post);
    }
  }
?>
