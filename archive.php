<?php
    get_header();
?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <div class="posts">
            <?php
                $args = array('section_title' => 'Posts'); 
                get_template_part('templateParts/loop', null, $args);
            ?>
            </div>
            <div class="col-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</div>

<?php
    get_footer();
?>