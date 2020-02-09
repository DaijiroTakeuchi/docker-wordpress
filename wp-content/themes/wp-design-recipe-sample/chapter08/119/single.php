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
                        <time class="pubdate"><?php echo get_the_date('Y/m/d'); ?></time>
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