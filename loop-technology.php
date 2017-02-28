<technologies>

	<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>

		<div class="tech-item">

			<?php if ( $icon_class = get_field( 'font_icon_class' ) ) {
				//var_dump( $icon_class );
				?>
				<div class="tech-icon"><i class="flaticon <?php echo $icon_class; ?>"></i></div>
			<?php } ?>

			<div class="tech-name"><?php the_title(); ?></div>

		</div>

	<?php endwhile; endif; ?>

</technologies>
