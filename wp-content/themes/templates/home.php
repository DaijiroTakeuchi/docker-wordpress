<?php get_header(); ?>
<div class="l-background">
    <div class="l-container">
        <div class="l-container__frame">
            <ul class="l-news">
                <li class="l-news__list">
                    <div class="l-news__list_image"
                        style="background-image: url('wp-content/themes/templates/images/test.jpg');"></div>
                    <a class="l-news__list_link" href="<?php echo get_permalink( 17 ); ?>">hoge</a>
                </li>
                <li class="l-news__list">
                    <div class="l-news__list_image"
                        style="background-image: url('wp-content/themes/templates/images/test.jpg');"></div>
                    <?php echo wp_get_attachment_image( 1 ); ?>
                    <a class="l-news__list_link" href="<?php echo get_permalink( 17 ); ?>">hoge</a>
                </li>
                <li class="l-news__list">
                    <div class="l-news__list_image"
                        style="background-image: url('wp-content/themes/templates/images/test.jpg');"></div>
                    <?php echo wp_get_attachment_image( 1 ); ?>
                    <a class="l-news__list_link" href="<?php echo get_permalink( 5 ); ?>">hoge</a>
                </li>
            </ul>

            <div class="l-main">
                <div class="l-post">

                    <?php
                    if (have_posts()) :
                        while (have_posts()) :
                            the_post();
                    ?>

                    <div class="l-post-flame">
                        <div class="l-post-flame__header">
                            <div class="l-post-flame__header_date">
                                <?php echo get_the_date(); ?>
                            </div>
                            <h2 class="l-post-flame__header_heading">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <div class="l-post-flame__header_category">
                                <?php the_category(', '); ?>
                            </div>
                        </div>
                        <div class="l-post-flame__content">
                            <?php if (has_post_thumbnail()) : ?>
                            <?php
                                $titlebg = "style=''";
                                if ( has_post_thumbnail() ) {
                                    $imgurl = wp_get_attachment_url( get_post_thumbnail_id() );
                                    $titlebg = "style='background-image:url(".$imgurl.");'";
                                }
                            ?>
                            <div class="l-post-flame__content_image" <?php echo $titlebg; ?>>
                                <?php else: ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.png" width="100"
                                    height="100">
                                <?php endif; ?>
                            </div>
                            <div class="post-body">
                                <?php the_excerpt(); ?>
                            </div>
                            <div>
                                <a href="<?php the_permalink(); ?>">READ MORE</a>
                            </div>
                        </div>
                    </div>

                    <?php
                    endwhile;
                    else:
                    ?>

                    <p>記事はありません！</p>

                    <?php endif;?>

                    <div class="navigation">
                        <div class="prev"><?php previous_posts_link(); ?></div>
                        <div class="next"><?php next_posts_link(); ?></div>
                    </div>
                    <?php get_sidebar(); ?>
                </div>
                <p>home</p>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>