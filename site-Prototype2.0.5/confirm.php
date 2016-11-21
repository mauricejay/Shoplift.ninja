<?php
include 'core/init.php';
include 'core/includes/head.php';

$addresstype = $_POST['addresstype'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$email = $_POST['email'];

?>
    <html>

    <body>
        <?php include 'header.php';?>
            <br>
            <br>
            <div class="container">
                <div class="container">
                    <div class="container">
                        <h4 class="black-text center-align">Confirmation</h4>
                        <div class="row col s4 card-panel" style="color:black;">
                            <h4>The user will recieve your request for purchase!</h4>
                            <h5>Confirmation Information:</h3>
                            <h6>Email : <?php echo $email  ?></h6>
                            <h6>State: <?php echo $address; ?></h6>
                            <h6>City: <?php echo $city; ?></h6>
                            <h6>State: <?php echo $state; ?></h6>
                            <h6>Zip: <?php echo $zip?></h6>
                        </div>
                    </div>
                </div>
            </div>
    </body>

    </html>