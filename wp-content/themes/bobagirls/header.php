<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bobagirls
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<!-- <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/custom.css" > -->
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'bobagirls' ); ?></a>

	<header id="masthead" class="site-header">

	<div class="header-inner container">
		<div class="site-branding">
				<!-- here we link to our logo from the assets folder -->
				<img src="<?php bloginfo('template_url'); ?>/assets/cat.jpg" class="logo">
			<!-- <?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?> 
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$bobagirls_description = get_bloginfo( 'description', 'display' );
			if ( $bobagirls_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $bobagirls_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?> -->
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
		<!-- todo: make this atually work -->
		<div class="language-select">EN|FR</div>

		</div>
	</header><!-- #masthead -->
