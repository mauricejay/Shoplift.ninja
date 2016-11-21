<?php
      include 'core/init.php'
?>
    <!DOCTYPE html>
    <html lang="">

    <?php include 'core/includes/head.php' ?>

        <body>
            <?php include 'header.php' ?>

                <!-- If you change this number below it will changed the item descript page dynamically... I suppose we could use a form
            to pass data to a php script then post that val here... we could also check the value of GET and then pass that num through form.. im not 100% sure though -->
                <script type="text/javascript" src="validateComment.js">
                </script>

                <!-- If you change this number below it will changed the item descript page dynamically... I suppose we could use a form
            to pass data to a php script then post that val here... we could also check the value of GET and then pass that num through form.. im not 100% sure though -->
                <?php
                    //print_r($_GET['id']);
                    $theitem = item_data($_GET['id']);                    
                    $itemID = ($_GET['id']);
                    $uid = ($_GET['uid']);
                    //echo $uid;
                    //echo $itemID;
                  ?>

                    <?php 
                    $getUsername_query = "SELECT username from users WHERE user_id = $uid";
                    $result2 = mysql_query($getUsername_query);
                    $row2 = mysql_fetch_array($result2);
                    echo "<p id='username' value='$row2[username]'></p>";
                    
                

                  ?>


                        <?php
                              $getComment_query = "SELECT comment FROM comments WHERE post_id = $itemID";
                              $result = mysql_query($getComment_query);
                              while ($row = mysql_fetch_array($result))                            

                              {

                                echo "<div class =\"container\"><div class = \"row col s12 m12 card-panel\">";                                
                                echo $row['comment'];
                                echo "</div></div>";


                              }

                              ?>


                            <section id="section-comments">
                                <div class="container">
                                    <div class="row col s12 m12 card-panel">
                                        <form class="col s12" name="comment_submitted" action="comment_submitted.php" method="POST">
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <textarea id="textarea1" class="materialize-textarea" name="comment"></textarea>
                                                    <label for="textarea1"> Add comment </label>
                                                    <button class="btn black white-text waves-effect waves-light center" id="registerBtn" type="submit" name="action" onclick="return acceptedComment();">Submit Comment
                                                        <i class="material-icons left">send</i>
                                                    </button>
                                                    <input type="hidden" name="itemID" value="<?php echo $itemID ?>">
                                                    <input type="hidden" name="userID" value="<?php echo $uid ?>">
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                </div>
                                </div>
                            </section>





                            <!--Import jQuery before materialize.js-->
                            <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
                            <script type="text/javascript" src="js/materialize.min.js"></script>
                            <!-- Compiled and minified CSS -->
                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
                            <!-- Compiled and minified JavaScript -->
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
                            <script src="main.js"></script>
                            <script>
                                $(document).ready(function () {
                                    $('.slider').slider({
                                        full_width: true
                                    });

                                    $(".button-collapse").sideNav();
                                });

                                setTimeout(function () {
                                    var username = $('#username').attr('value');
                                    $('#appUsername').append('<p class="black-text">' + username + '<p>');
                                }, 500);
                            </script>

        </body>

    </html>