<?php
    get_header();
?>

<div class="posts">
<?php 
    //creating an array and calling it in loop.php to diplay titles when searching
    $args = array('section_title' => 'List of Posts');
    //calling loop.php
    get_template_part('templateParts/loop', null, $args);

?>

    </div>

        <!-- searches sidebar of widgets -->
        <div class="col-4">
        <?php get_sidebar();?>
    </div>

<?php
    get_footer();
?>