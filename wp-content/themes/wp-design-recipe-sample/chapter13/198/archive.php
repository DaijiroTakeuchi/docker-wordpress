<?php get_header(); ?>

<section class="primary">
    <div class="container">
        <!-- main content -->
        <main>

            <p><b>テンプレート：archive.php</b></p>

            <?php if( have_posts() ): while( have_posts() ) : the_post(); ?>

            <article class="content-wrapper">
                <header class="content-header">
                    <div class="title-block">
                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        <time class="pubdate"><?php echo get_the_date(); ?></time>
                        <div class="tag">
                            <?php the_tags('<span class="tag-item">', '</span> <span class="tag-item">', '</span>'); ?>
                        </div>
                    </div>
                </header>
                <div class="content">
                    <?php the_excerpt(); ?>
                </div>
            </article>

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
            
        </main>
        <!-- /main content -->
    </div>
</section><!-- /.primary -->

<?php get_footer();