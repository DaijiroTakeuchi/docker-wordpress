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
                        <h1>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <span class="h1-archivelink">&raquo;
                                <a href="<?php echo get_post_type_archive_link(get_post()->post_type); ?>">
                                    <?php echo get_post()->post_type; ?>
                                </a>
                            </span>
                        </h1>
                        <time class="pubdate"><?php echo get_the_date(); ?></time>
                    </div>
                    <div class="post-thumb">
                    <?php
                    if(has_post_thumbnail()):
                        the_post_thumbnail('thumbnail');
                    else: ?>

                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/post-thumbnail.png" alt="">

                    <?php endif; ?>
                    </div>
                </header>
                <div class="content">
                    <div class="photo">
                        <?php
                        $img_attr = wp_get_attachment_image_src(post_custom('image'), 'full');
                        if($img_attr):
                        ?>

                        <img src="<?php echo $img_attr[0]; ?>">

                        <?php endif; ?>
                    </div>
                    
                    <?php if(get_the_terms(get_the_ID(), 'city') && get_the_terms(get_the_ID(), 'country')): ?>

                    <div class="city">
                        <i class="fas fa-map-marker-alt"></i>
                        <?php the_terms(get_the_ID(), 'city'); ?> / <?php the_terms(get_the_ID(), 'country'); ?>
                    </div>

                    <?php endif; ?>

                    <div class="info">
                        <?php get_template_part('partials/hotelinfo'); ?>
                    </div>
                    
                    <?php the_content(); ?>
                </div>
            </article>

            <?php endwhile; else: ?>

            <p>投稿はありません</p>

            <?php endif; ?>

            <div class="pagination">
                <div class="prev-article"><?php previous_post_link('%link', '<i class="fas fa-angle-left"></i> %title'); ?></div>
                <div class="next-article"><?php next_post_link('%link', '%title <i class="fas fa-angle-right"></i>'); ?></div>    
            </div>
            
        </main><!-- /main content -->
    </div>
</section><!-- /.primary -->

<?php get_footer();