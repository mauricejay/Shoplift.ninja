<!-- add the comments table  -->


<?php
      include 'core/init.php';
?>
    <!DOCTYPE html>
    <html lang="">
    <?php include 'core/includes/head.php';
     ?>

    

<?php require 'header.html';
?>




<?php

$addTable = "CREATE TABLE IF NOT EXISTS comments (
			comment_id INTEGER(11) NOT NULL Auto_Increment,
			user_id INTEGER(11),
			comment varchar(1024) NOT NULL,
			constraint pk_comment_id PRIMARY KEY (comment_id),
			constraint fk_user_id FOREIGN KEY (user_id) REFERENCES users(user_id)
			);";

			$result = mysql_query($command);

			if(!$result){

			print ("error");

			}

			else
				print ("success");


?>

