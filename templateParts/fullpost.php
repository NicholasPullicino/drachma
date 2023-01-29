<div class="container">
    <div class="row">
        <div class="col">
            <main>
                <?php if (have_posts()) : while(have_posts()) : the_post();?>
                <article <?php post_class('pt-4 border'); ?>>
                    <h2>
                        <?php the_title();?>
                    </h2>

                    <?php 
                        $author_id = get_the_author_meta('ID');
                        $author_posts = get_the_author_posts();
                        $author_display = get_the_author();
                        $author_posts_url = get_author_posts_url($author_id);
                        $author_desc = get_the_author_meta('user_description');
                        $author_url = get_the_author_meta('user_url');                         
                    ?>

            <div class="container">
                <div class="row">
                    <div class="col">
                        <!-- author's image -->
                        <?php echo get_avatar($author_id, 200); ?>
                    </div>
                    <div class="col">

                    <!-- checks whether there is author's URL in database -->
                    <?php if($author_url){?>

                        <!-- clickable author name with page URL -->
                        <a href="<?php echo $author_url; ?>">

                            <!-- displays name of author -->
                            <?php echo $author_display; ?>
                        </a>
                    <?php
                    } else{
                        echo $author_display;
                    } 
                    ?>

                    <!-- displays author bio, first checks whether there is a bio -->
                    <?php
                        if ($author_desc){ ?>
                        <p>
                        <?php echo $author_desc; ?>
                    </p>
                    <?php } ?>

                    <!-- checks whether there are posts linked to that author -->
                    <?php 
                    if($author_posts > 1) { ?>
                        <div>
                            <a href="<?php echo $author_posts_url; ?>">
                                <?php echo $author_posts;?> More posts by <?php echo $author_display;?> </a>
                        </div>
                        <?php } ?>

                    </div>
                </div>
            </div>

                    <div>
                        <?php the_content();?>
                    </div>

                    <div>
                        <!-- if there are categories, display them -->
                        <?php if(has_category()) {
                            echo '<h5>Categories</h5>'.get_the_category_list(', ');
                        }?>
                    </div>

                    <div>
                        <!-- if there is a tag, display it -->
                        <?php if(has_tag()) {
                            echo '<h5>Tags</h5>'.get_the_tag_list('<ul><li>','</li><li>','</li></ul>');
                        }?>
                    </div>

                    <!-- comment section -->
                    <?php //comments_template(); ?>
                </article>             
                <?php endwhile;
                endif;?>
            </main>
        </div>
    </div>
</div>