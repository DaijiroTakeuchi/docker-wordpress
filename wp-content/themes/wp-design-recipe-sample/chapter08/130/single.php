<?php get_header(); ?>

<section class="primary">
    <div class="container container-flex">
        <!-- main content -->
        <main>

            <div class="breadcrumb">
                <?php 
                if(function_exists('bcn_display')){
                    bcn_display();
                }
                ?>
            </div>

            <?php if( have_posts() ): while( have_posts() ) : the_post(); ?>

            <article class="content-wrapper">
                <header class="content-header">
                    <div class="title-block">
                        <h1><?php the_title(); ?></h1>
                        <time class="pubdate"><?php echo get_the_date('Y/m/d'); ?> <?php echo get_the_time('H:i'); ?></time>
                        <div class="tag">
                            <?php the_tags('<span class="tag-item">', '</span> <span class="tag-item">', '</span>'); ?>
                        </div>
                    </div>
                    <div class="post-thumb">
                        <?php
                        if(has_post_thumbnail()){
                            $attr = array(
                                'class' => 'single-thumb',
                                'alt' => get_the_title(),
                            );
                            the_post_thumbnail('thumbnail', $attr);
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
            </article>

            <div class="pagination">
                <div class="prev-article">
                    <?php previous_post_link('%link', '<i class="fas fa-angle-left"></i> %title'); ?>
                </div>
                <div class="next-article">
                    <?php next_post_link('%link', '%title <i class="fas fa-angle-right"></i>'); ?>
                </div>
            </div>

            <?php endwhile; else: ?>

            <article class="content-wrapper">
                <p>該当の記事はありません。</p>
            </article>
                    
            <?php endif; ?>

        </main>
        <!-- /main content -->

        <?php get_sidebar(); ?>

    </div>
</section>
<!-- /.primary -->

<?php get_footer();