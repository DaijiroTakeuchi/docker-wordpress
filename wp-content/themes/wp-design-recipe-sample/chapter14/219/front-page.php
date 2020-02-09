<?php get_header(); ?>

<section class="primary">
    
    <section class="hero">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/hero-image.jpg" alt="">
    </section>

    <div class="container">
        <!-- main content -->
        <main>

            <?php get_template_part('partials/sub'); ?>

            <!-- 固定ページ──ホーム -->
            <?php if( have_posts() ): while( have_posts() ) : the_post(); ?>
            
            <section class="catchcopy">
                <h1><?php the_content(); ?></h1>
            </section>

            <?php endwhile; else: ?>
                
            <?php endif; ?>

            <section class="news">
                <h2>News</h2>
                <!-- Newsカテゴリーの一覧表示 -->
                <ul>

                <?php 
                $args = array(
                    'post_type' => 'post',
                    'category_name' => 'news',
                    'posts_per_page' => 3,
                );
                $new_query = new WP_Query($args);
                if($new_query->have_posts()): while($new_query->have_posts()): $new_query->the_post();
                ?>
                    
                    <li>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <span class="news-date"><?php echo get_the_date(); ?></span>
                        <?php the_excerpt(); ?>
                    </li>
                
                <?php endwhile;
                wp_reset_postdata();
                else: ?>

                    <li>投稿はありません。</li>

                <?php endif; ?>

                </ul>
            </section>
            
        </main>
        <!-- /main content -->
    </div>
</section><!-- /.primary -->

<?php get_footer();