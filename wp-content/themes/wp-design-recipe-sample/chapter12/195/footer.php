<footer class="page-footer">
    <div class="container">

        <?php 
        $args = array(
            'theme_location' => 'footer_nav',
            'container' => 'nav',
            'container_class' => 'footer-nav',
            'container_id' => '',
            'before' => '<i class="fas fa-caret-right"></i>',
        );
        wp_nav_menu($args);
        ?>
        
        <div class="copyright"><small>©20xx WordPress Design. All rights reserved.</small></div>
    </div>
</footer><!-- /footer -->

<?php wp_footer(); ?>
</body>
</html>