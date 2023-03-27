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


	<div class="section-heading" id="food"> Menu </div>
	<div class="grid">
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

	<div class="intro" id="intro">
		<div class="intro-inner">
			<h2 class="intro-title"> <?php bloginfo('name') ?> ouvre à Paris,</h2>
			<p class="intro-description">un endroit où la culture traditionnelle du thé à Taïwan et la vie moderne se rejoignent.Toujours savoureux, chauds ou rafraîchissants selon les saisons, nos thés sauront vous surprendre !</p>
		</div>
	</div>

	<!-- LOCATIONS -->
	<div class="section-heading" id="locations">
		Adresse
	</div>
	<div class="locations">
		<div class="location grid">
			<div class="map">
				<div class="map-inner">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.7540036941664!2d2.3540002510614055!3d48.862901108241815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e04cff01a71%3A0x516159a5014101f8!2s14%20Rue%20de%20Montmorency%2C%2075003%20Paris%2C%20France!5e0!3m2!1sen!2sus!4v1679430467860!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>

			<div class="location-info">
				<div class="location-description">
					Amis Boba Marais<br>
					<p>14 Rue de Montmorency, 75003 Paris, France</p>
					<p>09 12 23 45 67</p>

					<p>
						Sunday to Friday <br>
						12:30 - 7PM<br>

						Friday to Saturday<br>
						12:30 - 10PM<br>
					</p>
				</div>
			</div>
		</div>
	</div>

</main><!-- #main -->

<?php
get_footer();
