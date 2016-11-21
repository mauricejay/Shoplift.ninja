<?php
    include 'core/init.php';
    $user = $user_data['user_id'];

    $currentOffer = $_POST['currentOffer'];
    $postID = $_POST['postID'];
    
    
    //$updateOffer = "SELECT * FROM posts where user_id= '$user' AND is_sold = 0";
    $currentStats = mysql_query("SELECT * FROM posts WHERE post_id = '$postID';");
    while ($row = mysql_fetch_array($currentStats)) {
        $checkHighest = $row['offer'];
    }

    if($currentOffer > $checkHighest){
        //echo 'init ' . $currentOffer . ' for post id ' . $postID;
        mysql_query("UPDATE posts
        SET offer='$currentOffer'
        WHERE post_id = '$postID';");
    }else
        //echo "<script>Materialize.toast('Please Log In First', 4000, 'taken')</script>";
        echo (int)$currentOffer;



?>