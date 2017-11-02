<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0" />
	<title>Code_404</title>
	
	
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.plyr.io/2.0.16/plyr.css">

	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

	<!-- Jquery pour video home header-->
	<script src="/wp-content/themes/twentyseventeen/script/jquery.vide.js"></script>



<!-- maxence 
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
-->

<script src="/wp-content/themes/twentyseventeen/script/script.js"></script>
<!--<link rel="stylesheet" href="styles/style.css">-->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>


<?php wp_head(); ?>
</head>


<body>
<header class="container-fluid-header">
	<div class="container container-header">
		<nav class="navbar navbar-expand-md no-gutters">
			<div class="col-4 text-left logo-header">
				<a href="/?page=home">
					<img src="/wp-content/themes/twentyseventeen/img/logo.svg" alt="image" class="logo-header">
				</a>
			</div>

			<button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNav12" aria-controls="navbarNav12" aria-expanded="false" aria-label="Toggle navigation">
				<img src="/wp-content/themes/twentyseventeen//img/menu.svg" >
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse justify-content-center col-md-8" id="navbarNav12">
				<ul class="navbar-nav justify-content-right">
					<li class="nav-item active">
						<a class="nav-link" href="cursus">cursus</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="success-story">success story</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="a-propos">à propos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact">contact</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</header>
