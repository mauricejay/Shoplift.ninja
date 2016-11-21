<?php include 'core/init.php';
         include 'core/includes/head.php'; ?>

    <html>

    <body>

        <?php include 'header.php';
                
                //print_r($_POST);
                $creditType = $_POST['credittype'];
                $firstname = $_POST['firstname'];
                $last_name = $_POST['lastname'];
                $cardnumber = $_POST['cardnumber'];
                $zip = $_POST['zip'];
                $expire = $_POST['expiration'];
                $securitycode = $_POST['securitycode'];
                
                    
                foreach($_POST as $k => $v){
                    //echo $k . ' ' . $v . '<br/>';
                }
            ?>
            <br>
            <br>
            <div class="container">
                <div class="container">
                    <div class="container">
                        <h4 class="black-text center-align">Address Form</h4>
                        <div class="row col s4 card-panel" style="color:white;">
                            <form class="col s12" method="POST">
                                <div class="row">
                                    <div class="col s12">
                                        <div class="center-align">
                                            <input name="addresstype" type="radio" id="home" value="home" />
                                            <label for="home" class="black-text">Home</label>

                                            <input name="addresstype" type="radio" id="business" value="business" />
                                            <label for="business" class="black-text">Business</label>
                                        </div>
                                        <div class="left-align">
                                            <input name="address" id="address" type="text" class="validate grey-text">
                                            <label for="address" class="black-text">Address</label>

                                            <input name="city" id="city" type="text" class="validate grey-text">
                                            <label for="city" class="black-text">City</label>

                                            <input name="state" id="state" type="text" class="validate grey-text">
                                            <label for="state" class="black-text">State</label>

                                            <input name="zip" id="zip" type="text" class="validate grey-text">
                                            <label for="zip" class="black-text" placeholder="<?php echo $zip;?>">ZIP/Postal Code</label>

                                            <input name="email" id="email" type="text" class="validate grey-text">
                                            <label for="email" class="black-text">Email</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="center-align">
                                    <button class="btn center-align black white-text" type="submit">Confirm Address!
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
    </body>

    </html>