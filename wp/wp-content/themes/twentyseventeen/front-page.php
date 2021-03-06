<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

	<div class="video-home-bg" data-vide-bg="https://www.ironhack.com/assets/videos/ironhack-video-3">
	<div class="row justify-content-center align-items-center">
		<div class="col-10 " style="text-align: center">
			<h1 class="baseline"> <?php the_field('home_title')?> </h1>
		</div>
	</div>
</div>


<!-- ANCIEN HEADER

<div class="container-fluid background-header">
					  
			<div class="container">
				<div class="row">
					<div class="col">

						
					   <div class="row justify-content-center align-items-center">
							<div class="col-10 " style="text-align: center">
								<h1 class="baseline">  &#60h1&#62 l'école qui sort des codes &#60/h1&#62 </h1>
							</div>
						</div>
					
					</div>
				</div>
			</div>
		</div> FIN ANCIEN HEADER-->

		
		<div class="container-fluid partie1">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-xs-12 colonnes-pictos-p1">
						<?php $image = get_field('image-picto'); ?>
    					<img class="picto-partie1" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<!--<img class="picto-partie1" src="/wp-content/themes/twentyseventeen/img/picto-dev-confirme.svg">-->
						<h4 class="titre-picto-p1"> <?php the_field('home_title-col1')?> </h4>
						<p class="txt-p1"> <?php the_field('txt-col1')?></p>
					</div>
					<div class="col-lg-4 col-md-6 col-xs-12 colonnes-pictos-p1">
						<?php $image = get_field('image-picto2'); ?>
    					<img class="picto-partie1" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<!-- <img class="picto-partie1" src="/wp-content/themes/twentyseventeen/img/picto-emploi-sortie.svg"> -->
						<h4 class="titre-picto-p1"> <?php the_field('home_title-col2')?> </h4>
						<p class="txt-p1"> <?php the_field('txt-col2')?> </p>
					</div>
					<div class="col-lg-4 col-md-6 col-xs-12 colonnes-pictos-p1 picto-profs-co">
						<?php $image = get_field('image-picto3'); ?>
    					<img class="picto-partie1" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<!-- <img class="picto-partie1 picto-partie1-3" src="/wp-content/themes/twentyseventeen/img/picto-profs.svg"> -->
						<h4 class="titre-picto-p1"> <?php the_field('home_title-col3')?> </h4>
						<p class="txt-p1"> <?php the_field('txt-col3')?> </p>
					</div>
				</div>
			</div>
		</div>

		<div class="img-diagonale">
			<img src="/wp-content/themes/twentyseventeen/img/img-diagonale.svg">
		</div>

		<div class="container-fluid box-partie2">
			<div class="container partie2">
				<h3> Ce qui nous rend unique </h3>
				<div class="row unique">
					<div class="col-lg-6 col-sm-12">
						<div class="unique-p1">
							<?php // Show the selected frontpage content.
								while ( have_posts() ) : the_post();
										the_content();
								endwhile; 
							?>
						</div>
					</div>
					 <div class="col-lg-6 col-sm-12">
						<div class="unique-p1">
							<p class="txt-unique">effectifs de 20</p>
							<p class="txt-unique">1 à 2 profs par classes</p>
							<p class="txt-unique">esprit dynamique</p>
							<p class="txt-unique">maitrise des outils et technologies</p>
						</div> 
					</div>	
				</div>
				<a href="cursus"><button type="button" class="btn btn-danger btn-unique">Prêt à démarrer l'aventure ?</button></a>
			</div>
			<div class="ninja-fond-img">
			</div>
		</div>

		<div class="container-fluid partie3">
			<h3> Ce qui t'attend </h3>
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-xs-12 colonnes-pictos-p3">
						<img class="picto-partie3" src="/wp-content/themes/twentyseventeen/img/picto-intensif.svg">
						<h4 class="titre-picto-p3"> Travail intensif </h4>
						<p class="txt-p3"> X heures de cours par semaines. Oublies tes week-end et tes vacances.</p>
					</div>
					<div class="col-lg-4 col-md-6 col-xs-12 colonnes-pictos-p3">
						<img class="picto-partie3 picto-partie3-team" src="/wp-content/themes/twentyseventeen/img/picto-team.svg">
						<h4 class="titre-picto-p3"> Super team </h4>
						<p class="txt-p3"> Un environement de travail idéal. </p>
					</div>
					<div class="col-lg-4 col-md-6 col-xs-12 colonnes-pictos-p3 picto-salaire">
						<img class="picto-partie3 picto-partie3-salaire" src="/wp-content/themes/twentyseventeen/img/picto-salaire.svg">
						<h4 class="titre-picto-p3"> Salaire de rêve </h4>
						<p class="txt-p3"> De véritables acteurs du monde du dévelopement web. </p>
					</div>
				</div>
			</div>
			
		</div>
		
		
		
		<div class="container-fluid partie4 gallery-container">

			<h3 class="titre-p4">Reste connecté</h3>
			
			
			<div class="row actus">
				<div class="col-lg-4 col-sm-12">
					<div class="card-1 card-actu-1">
						<!--<img class="card-img-top" src="..." alt="Card image cap">-->
						<div class="card-block1">
							<p class="card-text text-actu content-align-bottom">ACTU 1: LOREM IPSUM</p>
						</div>
					</div>
				</div>	
				<div class="col-lg-8 col-sm-12">
					<div class="card-2 card-actu-2">
						<!--<img class="card-img-top" src="..." alt="Card image cap">-->
						<div class="card-block2">
							<p class="card-text text-actu content-align-bottom">ACTU 2: LOREM IPSUM</p>
						</div>
					</div>
				</div>	
			</div>
			
			<div class="row actus">
				<div class="col-lg-6 col-sm-12 responsive-block">
					<div class="row">
						<div class="col-12 responsive-block">
							<div class="card-3 card-actu-3">
								<!--<img class="card-img-top" src="..." alt="Card image cap">-->
								<div class="card-block3">
									<p class="card-text text-actu content-align-bottom">ACTU 3: LOREM IPSUM</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-sm-12 responsive-block">
							<div class="card-4 card-actu-4">
								<!--<img class="card-img-top" src="..." alt="Card image cap">-->
								<div class="card-block4">
									<p class="card-text text-actu content-align-bottom">ACTU 4: LOREM IPSUM</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-sm-12 responsive-block">
							<div class="card-5 card-actu-5">
								<!--<img class="card-img-top" src="..." alt="Card image cap">-->
								<div class="card-block5">
									<p class="card-text text-actu content-align-bottom">ACTU 5: LOREM IPSUM</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-sm-12">
					<div class="card-6 card-actu-6">
						<!--<img class="card-img-top" src="..." alt="Card image cap">-->
						<div class="card-block6">
							<p class="card-text text-actu content-align-bottom">ACTU 6: LOREM IPSUM</p>
						</div>
					</div>
				</div>	
			</div>
			
			
		</div>

		<div class="container-fluid partie5">
			<div class="row text-center">

				<h3 class="titre-p5"> Tiens toi informé </h3>
				<form name="form4" action="" class="champ-doc-home text-center">
					<input class="champ-txt-mail-home" type="texte" name="mail">
				</form>
				<div class="bouton-news-home">
					<button type="button" class="btn btn-danger" class="text-center"> Recevoir la newsletter </button>
				</div>	
			</div>	

		</div>



<?php get_footer();