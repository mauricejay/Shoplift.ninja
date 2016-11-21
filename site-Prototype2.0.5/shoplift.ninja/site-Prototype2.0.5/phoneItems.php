<?php include 'core/init.php'; ?>
<!DOCTYPE html>
<html lang="">

<head>
    <?php include 'core/includes/head.php'; ?>
    <title> shoplift.ninja/items </title>
</head>

<body>
    <link rel = "stylesheet" href = "itemsAnimations.css">
    <?php include 'header.php';
    $constructed_query = "SELECT title, post_id, user_id, description, image_reference_url, is_sold, post_type, price FROM posts;";
    $result = mysql_query($constructed_query);

    ?>
    <div class="row white accent-3 navbar">
        <div class="col s12">
            <ul>
                <li class="col s4 center"><a href="bookItems.php"><h5>Books</h5></a></li>
                <li class="col s4 center"><a class="active" href="phoneItems.php"><h5>Phones</h5></a></li>
                <li class="col s4 center"><a href="laptopItems.php"><h5>Laptops</h5></a></li>
            </ul>
        </div>
    </div>

    <div class="row" style="padding-top: 15px; padding-left: 15px; ">

        <?php 
        while($row = mysql_fetch_array($result)){
            if($row['is_sold'] == 0 && $row['post_type'] == 'p'){ 
                ?>
                
                <div class="col s12 m6 l3">

                    <div class="card medium white accent-3">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class = "activator" src="<?php echo $row['image_reference_url'];?>">

                        </div>
                        <div class="card-content">
                           <span class="card-title">
                               <a href=<?php echo "itemDescription.php" . "?id=" . $row['post_id'] . "&uid=" . $row['user_id'];?>>
                                   <?php echo $row['title'], "- $", $row['price']; ?>
                               </a>
                           </span>

                       </div>
                       <div class="card-reveal">
                         <span class="card-title grey-text text-darken-4"><?php echo $row['title']; ?><i class="material-icons right">close</i></span>
                         <p><?php echo $row['description'];?></p>
                         <p class = "center"><?php echo "$", $row['price'];?></p>
                     </div>
                 </div>
             </div>
             <?php 
         }
     } 
     ?>

 </script>
 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
 <script type="text/javascript" src="js/materialize.min.js"></script>
 <!-- Compiled and minified CSS from materialize-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
 <script>
    $(document).ready(function () {
        $(".button-collapse").sideNav();
    });
</script>
</body>

</html>