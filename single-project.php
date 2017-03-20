<?php get_header();

require_once( 'lib/class-tech-loop.php' ); ?>

<main role="main">
	<!-- section -->
	<section>

		<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>

			<!-- article -->
			<article class="project-single">

				<!-- post title -->
				<h1><?php the_title(); ?></h1>
				<!-- /post title -->

				<div class="project-single-header">

					<div class="project-bio">
						<?php the_content(); // Dynamic Content ?>
					</div>

					<div class="tech">
						<h3>Tech Used</h3>
						<?php $tech = get_field( 'technologies' );
						if ( $tech ) {
							tech_loop::output_icons($tech);
						}
						?>
					</div>

				</div>
				<?php if ( $gallery = get_field( 'gallery' ) ) { ?>
					<div class="project-gallery">
						<?php foreach ( $gallery as $image ) { ?>
							<div class="gallery-image">
								<a rel="lightbox" href="<?php echo $image['url']; ?>">
									<img src="<?php echo $image['sizes']['medium']; ?>"/>
								</a>
							</div>
						<?php } ?>
					</div>
				<?php } ?>
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