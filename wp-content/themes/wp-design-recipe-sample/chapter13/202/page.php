<?php get_header(); ?>

<section class="primary">
    <div class="container">
        <!-- main content -->
        <main>
            <article class="content-wrapper">
                <?php if( have_posts() ): while( have_posts() ) : the_post(); ?>

                <header class="content-header">
                    <div class="title-block">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="post-thumb">
                        <?php
                        if(has_post_thumbnail()){
                            the_post_thumbnail();
                        }
                        ?>
                    </div>
                </header>
                <div class="content">
                    <?php the_content(); ?>
                    <?php 
                    $options = array(
                        'before' => '<div class="nextpage-nav">',
                        'after' => '</div>',
                        'link_before' => '<span>',
                        'link_after' => '</span>',
                    );
                    wp_link_pages($options); ?>
                </div>

                <?php endwhile; else: ?>

                <?php endif; // main loop ?>
            </article>
            
        </main>
        <!-- /main content -->
    </div>
</section><!-- /.primary -->

<?php get_footer();