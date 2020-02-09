<?php get_header(); ?>

<!-- .primary -->
<section class="primary">
    <div class="container container-flex">
        <!-- main content -->
        <main>

            <h2>検索結果</h2>
            
            <div class="archive-loop">
                <div class="search-form-block">
                    <?php get_search_form(); ?>
                </div>

                <?php if( have_posts() ): while( have_posts() ) : the_post(); ?>

                <div class="archive-item">
                    <header class="content-header">
                        <div class="title-block">
                            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                            <time class="pubdate"><?php echo get_the_date('Y/m/d'); ?> <?php echo get_the_time('H:i'); ?></time>
                            <div class="tag">
                                <?php the_tags('<span class="tag-item">', '</span> <span class="tag-item">', '</span>'); ?>
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

                <?php endwhile; else: ?>

                <div class="archive-item">
                    <div class="excerpt">
                        <p>投稿はありません。</p>   
                    </div>
                </div>

                <?php endif; ?>

                <?php
                $args = array(
                    'mid-size' => 1,
                    'prev_text' => '«',
                    'next_text' => '»'
                );
                the_posts_pagination($args); ?>

            </div>
        </main>
        <!-- /main content -->

        <?php get_sidebar(); ?>
    </div>
</section>
<!-- /.primary -->

<?php get_footer(); 