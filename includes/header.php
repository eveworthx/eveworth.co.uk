<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Eve Worth's online front end development and responsive design portfolio">
		
		<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
		<title><?php echo $title; ?></title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<link rel="stylesheet" href="/css/portfolio.css">

		<link rel="shortcut icon" type="image/ico" href="/favicon.ico"/>
	</head>
	<body>
		<div class="container">

<?php


$active_page = $_SERVER["REQUEST_URI"];

?>

			<div id="navigation">
				<ul>
					<a href="/"><li><div class="navigation_link <?php if ($active_page == '/') { echo 'home_active'; } ?>" id="navigation_home"></div></li></a>
					<a href="/about"><li><div class="navigation_link <?php if ($active_page == '/about/') { echo 'about_active'; } ?>" id="navigation_about"></div></li></a>
					<a href="/portfolio"><li><div class="navigation_link <?php if ($active_page == '/portfolio/') { echo 'portfolio_active'; } ?>" id="navigation_portfolio"></div></li></a>
					<a href="/contact"><li><div class="navigation_link <?php if ($active_page == '/contact/') { echo 'contact_active'; } ?>" id="navigation_contact"></div></li></a>
				</ul>
			</div>