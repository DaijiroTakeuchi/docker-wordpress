<?php get_header(); ?>

<section class="primary">
    <div class="container">
        <!-- .sidebar -->
        <?php get_sidebar('left'); ?>
        <!-- /.sidebar -->

        <!-- main content -->
        <main>

            <?php if( have_posts() ): while( have_posts() ) : the_post(); ?>

            <article class="content-wrapper">
                <header class="content-header">
                    <div class="title-block">
                        <h1><?php the_title(); ?></h1>
                        <p>テンプレート：page.php</p>
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
            
        </main>
        <!-- /main content -->

        <!-- .sidebar -->
        <?php get_sidebar('right'); ?>
        <!-- /.sidebar -->
    </div>
</section><!-- /.primary -->

<?php get_footer();