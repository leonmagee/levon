<div class="tutorials-archive-outer">

    <div class="new-max-width">

        <div class="tutorials-archive-inner">

            <?php if ( have_posts() ) {

                while ( have_posts() ) {

                    the_post(); ?>

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

            } ?>

        </div>

    </div>

</div>