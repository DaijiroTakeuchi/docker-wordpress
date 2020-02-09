<?php get_header(); ?>

<section class="primary">
    <div class="container">

        <?php get_sidebar('left'); ?>

        <!-- main content -->
        <main>

            <?php if( have_posts() ): while( have_posts() ) : the_post(); ?>

            <article class="content-wrapper">
                <header class="content-header">
                    <div class="title-block">
                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        <p>テンプレート：front-page.php</p>
                    </div>
                </header>
                <div class="content">
                    <?php the_content(); ?>
                </div>
            </article>

            <?php endwhile; else: ?>

            <article class="content-wrapper">
                <p>該当の記事はありません。</p>
            </article>
                    
            <?php endif; ?>

            <?php
            $args = array(
                'mid-size' => 1,
                'prev_text' => '«',
                'next_text' => '»'
            );
            the_posts_pagination($args); ?>
            
        </main>
        <!-- /main content -->

        <?php get_sidebar('right'); ?>

    </div>
</section><!-- /.primary -->

<?php get_footer();