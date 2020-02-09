<?php get_header(); ?>

<section class="primary">
    <div class="container">
        <!-- main content -->
        <main>
            <div class="archive-loop">

                <p>テンプレート：home.php</p>

                <?php if( have_posts() ): while( have_posts() ) : the_post(); ?>
                <!-- a loop -->
                <header class="content-header">
                    <div class="title-block">
                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    </div>
                </header>
                <div class="excerpt">
                    <?php the_excerpt(); ?>
                </div>
                <!-- /a loop -->

                <?php endwhile; else: ?>

                <article class="content-wrapper">
                    <p>該当の記事はありません。</p>
                </article>
                        
                <?php endif; ?>

            </div>
        </main>
        <!-- /main content -->
    </div>
</section><!-- /.primary -->

<?php get_footer();