<?php get_header(); ?>

<section class="primary">
    <div class="container">

        <!-- .sidebar -->
        <?php get_sidebar('left'); ?>
        <!-- /.sidebar -->
        
        <!-- main content -->
        <main>

            <h2><?php the_archive_title(); ?></h2>

            <?php if( have_posts() ): while( have_posts() ) : the_post(); ?>

            <article class="content-wrapper">
                <header class="content-header">
                    <div class="title-block">
                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        <time class="pubdate"><?php echo get_the_date('Y/m/d'); ?> <?php echo get_the_time('H:i'); ?></time>
                        <div class="tag">
                            <?php the_tags('<span class="tag-item">', '</span> <span class="tag-item">', '</span>'); ?>
                        </div>
                        <p>テンプレート：archive.php</p>
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

        <!-- .sidebar -->
        <?php get_sidebar('right'); ?>
        <!-- /.sidebar -->
    </div>
</section><!-- /.primary -->

<?php get_footer();