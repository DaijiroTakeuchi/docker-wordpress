<?php get_header(); ?>

<section class="primary">
    <div class="container">
        <!-- main content -->
        <main>
            
            <p>テンプレート：author.php</p>

            <div class="author-profile">
                <h3><?php the_author_meta('display_name'); ?></h3>
                <div class="author-description">
                    <?php echo get_avatar(get_the_author_meta('ID'), 80); ?>
                    <p><?php the_author_meta('description'); ?></p>
                </div>
            </div>

            <?php if( have_posts() ): while( have_posts() ) : the_post(); ?>

            <article class="content-wrapper">
                <header class="content-header">
                    <div class="title-block">
                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    </div>
                </header>
                <div class="content">
                    <?php the_excerpt(); ?>
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

        <!-- .sidebar -->
        <?php get_sidebar(); ?>
        <!-- /.sidebar -->
    </div>
</section><!-- /.primary -->

<?php get_footer();