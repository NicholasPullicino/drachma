<!-- dan amilna copy u paste il code tal archive.php habba s search -->


<!-- dan file li ed jistenna wordpress so ha jkun fir root folder -->

<?php
    get_header();
?>

<?php 

// qed namlu array u najjtula fil loop.php biex namlu display it title xhin namlu search
$args2 = array('section_title' => 'Search Results');

// din tajjat l file tal-loop.php
    get_template_part('templateParts/loop', null, $args2);

?>

<div class="posts">
        <?php 
        // to include posts (which are already stored in database), have_posts determines whether the current query hads posts to loop over - jiccekkja ghandniex posts
        // the_post iggib d dettalji ta the last post u tmexxa l pointer by one halli tamel post gdida - tkun qed tuza super global jisima $Post - taqbad information li anna fti database u titfew fdan l global variable
        
        // basically din ticcekkja andekx posts, u jekk hem izzidom fil page
            if(have_posts()): while(have_posts( )): the_post();
        ?>

            <div class="post">
                <h2> 
                <!-- tamel slug fil URL - title fil URL -->
                <a href="<?php the_permalink(); ?>"></a>

                    <?php //iggib t title li hemm stored fid $post
                        the_title()?></h2>

                        <!-- date and author -->
                        <small> <?php the_date()?> by <?php the_author_posts_link();?> </small>
                        
                        <!-- tamel id 3 dots (...) halli ma jgibx l kontenut kollu fil posts -->
                        <p> <?php the_excerpt(); ?></p>

                        <!-- turi lista ta categories li huma linked ma din l post partikulari, qeda bil comma biex jifridom l categories -->
                        <p> Posted in <?php the_category(',');?> </p>
            </div>



        <?php    
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

    </div>

    <div class="col-4">
        <?php get_sidebar('ad');?>
    </div>

<?php
    get_footer();
?>