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
            <div class="archive-loop">
                <?php if( have_posts() ): while( have_posts() ) : the_post(); ?>

                <!-- a loop -->
                <div class="archive-item">
                    <header class="content-header">
                        <div class="title-block">
                            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                            <time class="pubdate"><?php echo get_the_date(); ?></time>
                            <div class="tag">
                                <?php 
                                the_tags('<span>', '</span> <span>', '</span>');
                                 ?>
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
                    <div class="excerpt">
                        <?php the_excerpt(); ?>
                    </div>
                </div>
                <!-- /a loop -->

                <?php endwhile; else: ?>

                <?php endif; // main loop ?>

                <?php
                $args = array(
                    'mid-size' => 1,
                    'prev_text' => '«',
                    'next_text' => '»',
                    'screen_reader_text' => 'ナビゲーション'
                );
                the_posts_pagination($args); ?>

            </div><!-- /.archive-loop -->
        </main>
        <!-- /main content -->

        <?php get_sidebar(); ?>
        
    </div>
</section><!-- /.primary -->

<?php get_footer();