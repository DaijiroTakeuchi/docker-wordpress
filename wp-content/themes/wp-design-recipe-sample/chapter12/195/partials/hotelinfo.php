<div class="price">
    <?php if(post_custom('price')): ?>

    ¥<?php echo esc_html(post_custom('price')); ?>-

    <?php endif; ?>
</div>
<div class="icons">
    <pre>
    <?php
    var_dump(post_custom('facility'));
    ?>
    </pre>
    <?php
    $post_custom = post_custom('facility');
    if($post_custom):
        foreach ($post_custom as $key => $value):
            if($value == 'breakfast') {
                $image_file = 'icon-breakfast.png';
            }
            if($value == 'wifi') {
                $image_file = 'icon-wifi.png';
            }
            if($value == 'parking') {
                $image_file = 'icon-parking.png';
            }
            if($value == 'nosmoking') {
                $image_file = 'icon-nosmoking.png';
            }

            $image_path = esc_url(get_stylesheet_directory_uri() . '/images/' . $image_file);
    ?>
    
    <img src="<?php echo $image_path; ?>" alt="<?php echo $value; ?>">

    <?php endforeach; endif; ?>
</div>