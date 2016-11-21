<?php
    include 'core/init.php';

    $user = $user_data['user_id'];
    
    $previousSales = "SELECT * FROM posts where user_id= '$user' AND is_sold = 1";
    
    $getType_query = "SELECT post_type FROM post where user_id = '$user'";

    $currentSales = "SELECT * FROM posts where user_id= '$user' AND is_sold = 0";
?>
    <!DOCTYPE html>
    <html lang="">
    <?php include 'core/includes/head.php' ?>

        <body>

            <?php include 'header.php';
            $user_prefs = "SELECT photo, background_photo FROM users where user_id= '$user'";
            $photos = mysql_query($user_prefs);
            while ($row = mysql_fetch_array($photos)) {
                    $userIMG = $row['photo'];
                    $background = $row['background_photo'];
                    $photo = "<img src=" . $row['photo'] ." alt=\"profile image\" class=\"circle z-depth-2 responsive-img \" id=\"profileImg\">";
            }
            
            if(isset($userIMG) && ($userIMG != NULL)){
            }
            else{
                photoUpdate('https://cdn2.iconfinder.com/data/icons/ui-1/60/05-512.png', $user);
                backgroundUpdate('http://10steps.sg/wp-content/uploads//2012/11/christmas-light-background-small.png', $user);
            }
            ?>
            <br><br>
                <div class="container animated fadeIn">
                    <div id="profile-page-header" class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="" id="headerImg" src="<?php if(isset($background)&&($background != 'null')){echo $background;}else{echo " images/user-profile-bg.jpg ";}?>" alt="user background">
                        </div>
                        <figure class="card-profile-image">
                            <?php if(isset($userIMG)){echo $photo;} ?>
                        </figure>
                        <div class="card-content">
                            <div class="row">
                                <div class="col s3 offset-s2">
                                    <h4 class="card-title grey-text text-darken-4"><?php echo $user_data['username']; ?></h4>
                                    <p class="medium-small grey-text">Phone reseller</p>
                                </div>
                                <div class="col s2 center-align">
                                    <h4 class="card-title grey-text text-darken-4">
                                        <?php 
$user = $user_data['user_id'];
$getSold_query = "SELECT count(is_sold) FROM posts where user_id = '$user'&& is_sold = 1";
                                                    $result = mysql_query($getSold_query);
                                                              while ($row = mysql_fetch_array($result)) {
                                                                  print(
                                                                $row[0]);
                                                              }
                                        ?></h4>
                                    <p class="medium-small grey-text">Items sold</p>
                                </div>
                                <div class="col s2 center-align">
                                    <h4 class="card-title grey-text text-darken-4"><?php 
