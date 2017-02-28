<?php get_header(); ?>

<main role="main">
	<!-- section -->
	<section>

		<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>

			<!-- article -->
			<article class="project-single">

				<!-- post title -->
				<h1><?php the_title(); ?></h1>
				<!-- /post title -->

				<div class="project-bio">
					<?php the_content(); // Dynamic Content ?>
				</div>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

			</article>
			<!-- /article -->

		<?php endif; ?>

	</section>
	<!-- /section -->
</main>

<?php get_footer(); ?>
