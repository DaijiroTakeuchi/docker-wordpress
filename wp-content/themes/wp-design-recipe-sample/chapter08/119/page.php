<?php get_header(); ?>

<!-- .primary -->
<section class="primary">
    <div class="container">
        <!-- main content -->
        <main>

            <?php if( have_posts() ): while( have_posts() ) : the_post(); ?>
            
            <article class="content-wrapper">
                <header class="content-header">
                    <div class="title-block">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="page-hero">
                        <?php
                        if(has_post_thumbnail()){
                            the_post_thumbnail('page_hero');
                        }
                        ?>
                    </div>
                </header>
                <div class="content">
                    <?php the_content(); ?>
                </div>
            </article>

            <?php endwhile; else: ?>

            <?php endif; ?>
            
        </main>
        <!-- /main content -->

    </div>
</section>
<!-- /.primary -->

<?php get_footer();