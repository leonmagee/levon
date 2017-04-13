<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="project-archive-wrap">

			<h1 class="solid-bg"><?php _e( 'Work', 'html5blank' ); ?></h1>

            <?php get_template_part( 'lib/projects_loop' ); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer();
