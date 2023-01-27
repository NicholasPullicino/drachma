<!-- All the website's header -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head(); ?>
    <?php wp_footer(); ?>
</head>

<body <?php body_class(); ?>>
  
<?php $header_bg = get_theme_mod('drachma_header_bg', 'light'); ?>

<header class= "header-<?php echo $header_bg; ?>">

  <a href="#default" class="logo">Clyde Curmi's Blog</a>
  <div class="header-right">
    <?php wp_nav_menu(array(
        'theme_location' => 'main-menu'
      )); ?>


  </div>

</header>
<body>
    
