<?php
    get_header();
?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <div class="posts">
            <?php
                //creating an array and calling it in loop.php to diplay titles when searching
                $args = array('section_title' => 'Posts'); 

                //calling loop.php
                get_template_part('templateParts/loop', null, $args);
            ?>
            </div>
            <div class="col-4">

                <!-- searches sidebar of widgets -->
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</div>

<?php
    get_footer();
?>