<div class="post">
    <h2> 
        <!-- slug in URL -->
        <a href="<?php the_permalink(); ?>">
        <?php the_title() ?></a>
    </h2>

            <!-- date and author -->
            <small> <?php the_date()?> by <?php the_author_posts_link();?> </small>
                        
            <!-- 3 dots (...) - not including all the description -->
            <p> <?php the_excerpt(); ?></p>

            <!-- displays list of categories that are linked with this post. The comma is to seperate each category. -->
            <p> Posted in <?php the_category(',');?> </p>
</div>