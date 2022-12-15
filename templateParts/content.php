<div class="post">
    <h2>
        <a href="<?php the_permalink(); ?>">
            <?php the_title();?>
        </a>
    </h2>
    <small><?php the_date()?> by <?php the_author_posts_link(); ?></small>
    <p><?php the_excerpt(); ?></p>
    <p>Posted in <?php the_category(', '); ?></p>
</div>