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
		if ( $gallery ) {
			?>
			<div class="project-item-wrap">
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
					<div class="project-image">
						<img src="<?php echo $gallery[0]['sizes']['large']; ?>"/>
					</div>
				</a>
			</div>
		<?php } ?>
	<?php } ?>
</div>
