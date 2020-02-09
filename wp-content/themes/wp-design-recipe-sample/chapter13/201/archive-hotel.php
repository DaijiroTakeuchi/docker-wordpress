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
                <p><strong><?php post_type_archive_title(); ?></strong></p>

                <?php if( have_posts() ): while( have_posts() ) : the_post(); ?>

                <header class="content-header">
                    <div class="title-block">
                        <h1>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h1>
                        <time class="pubdate"><?php echo get_the_date(); ?></time>
                    </div>
                    <div class="post-thumb">
                    <?php
                    if(has_post_thumbnail()):
                        the_post_thumbnail('thumbnail');
                    else: ?>

                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/post-thumbnail.png" alt="">

                    <?php endif; ?>
                    </div>
                </header>
                <div class="excerpt">
                    <?php the_excerpt(); ?>
                </div>
                
                <?php if(get_the_terms(get_the_ID(), 'city') && get_the_terms(get_the_ID(), 'country')): ?>

                <div class="city">
                    <i class="fas fa-map-marker-alt"></i>
                    <?php the_terms(get_the_ID(), 'city'); ?> / <?php the_terms(get_the_ID(), 'country'); ?>
                </div>

                <?php endif; ?>
                    
                <div class="info">
                    <?php get_template_part('partials/hotelinfo'); ?>
                </div>

                <?php endwhile; else: ?>

                <p>投稿はありません</p>

                <?php endif; ?>

                <?php
                $args = array(
                    'mid-size' => 1,
                    'prev_text' => '«',
                    'next_text' => '»',
                    'screen_reader_text' => 'ナビゲーション'
                );
                the_posts_pagination($args); ?>

            </div>
        </main>
        <!-- /main content -->
    </div>
</section><!-- /.primary -->

<?php get_footer();