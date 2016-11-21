<?php
include 'core/init.php'
?>
    <!DOCTYPE html>
    <html lang="">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shoplift.Ninja</title>
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="materialize/js/jquery1.js"></script>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="custom.css" />
    </head>

    <body>

        <?php include 'header.php' ?>

            <div class="container">
                <div class="container">
                    <div class="container">
                        <div class="row col s6 card-panel black accent-3" style="color:white;">
                            <form class="col s12" name="loginForm" action="loggedIn.php" method="POST">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="email" type="email" class="validate" name="email">
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="password" type="password" class="validate" name="password">
                                        <label for="password">Password</label>
                                    </div>
                                </div>
                                <button class="btn waves-effect waves-light right blue accent-1" id="registerBtn" type="submit" name="action">Register Now
                                    <i class="material-icons left">send</i>
                                </button>
                                <div class="input-field col s12">
                                    <p class="margin right medium-small sign-up">Already have an account? <a id="login" href="#" onclick="return loginMsg()">Login</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Compiled and minified JavaScript -->
            <script src="materialize/js/materialize.min.js"></script>
            <script>
                $(document).ready(function () {
                    $("div.removeIf").fadeOut(200);
                    $("div.addIf").removeClass("s6").addClass("s12");
                    $("#register").replaceWith('<h4 class="center">Hello again ninja!</h4>');
                    $("#join").replaceWith('<p class="center" >Find some deals</p>');
                    $("#registerBtn").text("LOGIN");
                    $(".sign-up").remove();
                });
            </script>
            <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
            <script type="text/javascript" src="materialize/js/jquery1.js"></script>
            <!-- Compiled and minified JavaScript -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
            <script src="main.js">
            </script>
            <script>
                $(document).ready(function () {
                    $(".button-collapse").sideNav();
                });
            </script>
    </body>

    </html>