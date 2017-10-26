<!doctype html>
<html lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0" />
	<title>Code_404</title>
	
	
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.plyr.io/2.0.16/plyr.css">
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

	<!-- Jquery pour video home header-->
	<script src="script/jquery.vide.js"></script>

	<!-- script (lien) pour vidéo success-story-->
	<script src="https://cdn.plyr.io/2.0.16/plyr.js"></script>

<!-- maxence 
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
-->

<script src="script/script.js"></script>
<link rel="stylesheet" href="styles/style.css">

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>


</head>
<body>

	<!-- header -->
	<?php include("include/header.php") ?>

	<!-- PAGE INDEX -->
	<?php 
	if ($_GET['page'] =="home"){
		include("home.php");
	}elseif ($_GET['page']=="apropos"){
		include("a-propos.php");
	}elseif ($_GET['page']=="cursus"){
		include("cursus.php");
	}elseif ($_GET['page']=="success-story"){
		include("success-story.php");
	}elseif ($_GET['page']=="contact"){
		include("contact.php");
	}else{
		include("404.php");
	}
	?>

	<!-- FOOTER -->
	<?php include("include/footer.php") ?>



	<!-- SUCCESS-STORY (doit se trouver avant la fermeture de la balise body) -->
	<script>plyr.setup();</script>

</body>
</html>