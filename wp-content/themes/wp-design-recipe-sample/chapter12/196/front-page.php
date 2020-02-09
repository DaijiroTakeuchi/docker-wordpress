<?php get_header(); ?>

<section class="primary">

    <section class="hero">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hero-image.jpg" alt="">
    </section>

    <div class="container">
        <!-- main content -->
        <main class="main">
            
            <h2><i class="fas fa-building"></i>おすすめのホテル</h2>
            <section class="feature">
            <?php
            $args = array(
                'post_type' => 'hotel',
                'posts_per_page' => 8,
            );
            $hotel_query = new WP_Query($args);
            if( $hotel_query->have_posts() ) : while( $hotel_query->have_posts() ) : $hotel_query->the_post();
            ?>
                      
            <div class="feature-item">
                <?php
                // アイキャッチ画像
                if(has_post_thumbnail()):
                    the_post_thumbnail();
                else: ?>

                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/post-thumbnail.png" alt="">

                <?php endif; ?>
                <div class="feature-txt">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <span class="price">¥10,450</span>
                    <p><?php the_excerpt(); ?></p>
                </div>
            </div>

            <?php endwhile;
            wp_reset_postdata();
             else : ?>

            <p>投稿がありません。</p>

            <?php endif; ?>
            </section>

        </main>
        <!-- /main content -->
    </div>
</section><!-- /.primary -->

<?php get_footer();