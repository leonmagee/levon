<div class="projects-wrap">
	<?php
	/**
	 * Projects Section
	 */
	$args           = array( 'post_type' => 'project' );
	$projects_query = new WP_Query( $args );
	while ( $projects_query->have_posts() ) {
		$projects_query->the_post();
		$gallery = get_field( 'gallery' );
		if ( has_post_thumbnail() ) {
			$background_image = get_the_post_thumbnail_url();
		} else {
			$background_image = $gallery[0]['sizes']['large'];
		}
		if ( $gallery || has_post_thumbnail() ) {
			?>
			<div class="project-item-wrap" style="background-image: url('<?php echo $background_image; ?>');">
				<a href="<?php the_permalink(); ?>">
					<div class="hover-shade">
						<?php if ( $bio = get_field( 'small_bio' ) ) { ?>
							<div class="extra-info">
								<?php echo $bio; ?>
							</div>
						<?php } ?>
					</div>
					<!--				<div class="project-title">-->
					<!--					<h2>--><?php //the_title(); ?><!--</h2>-->
					<!--				</div>-->
				</a>
			</div>
		<?php } ?>
	<?php } ?>
</div>
