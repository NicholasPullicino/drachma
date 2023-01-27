<!-- dan file li ed jistenna wordpress so ha jkun fir root folder -->

<?php
    get_header();
?>

<div class="posts">
<?php 

// qed namlu array u najjtula fil loop.php biex namlu display it title xhin namlu search
$args = array('section_title' => 'List of Posts');
// din tajjat l file tal-loop.php
    get_template_part('templateParts/loop', null, $args);

?>

    </div>

    <!-- din se tfittex s sidebar tal widgets -->
    <div class="col-4">
        <?php get_sidebar();?>
    </div>

<?php
    get_footer();
?>