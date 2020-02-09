<!-- footer -->
<footer class="page-footer">
    <div class="container">
        <nav class="footer-nav">
            <ul>
                <li><a href="<?php echo esc_url(home_url()); ?>">ホーム</a></li>
                <li><a href="<?php echo get_post_type_archive_link('foodmenu'); ?>">メニュー</a></li>
                <li>
                    <?php 
                    $cat = get_category_by_slug('news');
                    $cat_id = $cat->term_id;
                    $cat_link = get_category_link($cat_id);
                    ?>
                    <a href="<?php echo esc_url($cat_link); ?>">お知らせ</a>
                </li>
                <li><a href="<?php echo home_url('/contact/'); ?>">お問い合わせ</a></li>
            </ul>
        </nav>
        <div class="copyright"><small>©20xx WordPress Design. All rights reserved.</small></div>
    </div>
</footer><!-- /footer -->

<?php wp_footer(); ?>
</body>
</html>