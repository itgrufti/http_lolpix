<?php
	session_start();

	$loggedin=$_SESSION['loggedin']

	$section=$_GET[ 'section' ];

	include("content/database.php");
		// TODO: Set up NSFW

	if($section="fresh"){
		// TODO: Set up database connection.
		// TODO: Sort images by id descending. 
		}
	
	elseif($section="doge"){
		// TODO: Sort images by Doge
	}
	
	elseif($section="about"){
		// TODO: Write about
	}

?>

