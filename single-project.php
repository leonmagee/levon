<?php get_header();

require_once( 'lib/class-tech-loop.php' ); ?>

<main role="main">
    <!-- section -->
    <section>

		<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>

            <!-- article -->
            <article class="project-single">

                <!-- post title -->
                <h1 class="solid-bg"><?php the_title(); ?></h1>
                <!-- /post title -->

                <div class="project-single-header">

                    <div class="project-bio">
						<?php the_content(); // Dynamic Content ?>
						<?php
						if ( $site_url = get_field( 'url' ) ) {
							echo '<h2><a target="_blank" href="' . $site_url . '">Go to Site</a></h2>';
                       } else {
							echo '<h3>This project is currently being developed</h3>';
						}

						?>
                    </div>

                    <div class="tech">
                        <h3>Tech Used</h3>
                        <div class="tech-inner">
							<?php $tech = get_field( 'technologies' );
							if ( $tech ) {
								tech_loop::output_icons( $tech );
							}
							?>
                        </div>
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
