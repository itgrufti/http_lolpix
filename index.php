<?php
	session_start();

	$loggedin=$_SESSION['loggedin']

	$section=$_GET[ 'section' ];

	include("content/database.php");
		// TODO: Set up NSFW
	
	include("content/header.php");
	
	if($section="fresh"){
		// TODO: Set up NSFW
		// TODO: Set up database connection.
		// TODO: Sort images by id descending. 
		}
	
	elseif($section="doge"){
		// TODO: Sort images by Doge
	}
	
	elseif($section="about"){
		// TODO: Write about
	}
	
	include("content/footer.php")M

?>

