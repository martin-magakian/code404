<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

	<div class="container-fluid background-header">



	<div class="container">
		<div class="row">
			<div class="col">


				<div class="row justify-content-center align-items-center">
					<div class="col-12 " style="text-align: center">
						<h1 class="baseline-about">  &#60h1&#62 l'école qui sort des codes &#60/h1&#62 </h1>
					</div>
				</div>

			</div>
		</div>
	</div>

</div>

<div class="container-fluid grey">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col">
					<?php // Show the selected frontpage content.
						while ( have_posts() ) : the_post();
						 the_content ();
						endwhile;
 					?>
					<!--<h2 class="text-center text-center-apropos GTitre">BIENVENU CHEZ CODE_404</h2>
					<p class="text-center gras text-center-apropos white">Tu rêves de devenir développeur depuis ton plus jeune âge ? </p>
					<p class="text-center text-center-apropos white">Code_404 c’est avant-tout un lieu de partage de connaissances où les grands maîtres développeurs qui t’accompagnerons durant ces 3 ans vont te donner les clés de la réusite.</p> -->
				</div>
			</div>
		</div>
	</div>

</div>


<div class="container container-about">
	<div class="row">
		<!-- php array = tableau dedans 6 tableau car 6 éléments , on ajoute des mots clefs (img nom..) ce sont des élément qui changeront dans le html-->

		<?php
		$cardsabout = array(
			array(
				"img" => "/wp-content/themes/twentyseventeen/img/professional1.png",
				"nom" => "FRANCK MARTIN",
				"profession" => "Professeur de JAVASCRIPT - Ingénieur informatique chez EDF",
				),
			array(
				"img" => "/wp-content/themes/twentyseventeen/img/professional2.png",
				"nom" => "YVES LANDRY",
				"profession" => "Professeur de C++/C - Ingénieur informatique chez Total",
				),
			array(
				"img" => "/wp-content/themes/twentyseventeen/img/professional3.png",
				"nom" => "LEYLA BOUSSA",
				"profession" => "Professeur de HTML / CSS - Webdesigner chez Publicis",
				),
			array(
				"img" => "/wp-content/themes/twentyseventeen/img/professional4.png",
				"nom" => "MARTIN LENOIR",
				"profession" => "Professeur de PHP - Developpeur chez Biocoop",
				),
			array(
				"img" => "/wp-content/themes/twentyseventeen/img/professional5.png",
				"nom" => "MARC OBISSA",
				"profession" => "Professeur de PYTHON - Formateur chez Ungrid",
				),
			array(
				"img" => "/wp-content/themes/twentyseventeen/img/professional6.png",
				"nom" => "LEANDRE MAITRE",
				"profession" => "Professeur de projet web - Chef de projet web chez ZARA",
				),
			);
		/* on crée la varible a ce moment la (card(sans s ) pour dire que pour chaque colonnes ont prendre un seul tableau */

		foreach($cardsabout as $cardabout){ ?>

		<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 margeabout" >
			<div class="card card-profs shadow">
				<div class="photo-card-box">
					<img class="card-img-top" src="<?php echo $cardabout['img'] ?>" alt="professeur institut de devellopement code 404">
				</div>
				<div class="card-body card-body-about">
					<h4 class="card-title space haut les-profs name"><?php echo $cardabout['nom'] ?></h4>
					<p class="card-text space les-profs"><?php echo $cardabout['profession'] ?></p>
					<p class="card-text space les-profs ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="#" class="btn about btn-primary-about bas"><img src="\wp-content\themes\twentyseventeen\img\linkedin.svg" alt="linkedin"></a>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
</div>

<div class="container-fluid bgscolarite">
	<div class="row justify-content-center align-items-center">
		<div class="col-10 " style="text-align: center">
			<h2 class="scolarite bas">  Frais de scolarité </h2>
		</div>
		<div class="barre center"></div><!-- <img src="img/barre.svg" alt="" class="center"> -->
	</div>
	<div class="container haut-2 white">
		<div class="row haut-2">
			<div class="col haut-2">
				<p class="text-center text-center-apropos white">1ère année</p>
				<p class="text-center text-center-apropos white">2ème année</p>
				<p class="text-center text-center-apropos white">3ème année</p>
			</div>
			<div class="col haut-2">
				<p class="text-center text-center-apropos white">9500 €</p>
				<p class="text-center text-center-apropos white">9500 €</p>
				<p class="text-center text-center-apropos white">9500 €</p>
			</div>
		</div>
	</div>
	<div class="row justify-content-center align-items-center">
		<div class="barre barre2 center hauteur"></div>
	</div>
</div>
<div class="container-fluid bg3">
	<div class="container finabout">
		<div class="row">
			<div class="col">
				<?php the_field('text2') ; ?>
				
				<!--<p class="text-center text-center-apropos ">Après ces 3 années d’apprentissage intense avec des professionels </p>
				<p class="text-center text-center-apropos ">du développement web tu seras apte à intégrer les plus grandes entreprises </p> 
				<p class="text-center text-center-apropos">tels que Google, twitter, ... </p> 
				<p class="text-center text-center-apropos">dans lesquelles tes capacités de développeur ninja expérimenté seront un atout.</p> -->
			</div>
		</div>

		<button type="button" class="btn btn-primary colorred btn-lg btn-block casse"> <a href="success-story" class="white">Découvre la success story </a></button>
	</div>

</div>

<?php get_footer();
