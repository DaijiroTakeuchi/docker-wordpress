<?php get_header(); ?>

<section class="primary">
    <div class="container container-flex">
        <!-- main content -->
        <main>

            <?php if( have_posts() ): while( have_posts() ) : the_post(); ?>

            <article class="content-wrapper">
                <header class="content-header">
                    <div class="title-block">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="post-thumb">
                        <div class="post-thumb">
                            <?php
                            if(has_post_thumbnail()):
                                the_post_thumbnail('thumbnail');
                            else: ?>

                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/post-thumbnail.png" alt="">

                            <?php endif; ?>
                        </div>
                    </div>
                </header>
                <div class="content">
                    <?php the_content(); ?>
                </div>
            </article>

            <?php endwhile; else: ?>

            <?php endif; ?>

        </main>
        <!-- /main content -->

        <?php get_sidebar(); ?>

    </div>
</section>
<!-- /.primary -->

<?php get_footer();