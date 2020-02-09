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

            <?php if( have_posts() ): while( have_posts() ) : the_post(); ?>

            <article class="content-wrapper">
                <header class="content-header">
                    <div class="title-block">
                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        <time class="pubdate"><?php echo get_the_date(); ?></time>
                    </div>
                </header>
                <div class="content">
                    <?php the_content(); ?>
                </div>
            </article>

            <?php endwhile; else: ?>

            <?php endif; ?>

            <div class="pagination">
                <div class="prev-article"><?php previous_post_link('%link', '<i class="fas fa-angle-left"></i> %title'); ?></div>
                <div class="next-article"><?php next_post_link('%link', '%title <i class="fas fa-angle-right"></i>'); ?></div>    
            </div>
            
        </main><!-- /main content -->
    </div>
</section><!-- /.primary -->

<?php get_footer();