<!-- always edit the wordpress admin from users tab to include details about the author, example link, image, and more.. -->

<?php
    get_header();
?>

<div class="container">
    <div class="row">
        <div class="col">
            <main>
                <?php 
                
                    if(have_posts()): while(have_posts( )): the_post(); 
                ?>

                <article <?php post_class('pt-4 border');?>>

                    <h2>
                        <?php the_title(); ?>
                    </h2>

                    <?php
                        // iggib author id,posts
                        $author_id = get_the_author_meta('ID');
                        $author_posts = get_the_author_posts();
                        //iggib lisem tal author/username
                        $author_display = get_the_author();
                        //iggib il URL tal post tal author li adna kemm ajjatna fuq - $author_id
                        $author_posts_url = get_author_posts_url($author_id);
                        //iggib bio/description tal author
                        $author_desc = get_the_author_meta('user_description');
                        //gets the URL of the actual author's page
                        $author_url = get_the_author_meta('user_url');
                    ?>

        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- displays the author's image, the number is the size -->
                    <?php echo get_avatar($author_id, 200);?>

                    <div>
                        <?php 
                            // naraw jekk hemmx url tal author jew le fid database
                            if($author_url) {?>
                        <!-- making the authors name clickable with his page url when clicked -->
                        <a href="<?php echo $author_url; ?>">

                            </a>
                            <!-- displays the author's name -->
                            <?php echo $author_display; ?>
                            <?php
                            }
                            else{
                                echo $author_display;
                            }
                            ?>

                            <p>
                                <!-- displays author bio, lewwel naraw jek anniex bio jew le -->
                                <?php
                                if ($author_desc)
                                {
                                    ?>
                                <?php echo $author_desc;?>
                            </p>
                            <?php } ?>

                            <?php
                                // ticcekkja jekk emmx posts jexistu fuq dak lauthor fid database
                                // din displays it total number ta posts li hemm fl-isem tal author u l-isem tal author, ex: 50 more posts by Clyde Curmi
                                if ($author_posts > 1){?>
                                <div>
                                    <a href=" <?php echo $author_posts_url; ?>">
                                    <?php echo $author_posts; ?> more posts by <?php echo $author_display; ?></a>
                                </div>
                                <?php } ?>
                            
                        
                    </div>

                </div>
            </div>
        </div>

                    <div>
                        <?php the_content(); ?>
                    </div>

                    <div>
                        <!-- jekk hemm category, display the category list, iridu ikunu added minn wordpress fid database -->
                        <?php if(has_category()) 
                            echo '<h5>Categories</h5>'.get_the_category_list(',');
                        ?>

                        <!-- jekk hemm tag, display the tag list, iridu ikunu added minn wordpress fid database -->
                        <?php if(has_tag()) 
                            echo '<h5>Categories</h5>'.get_the_tag_list('<ul><li>','</li><li>','</li></ul>');
                        ?>
   
                    </div>

                    <!-- to add comment section, need to add a file called comments.php -->
                    <?php comments_template();?>

                </article>

                <?php
                    
                    endwhile;
                    endif;
                
                ?>
            </main>
        </div>
    </div>
</div>

<?php
    get_footer();
?>