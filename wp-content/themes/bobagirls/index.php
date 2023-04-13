<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bobagirls
 */

get_header();
?>

<main id="primary" class="site-main">


	<!-- hero elements -->
	<!-- todo:make it dynamic -->
	<div class="hero">
		<div class="hero-inner container">
			<h1 class="hero-text">
				<span class="hero-sitename hero-description"><?php bloginfo('name'); ?> do it better</span>

				<!-- <p class="hero-description">
					Passez quand vous voulez !
				</p> -->
			</h1>
		</div>
		<!-- <img src="../bobagirls/assets/trois-tasses-1500x1000.jpg" /> -->
	</div>


	<div class="section-heading" id="food">
		<?php get_category_description('category_name=menu'); ?>
	</div>
	<div class="grid">

		<?php query_posts('category_name=Menu'); ?>


		<?php
		if (have_posts()) :

			/* Start the Loop */
			$item_number = 0;
			while (have_posts()) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part('template-parts/content', get_post_type());
				// to increments number:
				$item_number++;
			endwhile;

			the_posts_navigation();

		else :

			get_template_part('template-parts/content', 'none');

		endif;
		?>
	</div>

	<!-- query for intro category post and get just one single post -->
	<?php query_posts('posts_per_page=1&post_type=Intro'); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="intro" id="intro">
				<div class="intro-inner">
					<h2 class="intro-title"> <?php the_title(); ?></h2>
					<div class="intro-description">
						<?php the_content(); ?>
					</div>
				</div>
			</div>




	<?php
		endwhile;
	endif;
	?>
	<!-- LOCATIONS -->
	<div class="section-heading" id="locations">
		<?php get_category_description('post_type=location'); ?>
	</div>

	<div class="locations">
		<?php query_posts('post_type=location'); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div class="location grid">
				<div class="map">
						<div class="map-inner">
							<!-- our map embed goes in here -->

							<!-- firstly we check if the map custom field is filled in -->
							<?php if( get_field('boba_map') ): ?>
								<!-- if it is, we output it here -->
    						<?php the_field('boba_map'); ?>
							<?php endif; ?>
							
						</div>
					</div>

					<div class="location-info">
						<div class="location-description">
							<?php the_content(); ?>
						</div>
					</div>

				</div>
		<?php endwhile;
		endif; ?>

	</div>

</main><!-- #main -->

<?php
get_footer();
