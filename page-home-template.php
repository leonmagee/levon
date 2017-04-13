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

                    <div class="tutorial-homepage-wrap">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="tutorial-excerpt">
							<?php //the_excerpt(); ?>
							<?php html5wp_excerpt( 'html5wp_index', 'tutorial_more_text' ); // Build your custom callback length in functions.php ?>
                        </div>
                    </div>

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
	            tech_loop::output_icons(null);
	            ?>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>

