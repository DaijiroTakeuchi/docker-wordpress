<?php get_header(); ?>

<section class="primary">
    <div class="container container-flex">
        <!-- main content -->
        <main>

            <?php if( have_posts() ): while( have_posts() ) : the_post(); ?>

            <article class="content-wrapper">
                
                <header class="content-header">
                    <div class="title-block">
                        <h1><?php the_title(); ?></h1>
                    </div>
                </header>
                <div class="content">
                    <?php the_content(); ?>
                </div>

            </article>

            <?php endwhile; else: ?>

            <?php endif; ?>

            <div class="pagination">
                <div class="prev-article"><i class="fas fa-angle-left"></i><span>前の記事のタイトル</span></div>
                <div class="next-article"><span>次の記事のタイトル</span><i class="fas fa-angle-right"></i></div>  
            </div>

        </main>
        <!-- /main content -->

        <?php get_sidebar(); ?>

    </div>
</section><!-- /.primary -->

<?php get_footer();