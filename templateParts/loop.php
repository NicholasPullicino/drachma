<?php
    echo '<h2>'.__($args['section_title']).'</h2>';
    if (have_posts()) : while(have_posts()) : the_post();
?>

<?php

    get_template_part('templateParts/content');
    endwhile;

    the_posts_pagination( array(
        'mid_size' => 2,
        'prev_text' => 'Prev',
        'next_text' => 'Next'
    ));

else: echo'<p> Sorry no posts found </p>';
endif;
?>