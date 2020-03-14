<?php

/** 
 * Template Name: Runway Page
*/

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runway Page</title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/style.css">
    <!--Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <!--Font Awesome -->
    <script src="https://kit.fontawesome.com/0df1004726.js" crossorigin="anonymous"></script>
    </head>
    <header>
<div class="wrapper">
      <div class="top-header">
         <div class="search-box">
            <i class="fas fa-search search-box__icon"></i>
            <input type="text" name="" id="" placeholder="Search our store" class="search-box__searchbar"> 
         </div>
         <div class="logo-box">
             <a href="http://localhost/ecommerce_portfolio"><h1 class="logo-box__logo">premier streetwear</h1></a>  
         </div>
         <div class="cart-box">
            <p class="cart-box__bag-name cart-box__item cart-box__item--other">bag</p>
            <p class="cart-box__parantheses cart-box__item cart-box__item--other">&#40; &#41;</p>
            <i class="fas fa-shopping-bag cart_box__icon cart-box__item cart-box__item--other"></i> 
         </div>
      </div><!--top-header-->
      <div class="nav">
          <ul class="nav-menu">
          <li class="nav-menu__items"><?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?></li>
        </ul>
      </div>

      <div class="container--login">
        
        <div class="iframe-container">
           <iframe width="100%" height="100%" src="https://www.youtube.com/embed/jQfKOzzW4Ys" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br><br>
           
        </div>

        <p class="collection">Collection 1</p>
           <p><small class="small-text">This collection aimed to bring light to the unfrequented story of the black cowboys <br>from the 19th century. The Western theme was exemplified with leather patchwork jackets, contrast topstitching and amplified wide-legged trousers. <br>With musical direction guided <br> by Raphael Saadiq, the story was tied together by choir sung renditions of Gil Scott-Heron’s <br> “Home is Where the Hatred Is”, 
               Bruce Springsteen’s “Born in the USA” and “Alright”, by Kendrick Lamar.</small></p>
        
        
         
       </div>
      
     
<?php get_footer(); ?>
