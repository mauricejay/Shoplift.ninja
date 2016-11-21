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
                                                <input id="creditType1" type="radio" name="creditType" value="visa" />
                                                <label for="creditType1" class="black-text">Visa</label>

                                                <input id="creditType2" type="radio" name="creditType" value="mastercard" />
                                                <label for="creditType2" class="black-text">Mastercard</label>

                                                <input id="creditType3" type="radio" name="creditType" value="americanexpress" />
                                                <label for="creditType3" class="black-text">American Express</label>

                                            </div>
                                            <div class="left-align">
                                                <input id="firstname" type="text" class="validate grey-text" name="firstname" />
                                                <label for="" class="black-text">First Name</label>


                                                <input id="lastname" type="text" class="validate grey-text" name="lastname" />
                                                <label for="lastname" class="black-text">Last Name</label>


                                                <input id="cardnumber" type="text" class="validate grey-text" name="cardnumber" />
                                                <label for="cardnumber" class="black-text">Card Number</label>


                                                <input id="zip" type="text" class="validate grey-text" name="zip" />
                                                <label for="zip" class="black-text">ZIP/Postal Code</label>


                                                <input id="securitycode" type="text" class="validate grey-text" name="securitycode" />
                                                <label for="securitycode" class="black-text">Security code</label>

                                            </div>
                                            <br>
                                            <?php  $item = buyItData($_GET['id']);
       
    
    ?>
                                        </div>
                                    </div>
                                    <div class="center-align">
                                        <button class="btn center-align black white-text" type="submit" onclick="return validateBuy()">Confirm Purchase
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
                <script src="main.js"></script>
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