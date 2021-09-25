<div class="tutorials-archive-outer">

    <div class="new-max-width">

        <div class="tutorials-archive-wrap">

            <?php if ( have_posts() ) {

                while ( have_posts() ) {

                    the_post(); ?>
                        <div class="single-tutorial">
                           <a href="<?php the_permalink(); ?>">
                              <h2><?php the_title(); ?></h2>
                            </a>
                            <p>
                              <?php the_excerpt(); ?>
                            </p>
                        </div>
                <?php }

            } ?>

        </div>

    </div>

</div>
