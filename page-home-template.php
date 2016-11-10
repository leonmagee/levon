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
		 * Projects Section
		 */

		$args = array( 'post_type' => 'project' );

		$projects_query = new WP_Query( $args );

		while ( $projects_query->have_posts() ) {
			$projects_query->the_post();
			$gallery = get_field( 'gallery' );
			?>

			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

			<div class="project-image">
				<img src="<?php echo $gallery[0]['sizes']['large']; ?>"/>
			</div>

		<?php } ?>

	</section>
	<!-- /section -->
</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>

