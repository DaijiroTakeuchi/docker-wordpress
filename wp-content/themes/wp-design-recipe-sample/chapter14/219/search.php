<?php get_header(); ?>

<section class="primary">
    <div class="container">
        <!-- main content -->
        <main>
            <div class="breadcrumb">
                <?php 
                if(function_exists('bcn_display')){
                    bcn_display();
                }
                ?>
            </div>
            <div class="archive-loop">
                <?php if( have_posts() ): while( have_posts() ) : the_post(); ?>

                <!-- a loop -->
                <div class="archive-item">
                    <header class="content-header">
                        <div class="title-block">
                            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                            <time class="pubdate"><?php echo get_the_date(); ?></time>
                        </div>
                        <div class="post-thumb">
                            <?php
                            if(has_post_thumbnail()){
                                the_post_thumbnail();
                            }
                            ?>
                        </div>
                    </header>
                    <div class="excerpt">
                        <?php the_excerpt(); ?>
                    </div>
                </div>
                <!-- /a loop -->

                <?php endwhile; else: ?>

                <div class="archive-item">
                    <div class="excerpt">
                        見つかりませんでした。
                    </div>
                </div>

                <?php endif; // main loop ?>

            </div><!-- /.archive-loop -->
        </main>
        <!-- /main content -->
        
    </div>
</section><!-- /.primary -->

<?php get_footer();