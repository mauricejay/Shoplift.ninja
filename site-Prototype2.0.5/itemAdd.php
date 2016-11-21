<?php
// This button appears when a user is logged into their account & the session is authenticated
echo '
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<div class="fixed-action-btn active" id="addMenu"style="bottom: 45px; right: 24px;">
          <a class="btn-floating btn-large  orange lighten-1"  href="postCreation.php">
            <i class="material-icons">publish</i>
          </a>
          <ul>
            <li><a class="btn-floating red" style="transform: scaleY(1) scaleX(1) translateY(0px); opacity: 1;"><i class="material-icons">phone</i></a></li>
            <li><a class="btn-floating yellow darken-1" style="transform: scaleY(1) scaleX(1) translateY(0px); opacity: 1;"><i class="material-icons">library_books</i></a></li>
            <li><a class="btn-floating green" style="transform: scaleY(1) scaleX(1) translateY(0px); opacity: 1;"><i class="material-icons">airplay</i></a></li>
          </ul>
        </div>
        
                <!--Import jQuery before materialize.js-->
            <script type="text/javascript " src="https://code.jquery.com/jquery-2.1.1.min.js "></script>
            <script type="text/javascript " src="js/materialize.min.js "></script>
                                <script>
                        $(document).ready(function () {
                            $(".button-collapse").sideNav();
                        });
                    </script>'
?>