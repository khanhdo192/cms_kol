<?php

	$connection = mysqli_connect('localhost', 'root', '', 'kols');


	if(!$connection){
		echo 'Connection error: ' . mysqli_connect_error();
	}


?>
