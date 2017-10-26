<!doctype html>
<html lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Code_404</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<script src="script/script.js"></script>
	<link rel="stylesheet" href="styles/style.css">
	<link rel="stylesheet" href="https://cdn.plyr.io/2.0.16/plyr.css">
</head>
<body>

<div class="container">
  <div class="row">
	<?php
	$cards = array(
				array(
					"img" => "https://www.w3schools.com/w3images/lights.jpg",
					"nom" => "FRANCK MARTIN",
				),
				array(
					"img" => "https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-9/12140762_1159067420823544_4471328164031495581_n.jpg?oh=b1f7ed94775e5e5fb7e980be413b4230&oe=5A79EF7D",
					"nom" => "YVES LANDRY",
				),
				array(
					"img" => "https://cdn.pixabay.com/photo/2016/06/18/17/42/image-1465348_1280.jpg",
					"nom" => "LEYLA BOUSSA",
				),
				array(
					"img" => "https://cdn.pixabay.com/photo/2016/09/01/10/23/image-1635747_1280.jpg",
					"nom" => "MARTIN LENOIR",
				),
				array(
					"img" => "https://beebom-redkapmedia.netdna-ssl.com/wp-content/uploads/2016/01/Reverse-Image-Search-Engines-Apps-And-Its-Uses-2016.jpg",
					"nom" => "MARC OBISSA",
				),
				array(
					"img" => "http://images6.fanpop.com/image/photos/35900000/sdsd-superman-35976288-438-500.jpg",
					"nom" => "LEANDRE MAITRE",
				),
			);

	foreach($cards as $card){ ?>
		<div class="col">
			<div class="card shadow" style="width: 20rem;">
				  <img class="card-img-top" src="<?php echo $card['img'] ?>" alt="professeur institut de devellopement code 404">
				  <div class="card-body card-body-about">
					<h4 class="card-title space haut les-profs name"><?php echo $card['nom'] ?></h4>
					<p class="card-text space les-profs">Professeur de JAVASCRIPT - Ingénieur informatique chez EDF</p>
					<p class="card-text space les-profs ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="#" class="btn about btn-primary-about bas"><img src="img/linkedin.svg" alt="linkedin"></a>
				  </div>
			</div>
		</div>
	<?php } ?>
  </div>
</div>

</body>
</html>