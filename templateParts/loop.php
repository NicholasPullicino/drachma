<?php 
    //this file is to code the loop once

    //calling array args from archive.php to display the titles when searching
    echo '<h2>'.__($args['section_title']).'</h2>';
        
            //checks whether any psots are created, if yes, they are added in the page
            if(have_posts()): while(have_posts( )): the_post();
        ?>

        <?php    

        //calling content.php
            get_template_part('templateParts/content');

            endwhile;

            //creating pagination 
            the_posts_pagination( array(

                //posts per page
                'mid_size' => 2,
                //previous
                'prev_text' => 'Prev',
                //next
                'next_text' => 'Next'

            ));

            else : echo '<p> Sorry no posts found</p>';
            endif;
        ?>