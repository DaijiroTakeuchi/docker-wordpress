<?php get_header(); ?>

<section class="primary">
    <div class="container">
        <!-- main content -->
        <main>
            <div class="breadcrumb">
                <?php 
                if(function_exists('bcn_display')){
                    bcn_display();
                }
                ?>
            </div>
            <article class="content-wrapper">
                <?php if( have_posts() ): while( have_posts() ) : the_post(); ?>

                <header class="content-header">
                    <div class="title-block">
                        <h1><?php the_title(); ?></h1>
                        <time class="pubdate"><?php echo get_the_date(); ?></time>
                        <div class="tag">
                            <?php the_tags('<span>', '</span><span>', '</span>'); ?>
                        </div>
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

            <div class="pagination">
                <div class="prev-article"><?php previous_post_link('%link', '<i class="fas fa-angle-left"></i> %title', ); ?></div> 
                <div class="next-article"><?php next_post_link('%link <i class="fas fa-angle-right"></i>', '%title'); ?></div>   
            </div>
            
        </main>
        <!-- /main content -->

        <?php get_sidebar(); ?>
    </div>
</section><!-- /.primary -->

<?php get_footer();