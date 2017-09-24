<?php

	$connection = mysqli_connect('localhost','root','','shobuj_bangla_db') ;

	if(!$connection)
	{
	die("Connection failed: " . mysqli_connect_error());
	}

?>