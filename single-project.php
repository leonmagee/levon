<?php get_header();

require_once( 'lib/class-tech-loop.php' ); ?>

<main role="main">

  <?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>

    <article class="project-single">

        <div class="new-max-width">

            <div class="project-header">
                <h1><?php the_title(); ?></h1>
                <div class="tech-wrap">
                    <?php $tech = get_field( 'technologies' );
                    if ( $tech ) {
                        tech_loop::output_icons( $tech );
                    }
                    ?>
                </div>
            </div>

            <div class="project-single-content">

                <div class="project-bio">

                  <?php the_content(); ?>

                  <div class="visit-link-wrap">

                     <?php 
                     if ( $site_url = get_field( 'url' ) ) {
                         echo '<h2><a target="_blank" href="' . $site_url . '">Visit Site</a></h2>';
                     } else {
                         echo '<h3>This project is currently being developed</h3>';
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

        </div>

    </article>

<?php endwhile; endif; ?>

</main>

<?php get_footer();
