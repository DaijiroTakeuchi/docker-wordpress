<?php
/**
 * 汎用的なコメントテンプレート
 *
 * @package WordPress
 * @subpackage kids-programming
 * @since 1.0
 * @version 1.0
 */
?>


<div id="comments" class="comments-area">

    <?php 
    comment_form();
    if( have_comments() ) : ?>

    <p><!-- comments number -->
        <?php comments_number(); ?>
    </p>

    <ol class="comment-list">
        <?php wp_list_comments(); ?>
    </ol>

    <?php the_comments_pagination(); ?>

    <?php endif; // have_comments ?>

    <?php if (!comments_open()): ?>

    <p class="no-comments"><?php echo 'コメントの受付は終了しました。'; ?></p>

    <?php endif; ?>

</div><!-- #comments -->