<html>
	<head>
	  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	  <meta name="author" content="Lukas Fülling" >
	  <meta name="description" content="lolPix">
	  <meta name="keywords" content="lolPix, funny, images, cloud, imageboard, meme, memes, doge, greg, brian, stacy, stanley, stan">
	  <meta name="robots" content="index, follow">
	  <meta http-equiv="expires" content="0">
	  <meta http-equiv="Content-Language" content="de">
	  <meta http-equiv="cache-control" content="no-cache">
	  <meta http-equiv="pragma" content="no-cache">
	  <?php
	  	if($section==""){
	  		// Redirect to fresh section
			echo ("<meta http-equiv=\"refresh\" content=\"0; url=index.php?section=fresh\">");
	  	}
	  ?>
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>lolPix</title>
	</head>
	<body>
		<!-- banner -->
		<div id="banner">
			<a href="index.htm"><img src="img/lolpix.png"></a>
		</div>
		
		<!-- Menu --><p></p>
		<ul id="leftbar">
			<li><a href="index.php?section=fresh">Fresh</a></li>
			<li><a href="index.php?section=doge">Doge</a></li>
			<?php
			if($loggedin=="true"){
			?>
			<li><a href="index.php?section=profile">Me</a></li>
			<?php
			}
			else {
			?>
			<li><a href="index.php?section=login">Login</a></li>
			<?php
			}
			?>
			<li><a href="index.php?section=about">About</a></li>
		</ul>
		<!-- main content -->
		<div id="main">
