<?php
/**
 * Template Name: Homepage
 */
get_header(); ?>
<main role="main">
	<!-- section -->
	<section>
		<?php
		/**
		 * @todo pull this all from Theme Options
		 */
		?>
		<div class="homepage-large-text">
			<h1>Mobile & Web Development</h1>
			<p>Mobile Apps built with React Native for IOS and Android.</p>
			<p>WordPress Themes and Plugins.</p>
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

