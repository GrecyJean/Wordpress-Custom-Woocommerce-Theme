<?php

/** 
 * Template Name: Women Product Page
*/

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Women Product Page</title>
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
      <!--items-->
     <!--items-->
     <div class="container--buy">
           <a href="item_buy_page.html">
             <div class="items">
               <img class="items__img" src="<?php bloginfo('template_directory');?>/assets/women_items/women_item_2.PNG" alt="women-cloths">
               <div class="price-box">
                   <div class="price-box__description">
                       the ski girl gear
                   </div>
                   <div class="price-box__price">
                       &#36;115
                   </div>
               </div><!--price-box-->
           </div><!--end of items-->
           </a> 
           <a href="item_buy_page.html">
               <div class="items">
                <img class="items__img" src="<?php bloginfo('template_directory');?>/assets/women_items/women_item_2.PNG" alt="women-cloths">
               <div class="price-box">
                   <div class="price-box__description">
                       the hippy longline cardigan
                   </div>
                   <div class="price-box__price">
                       &#36;115
                   </div>
               </div><!--price-box-->
           </div><!--end of items-->   
           </a>
           <a href="item_buy_page.html">
               <div class="items">
               <img src="<?php bloginfo('template_directory');?>/assets/women_items/women_item_3.PNG" alt="women-cloths">
               <div class="price-box">
                   <div class="price-box__description">
                       the burnt-orange blouse
                   </div>
                   <div class="price-box__price">
                       &#36;115
                   </div>
               </div><!--price-box-->
           </div><!--end of items--> 
           </a>
           
           <a href="item_buy_page.html">
              <div class="items">
              <img src="<?php bloginfo('template_directory');?>/assets/women_items/women_item_4.PNG" alt="women-cloths">
              <div class="price-box">
                   <div class="price-box__description">
                       stussy her hoodie
                   </div>
                   <div class="price-box__price">
                       &#36;115
                   </div>
               </div><!--price-box-->
           </div><!--end of items--> 
           </a>
          
          <a href="item_buy_page.html">
             <div class="items">
                <img src="<?php bloginfo('template_directory');?>/assets/women_items/women_item_5.PNG" alt="women-cloths">
              <div class="price-box">
                   <div class="price-box__description">
                       the her red turtleneck
                   </div>
                   <div class="price-box__price">
                       &#36;115
                   </div>
               </div><!--price-box-->
           </div><!--end of items--> 
          </a>
           
            <a href="item_buy_page.html">
               <div class="items">
                <img src="<?php bloginfo('template_directory');?>/assets/women_items/women_item_6.PNG" alt="women-cloths">
              <div class="price-box">
                   <div class="price-box__description">
                       the western cowboy hat
                   </div>
                   <div class="price-box__price">
                       &#36;115
                   </div>
               </div><!--price-box-->
           </div><!--end of items--> 
            </a>
            
            <a href="item_buy_page.html">
               <div class="items">
                <img src="<?php bloginfo('template_directory');?>/assets/women_items/women_item_7.PNG" alt="women-cloths">
              <div class="price-box">
                   <div class="price-box__description">
                       the tie dye thermal
                   </div>
                   <div class="price-box__price">
                       &#36;115
                   </div>
               </div><!--price-box--> 
           </div><!--end of items--> 
            </a>
           
           <a href="item_buy_page.html">
              <div class="items">
                <img src="<?php bloginfo('template_directory');?>/assets/women_items/women_item_8.PNG" alt="women-cloths">
              <div class="price-box">
                   <div class="price-box__description">
                       the purple nike sweater
                   </div>
                   <div class="price-box__price">
                       &#36;115
                   </div>
               </div><!--price-box-->
           </div><!--end of items--> 
           </a>
           
           <a href="item_buy_page.html">
               <div class="items">
                <img src="<?php bloginfo('template_directory');?>/assets/women_items/women_item_9.PNG" alt="women-cloths">
              <div class="price-box">
                   <div class="price-box__description">
                       the oversize rocker sweater
                   </div>
                   <div class="price-box__price">
                       &#36;115
                   </div>
               </div><!--price-box-->
           </div><!--end of items-->  
           </a>
       </div><!--end of container-->
       

<?php get_footer(); ?>



