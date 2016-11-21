<?php
// How to connet to database
 $connectErr = "Sorry we're experiencing connection errors.";
 $db = mysql_connect("studentdb-maria.gl.umbc.edu","ka12","KWZv(y*%xDE9cexV") or die($connectErr);

//    if(!$db)
//    {
//        exit("Error - could not connect to MySQL");
//    }
//    else
//    {
//        echo '<p class="toRemove" style="display:none;">Connected</p>';
//    }

 $er = mysql_select_db("ka12");
    if(!$er)
        exit("Error - could not select database");
?>