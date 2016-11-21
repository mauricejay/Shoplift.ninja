<?php

require './core/init.php';

//echo $_POST['username'];
//echo $_POST['email'];
//
//if (in_array($_POST['username'], $arr)){
//    echo true;
//}

function checkUsers(){
    $queryUsername = mysql_query("SELECT username FROM users");
    $rows = array();
    
    $usernames = array();
    
    while($data = mysql_fetch_array($queryUsername)) {
        foreach($data as $value) {
        array_push($usernames, $value);
            }
        }
    //print_r($usernames);
    if(in_array($_POST['username'], $usernames)){
        echo "uFalse";
    }
    else{
        //if isnt taken
        echo "uTrue";
    }
    
    
    
}
checkUsers();

?>