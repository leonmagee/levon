<?php

/**
 * Class tech_loop
 */
class tech_loop {

	public static function output_icons( $id_array ) { ?>

		<technologies>

			<?php
			$args = array( 'post_type' => 'technology', 'post__in' => $id_array );

			$technology_query = new WP_Query( $args );

			if ( $technology_query->have_posts() ) :

				while ( $technology_query->have_posts() ) :

					$technology_query->the_post(); ?>

					<div class="tech-item">

						<?php if ( $icon_class = get_field( 'font_icon_class' ) ) {
							?>
							<div class="tech-icon"><i class="flaticon <?php echo $icon_class; ?>"></i></div>
						<?php } ?>

						<div class="tech-name"><?php the_title(); ?></div>

						<div class="pushbottom"></div>

					</div>

				<?php endwhile; endif;

			wp_reset_query();
			?>

		</technologies>


	<?php }
}

?>




