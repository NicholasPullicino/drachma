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
  
<?php $header_bg = get_theme_mod('drachmaWebsite_header_bg', 'light'); ?>

<header class= "header-<?php echo $header_bg; ?>">

  <!-- <a href="#default" class="logo">Drachma</a>
  <div class="header-right"> -->

      <!-- <form class="search-bar" action="/action_page.php">
      <input class="search-bar2" type="text" placeholder="Search.." name="search"></i></button>
    </form> -->
      
</div>

    <!-- <ul class="grid_container">
      <li><a href="#home">Home</a></li>
      <li><a href="#news">About</a></li>
      <li><a href="#contact">Posts</a></li>
      <div class="search-container">
      <form action="/action_page.php">
        <input type="text" placeholder="Search.." name="search"></i></button>
      </form>
    </div>
    </ul> -->
  </div>

</header>
<body>
    
