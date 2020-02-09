<footer class="page-footer">
    <div class="container">
        <?php
        $args = array(
            'theme_location' => 'footer_nav',
            'container' => 'nav',
            'container_class' => 'footer-nav',
            'container_id' => '',
            'menu_class' => 'footer_menu',
            'menu_id' => 'footer_menu',
        );
        wp_nav_menu($args);
        ?>
        ...
    </div>
</footer>