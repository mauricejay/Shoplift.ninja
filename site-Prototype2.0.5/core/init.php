<?php
    session_start();
    ob_start();
    // Turn off when live
    error_reporting(0);
    require 'database/dbConnect.php';
    require 'functions/general.php';
    require 'functions/users.php';
    require 'functions/post.php';

    if(logged_in() === true){
        $session_user_id = $_SESSION['user_id'];
        // This function call will literally allow you to ge any of the above from the db   
        $user_data = user_data($session_user_id, 'user_id','username','password','first_name','last_name','email');
        // This will output whatever you pass in :D
    }

    $errors = array();
?>