<!-- All the website's header -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- function ta wordpress biex ntellew u najjtu custom files -->
    <?php wp_head(); ?>
    <?php wp_footer(); ?>
</head>

<!-- din il class biex il body ttih default css ta wordpress, xorta tista tistylejah -->
<body <?php body_class(); ?>>
  
<?php $header_bg = get_theme_mod('custom_header_bg', 'light'); ?>

<header class= "header-<?php echo $header_bg; ?>">

  <a href="#default" class="logo">Clyde Curmi's Blog</a>
  <div class="header-right">
    <!-- amilna l menu ahna stess - hassarna il menu minn wordpress site from appearance , themes u ittikjajna il main menu box u amel save, il menu hlaqnieh ahna fin naviagtion.php -->
    <?php wp_nav_menu(array(
        'theme_location' => 'main-menu'
      )); ?>


  </div>

</header>
<body>
    
