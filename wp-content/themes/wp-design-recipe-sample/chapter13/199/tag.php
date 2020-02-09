<?php get_header(); ?>

<section class="primary">
    <div class="container">
        <!-- main content -->
        <main>

            <h2><?php the_archive_title(); ?>の一覧</h2>

            <?php if( have_posts() ): while( have_posts() ) : the_post(); ?>

            <article class="content-wrapper">
                <header class="content-header">
                    <div class="title-block">
                        ...
                        <p>テンプレート：tag.php</p>
                    </div>
                </header>
                <div class="content">
                    <?php the_excerpt(); ?>
                </div>
            </article>

            <?php endwhile; else: ?>
            ...
            <?php endif; ?>
            ...
        </main>
        <!-- /main content -->

        <!-- .sidebar -->
        <?php get_sidebar(); ?>
        <!-- /.sidebar -->
    </div>
</section><!-- /.primary -->

<?php get_footer();