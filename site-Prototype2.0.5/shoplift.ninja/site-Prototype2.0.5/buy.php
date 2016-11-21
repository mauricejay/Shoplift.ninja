<?php include 'core/init.php'; ?>
    <?php include 'core/includes/head.php'; ?>

        <html>

        <body>
            <?php include 'header.php';?>
                <div class="container">
                    <div class="container">
                        <div class="container">
                            <h4 class="black-text center-align">Payment Form</h4>
                            <div class="row col s4 card-panel" style="color:white;">
                                <form class="col s12" action="buyIt.php" method="POST">
                                    <div class="row">
                                        <div class="col s12">
                                            <div class="center-align">
                                                <input name="credittype" type="radio" id="visa" value="visa" />
                                                <label for="visa" class="black-text">Visa</label>

                                                <input name="credittype" type="radio" id="mastercard" value="mastercard" />
                                                <label for="mastercard" class="black-text">Mastercard</label>

                                                <input name="credittype" type="radio" id="americanexpress" value="americanexpress" />
                                                <label for="americanexpress" class="black-text">American Express</label>
                                            </div>
                                            <div class="left-align">
                                                <input name="firstname" id="firstname" type="text" class="validate grey-text">
                                                <label for="firstname" class="black-text">First Name</label>

                                                <input name="lastname" id="lastname" type="text" class="validate grey-text">
                                                <label for="lastname" class="black-text">Last Name</label>

                                                <input name="cardnumber" id="cardnumber" type="text" class="validate grey-text">
                                                <label for="cardnumber" class="black-text">Card Number</label>

                                                <input name="zip" id="zip" type="text" class="validate grey-text">
                                                <label for="zip" class="black-text">ZIP/Postal Code</label>

                                                <input name="expire" id="expire" type="text" class="validate grey-text">
                                                <label for="expire" class="black-text">Expire Date</label>

                                                <input name="securitycode" id="securitycode" type="text" class="validate grey-text">
                                                <label for="securitycode" class="black-text">Security code</label>
                                            </div>
                                            <br>
                                            <?php  $item = buyItData($_GET['id']);
       
    
    ?>
                                        </div>
                                    </div>
                                    <div class="center-align">
                                        <button class="btn center-align black white-text" type="submit">Confirm Purchase
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="card">
			<h4 class="col s6">Payment Form</h4>
			<div class="row card-content cols6 center-align">
				<div class="row center-align">

		  	</div>
			</div> -->

                <script src="materialize/js/materialize.min.js"></script>
                <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
                <script type="text/javascript" src="materialize/js/jquery1.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
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