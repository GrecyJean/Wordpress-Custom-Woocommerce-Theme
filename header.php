<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!--Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <!--Font Awesome -->
    <script src="https://kit.fontawesome.com/0df1004726.js" crossorigin="anonymous"></script>
    </head>
    <header>
      <div class="top-header">
         <div class="search-box">
            <i class="fas fa-search search-box__icon"></i>
            <input type="text" name="" id="" placeholder="Search our store" class="search-box__searchbar"> 
         </div>
         <div class="logo-box">
            <a href="http://localhost/ecommerce_portfolio"><h1 class="logo-box__logo">premier streetwear</h1></a> 
         </div>
         <div class="cart-box">
            <p class="cart-box__bag-name cart-box__item">bag</p>
            <p class="cart-box__parantheses cart-box__item">&#40; &#41;</p>
            <i class="fas fa-shopping-bag cart_box__icon cart-box__item"></i> 
         </div>
      </div><!--top-header-->
      <div class="nav">
          <ul class="nav-menu">
           <li class="nav-menu__items"><?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?></li>
        </ul>
      </div>
      <div class="video-box">
          <video src="<?php bloginfo('template_directory');?>/assets/img/background.mp4" autoplay="true" loop="true" muted></video>
      </div>
      <div class="header-overlay"></div> 
   </header>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
