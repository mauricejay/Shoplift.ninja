<?php
      include 'core/init.php'
?>
    <!DOCTYPE html>
    <html lang="">

    <?php include 'core/includes/head.php' ?>

        <body>

            <?php include 'header.php' ?>

                <div class="container">
                    <div id="profile-page-header" class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="images/user-profile-bg.jpg" alt="user background">
                        </div>
                        <figure class="card-profile-image">
                            <img src="images/rsz_hulkho.png" alt="profile image" class="circle z-depth-2 responsive-img activator">
                        </figure>
                        <div class="card-content">
                            <div class="row">
                                <div class="col s3 offset-s2">
                                    <h4 class="card-title grey-text text-darken-4"><?php echo $user_data['username']; ?></h4>
                                    <p class="medium-small grey-text">Phone reseller</p>
                                </div>
                                <div class="col s2 center-align">
                                    <h4 class="card-title grey-text text-darken-4">10+</h4>
                                    <p class="medium-small grey-text">Items sold</p>
                                </div>
                                <div class="col s2 center-align">
                                    <h4 class="card-title grey-text text-darken-4">6</h4>
                                    <p class="medium-small grey-text">Current listings</p>
                                </div>
                                <div class="col s2 center-align">
                                    <h4 class="card-title grey-text text-darken-4">4</h4>
                                    <p class="medium-small grey-text">Current offers</p>
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

                        <div class="row">
                            <div class="col s12 m12 l6">
                                <h4 class="header">Previous sales</h4>
                                <ul id="projects-collection" class="collection">
                                    <li class="collection-item avatar">
                                        <i class="mdi-hardware-keyboard-alt circle light-blue"></i>
                                        <span class="collection-header">Devices</span>
                                        <p>My Sales</p>
                                        <a href="#" class="secondary-content"><i class="mdi-action-grade"></i></a>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s6">
                                                <a href="soldCase.php">
                                                    <p class="collections-title">iPhone 6 - Gold - 128gb</p>
                                                    <p class="collections-content">$580</p>
                                                </a>
                                            </div>
                                            <div class="col s3">
                                                <span class="task-cat cyan">Phone</span>
                                            </div>
                                            <div class="col s3">
                                                <div id="project-line-1">
                                                    <canvas width="114" height="30" style="display: inline-block; width: 114px; height: 30px; vertical-align: top;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="col s12 m12 l6">
                                <h4 class="header">Current sales</h4>
                                <ul id="projects-collection" class="collection">
                                    <li class="collection-item avatar">
                                        <i class="mdi-editor-attach-money circle light-blue"></i>
                                        <span class="collection-header">Devices</span>
                                        <p>My Sales</p>
                                        <a href="#" class="secondary-content"><i class="mdi-action-grade"></i></a>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s6">
                                                <a href="itemDescription.php">
                                                    <p class="collections-title">Samsung Galaxy S6 - gold - 32GB</p>
                                                    <p class="collections-content">$400</p>
                                                </a>
                                            </div>
                                            <div class="col s3">
                                                <span class="task-cat cyan">Phone</span>
                                            </div>
                                            <div class="col s3">
                                                <div id="project-line-1">
                                                    <canvas width="114" height="30" style="display: inline-block; width: 114px; height: 30px; vertical-align: top;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>








                <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
                <script type="text/javascript" src="materialize/js/jquery1.js"></script>
                <!-- Compiled and minified JavaScript -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
                <script>
                    $(document).ready(function () {
                        $(".button-collapse").sideNav();
                    });
                </script>
        </body>

    </html>