<?php get_header(); ?>

<section class="primary">
    <div class="container">
        <!-- main content -->
        <main>

            <p><b>テンプレート：home.php</b></p>

            <div class="archive-loop">

                <?php if( have_posts() ): while( have_posts() ) : the_post(); ?>
                <!-- a loop -->
                <header class="content-header">
                    <div class="title-block">
                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        <time class="pubdate"><?php echo get_the_date(); ?></time>
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