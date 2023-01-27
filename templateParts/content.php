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