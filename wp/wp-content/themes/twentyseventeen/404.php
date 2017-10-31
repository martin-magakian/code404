<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="container-fluid corps-page-404">		  
	<div class="container">
		<div class="row">
			<div class="col">
			   <div class="row justify-content-center align-items-center">
					<div class="col-10 " style="text-align: center">
						<h1 class="error-code-404">  code 404 - ninja non opérationnel </h1>
					</div>
				</div>			
			</div>
		</div>
	</div>
	<div class="ninja-404">
		<img src="\wp-content\themes\twentyseventeen\img\ninja-404.svg">
	</div>
</div>


<?php get_footer();
