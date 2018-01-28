<?php
	/*db connection string */
	$con = mysqli_connect('localhost', 'root', '', 'databasename');
	if (!$con){ die('Could not connect: ' . mysqli_error()); }	  	
	global $con;	
?>