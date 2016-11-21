<?php include 'core/init.php'; ?>
    <!DOCTYPE html>
    <html lang="">

    <head>
        <?php include 'core/includes/head.php'; ?>
            <title> shoplift.ninja/items </title>
    </head>

    <body>

        <?php include 'header.php';
            $constructed_query = "SELECT title, post_id, user_id, description, image_reference_url, is_sold, post_type FROM posts;";
            $result = mysql_query($constructed_query);      
        ?>

            <div class="row" style="padding-top: 15px; padding-left: 15px; ">

                <?php 
		while($row = mysql_fetch_array($result)){
			if($row['is_sold'] == 0){ 
                        ?>
                    <div class="col s12 m6 l3">
                        <div class="card medium white accent-3">
                            <div class="card-image">
                                <img src="<?php echo $row['image_reference_url'];?>">

                            </div>
                            <div class="center">
                                <h4><a href=<?php echo "itemDescription.php" . "?id=" . $row['post_id'];?>><?php echo $row['title']; ?></a></h4>
                                <p>
                                    <?php //echo $row['post_id'];?>
                                </p>
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
                        <!-- Compiled and minified JavaScript from materialize -->
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
                        <script>
                            $(document).ready(function () {
                                $(".button-collapse").sideNav();
                            });
                        </script>
    </body>

    </html>