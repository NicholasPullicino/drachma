<?php
    get_header();
?>

    <!-- search bar, get_search_form is a function = whether or not it displays that form -->
    <?php get_search_form(true);?>
 
    <div class="image">
        <h1>My Blog</h1>
        <p>Click here for more info.</p>
        <button class="button">More info.</button>
    </div>

    <div class="categories">
        <br>
        <h2>Categories</h2>
        <br>
        <div class="categories_container">
            <div class="content">
                <div class="content_image"></div>
                <br>
                <h5>Lorem Ipsum</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>

            <div class="content">
                <div class="content_image"></div>
                <br>
                <h5>Lorem Ipsum</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>

            <div class="content">
                <div class="content_image"></div>
                <br>
                <h5>Lorem Ipsum</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>

            <div class="content">
                <div class="content_image"></div>
                <br>
                <h5>Lorem Ipsum</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            
        </div>
    </div>
    <br>

    <div class="achievements">
        <h3><b>Career Achievements</b></h3>
        <br>
        <h5>Description</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <br>
        <button class="achievements_button">More info.</button>
    </div>

    <div class="biography">
        <div class="bio_image">
            <div class="profile_pic">
                <div class="actual_pic"></div>
            </div>
        </div>
        <div class="bio_text">
            <h5>Clyde Curmi - Faculty of Arts - Biography</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea. </p>
            <a class="bio_info">More info.</a>
        </div>
    </div>

    <!-- this includes other files in the file
< ?php include 'carcousel.php'; ?> -->

<?php
    get_footer();
?>