$user = $user_data['user_id'];
$getSold_query = "SELECT count(post_id) FROM posts where user_id = '$user' && is_sold = 0";
$result = mysql_query($getSold_query);
                                                              while ($row = mysql_fetch_array($result)) {
                                                                  print(
                                                                $row[0]);
                                                              }
                                        ?></h4>
                                    <p class="medium-small grey-text">Current listings</p>
                                </div>
                                <div class="col s2 center-align">
                                    <div class="myclassname">

                                        <form method="post" id="userPrefForm">
                                            <input type="text" name="photo" id="photo" placeholder="Profile Image" />
                                            <input type="text" name="backgroundPhoto" id="backgroundPhoto" placeholder="Background Image" />
                                            <input type="submit" value="submit" id="subPrefs" onclick="setPhotos()" />
                                        </form>

                                    </div>
                                    <h4 class="card-title grey-text text-darken-4">
                                        
                                        <div border="0" id="gear" alt="Link to User Settings"><img src="http://uxrepo.com/static/icon-sets/typicons/svg/cog.svg" width="25" height="25"/></div>
                                    </h4>
                                    <p class="medium-small grey-text">Account Settings</p>
                                </div>
                                <div class="col s1 right-align">
                                    <a class="btn-floating activator waves-effect waves-light darken-2 right">
                                        <i class="mdi-action-perm-identity"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-reveal" style="display: none; transform: translateY(0px);">
                            <p>
                                <span class="card-title grey-text text-darken-4"><?php echo $user_data['first_name'] . " " . $user_data['last_name']; ?><i class="mdi-navigation-close right"></i></span>
                                <span><i class="mdi-action-perm-identity cyan-text text-darken-2"></i> Phone  Reseller</span>
                            </p>

                            <p>I buy and sell all types of mobile devices.</p>

                            <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i>
                                <?php if($user_data['phoneNumber'] == ""){
                                    echo "Request phone number: " . "<a href=\"mailto:". $user_data['email']."\">". $user_data['email'] ."</a>";
                                }
                                     ?>
                            </p>
                            <p><i class="mdi-communication-email cyan-text text-darken-2"></i>
                                <?php echo $user_data['email']; ?>
                            </p>
                        </div>
                    </div>
                    <div id="work-collections" class="seaction">






                        <div class="col s12 m12 l6">
                            <h4 class="header">Previous sales</h4>
                            <ul id="projects-collection" class="collection">
                                <li class="collection-item avatar">
                                    <i class="mdi-hardware-keyboard-alt circle light-blue"></i>
                                    <span class="collection-header">Devices</span>
                                    <p>My Sales</p>
                                    <a href="#" class="secondary-content"><i class="mdi-action-grade"></i></a>
                                </li>
                                <!--                                     The stuff that needs to be output in php -->
                                <?php

                                                            $result = mysql_query($previousSales);
                                                              while ($row = mysql_fetch_array($result)){
//                                                                  print_r($row);
                                                                  print('<li class="collection-item">
    <div class="row">
        <div class="col s3">
        
            <figure class="circle">
            
                <a href="itemDescription.php?id=' . $row[post_id] . '">
                    <img id="deviceHeight" src="' . $row[image_reference_url] . '" alt="profile image" class="circle z-depth-2 responsive-img activator"> </a>
                </figure>
            </div>
        <div class="col s3">
            <a href="itemDescription.php?id=' . $row[post_id] . '">
                <p class="collections-title">'. $row[title] .'</p>
                <p class="collections-content">$'. $row[price] .'</p>
            </a>
        </div>
        <div class="col s3">
            <span class="task-cat cyan">'. $row[post_type] .'</span>
        </div>
        <div class="col s3">
            <div id="project-line-1">
                <canvas width="114" height="30" style="display: inline-block; width: 114px; height: 30px; vertical-align: top;"></canvas>
            </div>
        </div>
    </div>
</li>');}
//<!--                                    The stuff that needs to be output in php-->

                        
                        ?>

                            </ul>
                        </div>




                        <div class="col s12 m12 l6">
                            <h4>Current sales</h4>
                            <ul id="projects-collection" class="collection">
                                <li class="collection-item avatar">
                                    <i class="mdi-editor-attach-money circle light-blue"></i>
                                    <span class="collection-header">Devices</span>
                                    <p>My Sales</p>
                                </li>
                                <!--                                        Stuff we need to output?-->
                                <?php
                                            $result = mysql_query($currentSales);
                                             while ($row = mysql_fetch_array($result)){
                            print('<li class="collection-item">
    <div class="row">
        <div class="col s3">
        
            <figure class="circle">
            
                <a href="itemDescription.php?id=' . $row[post_id] . '">
                    <img id="deviceHeight" src="' . $row[image_reference_url] . '" alt="profile image" class="circle z-depth-2 responsive-img activator"> </a>
                </figure>
            </div>
        <div class="col s3">
            <a href="itemDescription.php?id=' . $row[post_id] . '">
                <p class="collections-title">'. $row[title] .'</p>
                <p class="collections-content">$'. $row[price] .'</p>
            </a>
        </div>
        <div class="col s3">
            <span class="task-cat cyan">'. $row[post_type] .'</span>
        </div>
        <div class="col s3">
            <div id="project-line-1">
                <canvas width="114" height="30" style="display: inline-block; width: 114px; height: 30px; vertical-align: top;"></canvas>
            </div>
        </div>
    </div>
</li>');}
//                        <!--                                        Stuff we need to output?-->
                        ?>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>






                <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
                <script type="text/javascript" src="materialize/js/jquery1.js"></script>
                <!-- Compiled and minified JavaScript -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
                <script type="text/javascript" src="./main.js"></script>
                <script>
                    $(document).ready(function () {
                        $(".button-collapse").sideNav();
                    });
                </script>

                <?php
                    //LOCATED IN ./core/functions/users.php
                    checkLoginStatus();
                ?>
        </body>

    </html>