<?php
    if (isset($_SESSION['user_id'])){      
     echo '<nav>
        <div class="nav-wrapper white lighten-2">
            <a href="index.php" class="brand-logo black-text">Shoplift.Ninja</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="postCreation.php">New</a></li>
                <li><a href="accountinfo.php">Account</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="postCreation.php">New</a></li>
                <li><a href="accountinfo.php">Account</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </nav>'; } 
    else { 
        echo '
    <nav>
        <div class="nav-wrapper white lighten-3">
            <a href="index.php" class="brand-logo black-text">Shoplift.Ninja</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="signup.php">Signup</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="signup.php">Signup</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </div>
    </nav>';
            }
            ?>