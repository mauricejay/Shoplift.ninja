<?php
    include 'core/init.php';

    if (is_numeric($_SESSION['user_id'])) {
        //do nothing
    } else {
        header('Location: signup.php');
    }
    
    $user = $user_data['user_id'];
    $photo = sanitize($_POST[photo]);
    $backgroundPhoto = sanitize($_POST[backgroundPhoto]);

    //function profileUpdate($photo, $backgroundPhoto, $user_id){    
    //    mysql_query("UPDATE users
    //    SET photo = '$photo', background_photo='$backgroundPhoto'
    //    WHERE user_id= '$user_id';");
    //}
    
    
    if($photo != ''){
        photoUpdate($photo, $user);
        echo 'Updated your photo!';
    }
    if($backgroundPhoto != ''){
        backgroundUpdate($backgroundPhoto, $user);
        echo 'Updated your background photo!';
    }
?>