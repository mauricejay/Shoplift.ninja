<?php 
    function array_sanitize(&$item){
        $item = mysql_real_escape_string($item);
    }
    function sanitize($data){
        return mysql_real_escape_string($data);
    }
    
    // Output error function
    function output_errors($errArr){
        if($errArr == true) {
            return '<ul><li><h4>'. implode('</li><li></h4><h4>',$errArr) .'</h4></li></ul> ' . '<a href="./login.php">Try again</a>';
        }
        else{
            // hmmmmm 
        }
    }
?>