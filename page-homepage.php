<?php
/**
 * Template Name: Homepage New
 */
//require_once( 'lib/class-tech-loop.php' );

get_header(); ?>

<div class="hompage-outer-wrap">

	<div class="homepage-large-text">
		<?php if ( $main_tagline = get_field( 'main_tagline', 'option' ) ) { ?>
		<h1><?php echo $main_tagline; ?></h1>
		<?php } ?>
		<?php if ( $secondary_tagline = get_field( 'secondary_tagline', 'option' ) ) { ?>
		<p><?php echo $secondary_tagline; ?></p>
		<?php } ?>
	</div>

</div>

<?php get_footer();