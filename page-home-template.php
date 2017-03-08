<?php
/**
 * Template Name: Homepage
 */
get_header(); ?>
<main role="main">
	<!-- section -->
	<section>
		<div class="homepage-large-text">
			<?php if ( $main_tagline = get_field( 'main_tagline', 'option' ) ) { ?>
				<h1><?php echo $main_tagline; ?></h1>
			<?php } ?>
			<?php if ( $secondary_tagline = get_field( 'secondary_tagline', 'option' ) ) { ?>
				<p><?php echo $secondary_tagline; ?></p>
			<?php } ?>
		</div>

		<?php
		/**
		 * Products Loop
		 */
		get_template_part( 'lib/projects_loop' );
		?>

	</section>
	<!-- /section -->
</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>

