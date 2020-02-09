<?php get_header(); ?>

<!-- .primary -->
<section class="primary">
    <div class="container container-flex">
        <!-- main content -->
        <main>
            <div class="container">
                <div class="breadcrumb">
                    Home / News /
                </div>
            </div>
            <div class="archive-loop">

                <?php if( have_posts() ): while( have_posts() ) : the_post(); ?>

                <!-- a loop -->
                <div class="archive-item">
                    <header class="content-header">
                        <div class="title-block">
                            <h1><a href="#"><?php the_title(); ?></a></h1>
                            <time class="pubdate">2018/5/20</time>
                            <div class="tag">
                                <span>タグ1</span><span>タグ2</span><span>タグ3</span>
                            </div>
                        </div>
                        <div class="post-thumb">
                            <img src="images/post-thumbnail5.jpg" alt="">
                        </div>
                    </header>
                    <div class="excerpt">
                        <?php the_excerpt(); ?>
                    </div>
                </div>
                <!-- /a loop -->

                <?php endwhile; else: ?>

                <?php endif; ?>

            </div>
        </main>
        <!-- /main content -->

        <?php get_sidebar(); ?>
    </div>
</section>
<!-- /.primary -->

<?php get_footer(); 