<?php
    get_header();
?>

<?php 

//creating an array and calling it from loop.php to display title when searching
$args2 = array('section_title' => 'Search Results');

    get_template_part('templateParts/loop', null, $args2);

?>

<div class="posts">
        <?php 
        //including posts which are already stored in database
        //the_post fetches the last post's details and moves the pointer by one to create a new post - uses super global $Post
        
        // checks whether any posts are created
        if(have_posts()): while(have_posts( )): the_post();
        ?>

        <?php    
            endwhile;

            //pagination
            the_posts_pagination( array(

                // mid_size kemm se juri posts per page, in this instance 2, prev_text u next_text huma in next u previous tal pagination
                'mid_size' => 2,
                'prev_text' => 'Prev',
                'next_text' => 'Next'

            ));

            else : echo '<p> Sorry no posts found</p>';
            endif;
        ?>

    </div>

    <div class="col-4">
        <?php get_sidebar('ad');?>
    </div>

<?php
    get_footer();
?>