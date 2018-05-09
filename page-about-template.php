<?php 

/**
* Template Name: About Page
*/
require_once( 'lib/class-tech-loop.php' );

get_header(); ?>

<main role="main" id="about-page">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class('page-content'); ?>>

			<div class="new-max-width">

				<?php the_content(); ?>

			</div>

		</article>

	<?php endwhile; endif; ?>

	<div class="new-max-width">

		<div class="tech-icons-wrap">

			<?php tech_loop::output_icons( null ); ?>

		</div>

	</div>

</main>

<?php get_footer();
