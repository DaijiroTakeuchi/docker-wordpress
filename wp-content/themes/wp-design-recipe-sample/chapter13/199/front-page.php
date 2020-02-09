<?php get_header(); ?>

<section class="primary">
    <div class="container">
        <!-- main content -->
        <main>

            <p><b>テンプレート：front-page.php</b></p>

            <article class="content-wrapper">

            <?php if( have_posts() ): while( have_posts() ) : the_post(); ?>

                <p>メインループの表示</p>
                <header class="content-header">
                    <div class="title-block">
                        <h1><?php the_title(); ?></h1>
                        <time class="pubdate"><?php echo get_the_date(); ?></time>
                    </div>
                </header>
                <div class="content">
                    <?php the_content(); ?>
                </div>

            <?php endwhile; else: ?>

                <p>該当の記事はありません。</p>
                    
            <?php endif; ?>

            </article>

            <!-- ここからサブループ -->

            <article class="content-wrapper">
                <p>サブループの表示</p>

            <?php 
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 2,
            );
            $new_query = new WP_Query($args);
            if($new_query->have_posts()): while($new_query->have_posts()): $new_query->the_post(); ?>

                <header class="content-header">
                    <div class="title-block">
                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        <time class="pubdate"><?php echo get_the_date(); ?></time>
                    </div>
                </header>
                <div class="content">
                    <?php the_excerpt(); ?>
                </div>

            <?php endwhile;
            wp_reset_postdata();
            else: ?>

                <p>投稿はありません。</p>

            <?php endif; ?>

            </article>
            
        </main>
        <!-- /main content -->

    </div>
</section><!-- /.primary -->

<?php get_footer();