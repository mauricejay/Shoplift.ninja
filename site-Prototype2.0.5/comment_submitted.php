<?php
      include 'core/init.php';
      include 'core/includes/head.php';
      include 'header.php';
      
?>


    <!DOCTYPE html>
    <html lang="">
    <?php include 'core/includes/head.php' ?>

        <!-- <head>

            <meta http-equiv="refresh" content="2;url=http://userpages.umbc.edu/~maurice7/site-Prototype2.0.5/itemDescription.php?id=58&uid=3" />

        </head> -->
        <?php 
        $url = $_SERVER['HTTP_REFERER']; // right back to the referrer page from where you came.
echo '<meta http-equiv="refresh" content="2;URL=' . $url . '">';

?>

        <?php
                    //print_r($_GET['id']);
                    $itemID = ($_GET['id']);
                  ?>

        <?php

            //bring comment over from item description page
            $comment = mysql_real_escape_string($_POST["comment"]);
            $IDNUM = $_POST["itemID"];
            $userID = $_POST["userID"];
            //store this in a variable to execute the query 
            
            $insertComment_query = "INSERT INTO comments(comment, post_id, user_id) VALUES ('$comment', '$IDNUM', '$userID')";
            //execute the query
            $result = mysql_query($insertComment_query);
                
                if (!$result){
                    print("Error: The query could not executed");
                    $error = mysql_error();
                    print "<p> . $error . <p>";
                    echo $IDNUM;
                    echo "yes";
                    exit;
                    }
                
                else{
                    print ('
<div id="loader">
<div class="preloader-wrapper active">
    <div class="spinner-layer spinner-red-only">
      <div class="circle-clipper left">
        <div class="circle"></div>
      </div><div class="gap-patch">
        <div class="circle"></div>
      </div><div class="circle-clipper right">
        <div class="circle"></div>
      </div>
    </div>
  </div>
    </div>');
                    }           

            ?>