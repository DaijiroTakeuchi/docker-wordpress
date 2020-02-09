<?php get_header(); ?>

<!-- .primary frontpage -->
<section class="primary">

    <section class="hero">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hero-image.jpg" alt="">
    </section>

    <div class="container">
        <!-- main content -->
        <main>
        
            <section class="feature">
                <div class="feature-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/feature1-pic.jpg" class="feature-figure" alt="">
                    <h3>季節のデザート</h3>
                    <p>イチゴ、さくらんぼ、メロン、栗、いちじくなど、旬のフルーツを使ったデザートをご用意しております。</p>
                </div>

                <div class="feature-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/feature2-pic.jpg" class="feature-figure" alt="">
                    <h3>ランチメニュー</h3>
                    <p>煮込みハンバーグやハヤシライスなどの定番メニューのほか、日替わりランチもございます。</p>
                </div>

                <div class="feature-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/feature3-pic.jpg" class="feature-figure" alt="">
                    <h3>ドリンクメニュー</h3>
                    <p>コーヒーはこだわりの自家焙煎。喫茶のみのご利用も歓迎しておりますので、ごゆっくりとどうぞ。</p>
                </div>
            </section>
            
            <?php if( have_posts() ): while( have_posts() ) : the_post(); ?>
            
            <section class="catchcopy">
                <?php the_content(); ?>
            </section>

            <?php endwhile; else: ?>

            <?php endif; ?>


            <section class="news">
                <h2>News</h2>
                <ul>
                    <li><span class="news-date">2018/5/20</span>ニュースの抜粋がここに入ります。ニュースの抜粋がここに入ります。ニュースの抜粋がここに入ります。</li>
                    <li><span class="news-date">2018/5/10</span>ニュースの抜粋がここに入ります。ニュースの抜粋がここに入ります。ニュースの抜粋がここに入ります。ニュースの抜粋がここに入ります。</li>
                    <li><span class="news-date">2018/5/3</span>ニュースの抜粋がここに入ります。ニュースの抜粋がここに入ります。</li>
                </ul>
            </section>
            
        </main>
        <!-- /main content -->
    </div>
</section>
<!-- /.primary frontpage -->

<?php get_footer();