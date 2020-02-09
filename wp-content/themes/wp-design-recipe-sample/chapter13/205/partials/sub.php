<section class="feature">

    <?php 
    $args = array(
        'post_type' => 'foodmenu',
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC',
    );
    $new_query = new WP_Query($args);

    if($new_query->have_posts()):
    while($new_query->have_posts()): $new_query->the_post(); ?>

    <div class="feature-item">
        <a href="<?php the_permalink(); ?>">
        <?php
        if(has_post_thumbnail()){
            the_post_thumbnail();
        }
        ?>
        </a>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <?php the_excerpt(); ?>
    </div>

    <?php endwhile;
    wp_reset_postdata();
    else: ?>

    <?php endif; ?>

</section>