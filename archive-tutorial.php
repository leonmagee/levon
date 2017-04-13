<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1 class="solid-bg"><?php _e( 'Tutorials', 'html5blank' ); ?></h1>

			<?php get_template_part('loop-tutorials-archive'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer();
