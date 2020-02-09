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
                        <p>テンプレート：single.php</p>
                    </div>
                </header>
                <div class="content">
                    <?php the_content(); ?>
                    <div class="author-profile">
                        <h3>記事作成：<?php the_author_meta('display_name'); ?></h3>
                        <div class="author-description">
                            <?php echo get_avatar(get_the_author_meta('ID'), 80); ?>
                            <p><?php the_author_meta('description'); ?></p>
                        </div>
                        <p><?php the_author_posts_link(); ?>の記事一覧</p>
                    </div>
                </div>
            </article>

            <?php endwhile; else: ?>

            <article class="content-wrapper">
                <p>該当の記事はありません。</p>
            </article>
                    
            <?php endif; ?>

        </main>
        <!-- /main content -->

        <?php get_sidebar(); ?>

    </div>
</section>
<!-- /.primary -->

<?php get_footer();