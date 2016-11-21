<?php include 'core/init.php' ?>
    <!DOCTYPE html>
    <html lang="">
    <?php include 'core/includes/head.php' ?>

        <body>
            <?php include 'header.php' ?>

                <div class="row container">
                    <br/>
                    <br/>
                    <div class="row">
                        <div class="col s12 m4">
                            <div class="card medium">
                                <a href="phoneItems.php">
                                    <div class="card-image soup">
                                        <img src="//zuykov.com/static/imgs/phone.dcb8a59c53a1.png">
                                        <!--<span class="card-title">Card Title</span>-->
                                    </div>
                                    <div class="card-action">PHONES</a>
                                </div>
                            </div>
                        </div>

                        <div class="col s12 m4">
                            <div class="card medium">
                                <a href="laptopItems.php">
                                    <div class="card-image soup">
                                        <img src="//cdn4.iconfinder.com/data/icons/48-bubbles/48/29.Mac-512.png">
                                        <!--                                    <span class="card-title">Card Title</span>-->
                                    </div>
                                    <div class="card-content">
                                        <!--                                    <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>-->
                                    </div>
                                    <div class="card-action">
                                        <a href="laptopItems.php">LAPTOPS</a>
                                    </div>
                                </a>
                            </div>
                        </div>




                        <div class="col s12 m4">
                            <div class="card medium">
                                <a href="bookItems.php">
                                    <div class="card-image soup">
                                        <img src="//icons.iconarchive.com/icons/iconsmind/outline/512/Book-icon.png">
                                        <!--                                    <span class="card-title">Card Title</span>-->
                                    </div>
                                    <div class="card-content">
                                        <!--                                    <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>-->
                                    </div>
                                    <div class="card-action">
                                        <a href="bookItems.php">BOOKS</a>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                <section class="container center">
                    <div class="card lighten-4 white-text">
                        <h1 class="black-text">About us</h1>
                        <p class="black-text">Shoplift.ninja is a site for you if you are looking to resell your phone to a community of other resellers! Make an account and post a phone!</p>
                    </div>
                </section>

                <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
                <script type="text/javascript" src="materialize/js/jquery1.js"></script>
                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
                <script>
                    $(document).ready(function () {
                        $(".button-collapse").sideNav();
                    });
                </script>

        </body>

    </html>