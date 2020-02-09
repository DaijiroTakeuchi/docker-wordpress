<?php get_header(); ?>

<!-- .primary -->
<section class="primary">
    <div class="container container-flex">
        <!-- main content -->
        <main>
            <div class="archive-loop">

                <?php if( have_posts() ): while( have_posts() ) : the_post(); ?>

                <!-- a loop -->
                <div class="archive-item">
                    <header class="content-header">
                        <div class="title-block">
                            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                            <time class="pubdate"><?php echo get_the_date('Y/m/d'); ?> <?php echo get_the_time('H:i'); ?></time>
                            <div class="tag">
                                <?php the_tags('<span class="tag-item">', '</span> <span class="tag-item">', '</span>'); ?>
                            </div>
                            <div class="category">
                                <?php the_category(); ?>
                            </div>
                        </div>
                        <div class="post-thumb">
                            <?php
                            if(has_post_thumbnail()){
                                the_post_thumbnail('thumbnail');
                            }
                            ?>
                        </div>
                    </header>
                    <div class="excerpt">
                        <?php the_excerpt(); ?>
                    </div>
                </div>
                <!-- /a loop -->

                <?php endwhile; else: ?>

                <div class="archive-item">
                    <div class="excerpt">
                        <p>投稿はありません。</p>   
                    </div>
                </div>

                <?php endif; ?>

            </div>
        </main>
        <!-- /main content -->

        <?php get_sidebar(); ?>
    </div>
</section>
<!-- /.primary -->

<?php get_footer(); 