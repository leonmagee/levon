<?php
/**
 * Template Name: Homepage
 */
require_once( 'lib/class-tech-loop.php' );

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
		 * Homepage Sections
		 */
		?>
        <div class="homepage-section">
            <h1 class="homepage-section-title solid-bg">Projects</h1>
			<?php
			/**
			 * Products Loop
			 */
			get_template_part( 'lib/projects_loop' );
			?>
        </div>

        <div class="homepage-section">
            <h1 class="homepage-section-title solid-bg">Tutorials</h1>

            <div class="homepage-outer-tutorial">
				<?php
				/**
				 * Tutorial snippets
				 */

				$args = array( 'post_type' => 'tutorial' );

				$tutorial_query = new WP_Query( $args );

				while ( $tutorial_query->have_posts() ) {

					$tutorial_query->the_post(); ?>

                    <a href="<?php the_permalink(); ?>">
                        <div class="tutorial-homepage-wrap">
                            <div class="title-wrap">
                                <h2><?php the_title(); ?></h2>
                            </div>
							<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail();
							} ?>
                        </div>
                    </a>

				<?php }

				wp_reset_postdata();
				?>


            </div>

        </div>

        <div class="homepage-section">
            <h1 class="homepage-section-title solid-bg">Technologies</h1>
            <div class="homepage-tech-icons">
				<?php
				/**
				 * Tech Icons
				 */
				tech_loop::output_icons( null );
				?>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>

