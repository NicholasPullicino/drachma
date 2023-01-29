<div>
    <!-- ticcekkja hemmx comments jew le, jekk ma jkunx hemm comments jew tkun ticked minn wordpress not to allow comments, mhu se jigi displayed xejn -->
    <?php if(have_comments()) {?>
        <h2>Comments</h2>
        <ul>
            <!-- displays all comments -->
            <?php wp_list_comments(array(
                // maximum number of comments displayed, in this case 200
                'avatar_size' => 200
            )); ?>
        </ul>
        <!-- displays the pagination of the comments -->
    <?php the_comments_pagination();?>

    <?php } ?>

    <!-- to display comment form, biex taghmel comment int -->
    <?php comment_form(); ?>
</div>