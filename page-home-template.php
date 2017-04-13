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
		 * Homepage Sections
		 */
		?>
        <div class="homepage-section">
           <h1 class="homepage-section-title">Work / Projects</h1>
            <?php
            /**
            * Products Loop
            */
            get_template_part( 'lib/projects_loop' );
            ?>
        </div>

        <div class="homepage-section">
            <h1 class="homepage-section-title">Tutorials</h1>
			<?php
			/**
			 * Tutorials Links
			 */
			//get_template_part( 'lib/projects_loop' );
			?>
        </div>

        <div class="homepage-section">
            <h1 class="homepage-section-title">Technologies</h1>
			<?php
			/**
			 * Tech Icons
			 */
			//get_template_part( 'lib/projects_loop' );
			?>
        </div>



	</section>

</main>

<?php get_footer(); ?>

