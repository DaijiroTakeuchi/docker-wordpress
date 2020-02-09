<!-- footer -->
<footer class="page-footer">
    <div class="container">
        <p>
        <?php
        if ( function_exists('the_privacy_policy_link') ) {
            the_privacy_policy_link();
        }
        ?>
        </p>
        <div class="copyright"><small>©20xx WordPress Design. All rights reserved.</small></div>
    </div>
</footer>
<!-- /footer -->

<?php wp_footer(); ?>

</body>
</html>