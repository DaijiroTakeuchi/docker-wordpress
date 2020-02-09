<?php get_header(); ?>

<section class="primary">
    <div class="container">

        <!-- .sidebar -->
        <aside class="sidebar leftcol">
            <div class="sidebar-block">
                <h3>サイドバー</h3>
                <p></p>
            </div>
        </aside><!-- /.sidebar -->

        <!-- main content -->
        <main>

            <h2>
            <?php
            if(is_category()) {
                single_cat_title();
            }
            ?>
            </h2>

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

                <?php
                $args = array(
                    'mid-size' => 1,
                    'prev_text' => '«',
                    'next_text' => '»'
                );
                the_posts_pagination($args); ?>

            </div>
        </main>
        <!-- /main content -->

        <!-- .sidebar -->
        <aside class="sidebar leftcol">
            <div class="sidebar-block">
                <h3>サイドバー</h3>
                <p></p>
            </div>
        </aside><!-- /.sidebar -->

    </div>
</section><!-- /.primary -->

<?php get_footer();