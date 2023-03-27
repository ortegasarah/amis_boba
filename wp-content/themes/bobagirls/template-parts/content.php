<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bobagirls
 */
	global $item_number;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
<!-- 1. title on the left -->
<h1 class="entry-title">
	<?php 
	the_title()
	?>
</h1>
<!-- menu number here -->
<div class="entry-number">
	<?php echo $item_number ; ?>
</div>
<!-- 2. price (content) on the right -->
<div class="entry-content">
	<?php 
	the_content()
	?>
</div>

	</header><!-- .entry-header -->

	<?php bobagirls_post_thumbnail(); ?>

	
</article><!-- #post-<?php the_ID(); ?> -->
