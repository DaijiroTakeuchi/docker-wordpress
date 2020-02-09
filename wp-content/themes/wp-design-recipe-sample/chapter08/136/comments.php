<div id="comments" class="comments-area">

    <?php 
    comment_form();
    if( have_comments() ) : ?>

    <p>
        <?php comments_number(); ?>
    </p>

    <ol class="comment-list">
        <?php wp_list_comments(); ?>
    </ol>

    <?php the_comments_pagination(); ?>
    <?php endif; // have_comments ?>

</div><!-- #comments -->