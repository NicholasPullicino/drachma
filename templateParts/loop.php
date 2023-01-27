<!-- dan il file biex l loop nuzawh darba, mhux noqodu namlu copy u paste l code kull darba (tal archive.php) -->

<?php 

    // qed najjtu larray args from archive.php biex na,lu display t title  xhin namlu search
    echo '<h2>'.__($args['section_title']).'</h2>';

    // echo '<h2>'.__($args2['section_title']).'</h2>';
        // to include posts (which are already stored in database), have_posts determines whether the current query hads posts to loop over - jiccekkja ghandniex posts
        // the_post iggib d dettalji ta the last post u tmexxa l pointer by one halli tamel post gdida - tkun qed tuza super global jisima $Post - taqbad information li anna fti database u titfew fdan l global variable
        
        // basically din ticcekkja andekx posts, u jekk hem izzidom fil page
            if(have_posts()): while(have_posts( )): the_post();
        ?>

        <?php    

        // qed najjat il content.php
        get_template_part('templateParts/content');

            endwhile;

            // se noholqu pagination - tahdem biss jekk hemm bizzejjed posts fid database
            the_posts_pagination( array(

                // mid_size kemm se juri posts per page, in this instance 2, prev_text u next_text huma in next u previous tal pagination
                'mid_size' => 2,
                'prev_text' => 'Prev',
                'next_text' => 'Next'

            ));

            else : echo '<p> Sorry no posts found</p>';
            endif;
        ?>