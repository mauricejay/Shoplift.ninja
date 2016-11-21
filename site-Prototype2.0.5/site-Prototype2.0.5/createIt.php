<?php
include 'core/init.php';
include 'core/includes/head.php';
include './header.php';
	#Bring stuff over from my postcreate page
    $title = htmlspecialchars(sanitize($_POST['postTitle']));
    $description = htmlspecialchars(sanitize($_POST['postDescr']));
    $imgURL = htmlspecialchars(sanitize($_POST['photoURL']));
    $postType = htmlspecialchars(sanitize($_POST['postType']));
    $price = htmlspecialchars(sanitize($_POST['price']));
    
    
    //echo $postType;
    $userid = $_SESSION['user_id'];
    
    #store this in a var to execute query 
    $constructed_query = "INSERT INTO posts(title, description, image_reference_url, user_id, post_type, price) VALUES('$title','$description','$imgURL', '$userid', '$postType' , '$price');";
    //print("CHECK PROGRAM IS WORKING MESSAGE: The query is: $constructed_query </br>");
    
    #Execute query
    if(isset($userid)){
        $result = mysql_query($constructed_query);
    }
    else{
        print("you must be logged in to post");
        exit;
    }
    
    if(! $result){
        print("Error - query could not be executed");
        $error = mysql_error();
        print "<p> . $error . </p>";
        exit;
    }
    else{
        print('
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

    $postType = (string)$postType;

    switch ($postType) {
        case 'p':
            # code...
            echo "<script>setTimeout(\"location.href = 'phoneItems.php';\",500);</script>";
            break;
        case 'b':
            # code...
            echo "<script>setTimeout(\"location.href = 'bookItems.php';\",500);</script>";
            break;
        case 'l':
            # code...
            echo "<script>setTimeout(\"location.href = 'laptopItems.php';\",500);</script>";
            break;
        default:
            echo "<script>setTimeout(\"location.href = 'index.php';\",1500);</script>";
            break;
}
?>
