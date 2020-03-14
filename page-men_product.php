<?php

/** 
 * Template Name: Men Product Page
*/

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Men Product Page</title>
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
      <div class="container--buy">
           <a href="item_buy_page.html">
             <div class="items">
               <img class="items__img" src="<?php bloginfo('template_directory');?>/assets/men_items/men_item_1.PNG" alt="men-cloths">
               <div class="price-box">
                   <div class="price-box__description">
                       the focus hoodie
                   </div>
                   <div class="price-box__price">
                       &#36;115
                   </div>
               </div><!--price-box-->
           </div><!--end of items-->
           </a> 
           <a href="item_buy_page.html">
               <div class="items">
               <img src="<?php bloginfo('template_directory');?>/assets/men_items/men_item_2.PNG" alt="men-cloths">
               <div class="price-box">
                   <div class="price-box__description">
                       the focus hoodie
                   </div>
                   <div class="price-box__price">
                       &#36;115
                   </div>
               </div><!--price-box-->
           </div><!--end of items-->   
           </a>
           <a href="item_buy_page.html">
               <div class="items">
               <img src="<?php bloginfo('template_directory');?>/assets/men_items/men_item_3.PNG" alt="men-cloths">
               <div class="price-box">
                   <div class="price-box__description">
                       the focus hoodie
                   </div>
                   <div class="price-box__price">
                       &#36;115
                   </div>
               </div><!--price-box-->
           </div><!--end of items--> 
           </a>
           
           <a href="item_buy_page.html">
              <div class="items">
              <img src="<?php bloginfo('template_directory');?>/assets/men_items/men_item_4.PNG" alt="men-cloths"> 
              <div class="price-box">
                   <div class="price-box__description">
                       the focus hoodie
                   </div>
                   <div class="price-box__price">
                       &#36;115
                   </div>
               </div><!--price-box-->
           </div><!--end of items--> 
           </a>
          
          <a href="item_buy_page.html">
             <div class="items">
              <img src="<?php bloginfo('template_directory');?>/assets/men_items/men_item_5.PNG" alt="men-cloths"> 
              <div class="price-box">
                   <div class="price-box__description">
                       the focus hoodie
                   </div>
                   <div class="price-box__price">
                       &#36;115
                   </div>
               </div><!--price-box-->
           </div><!--end of items--> 
          </a>
           
            <a href="item_buy_page.html">
               <div class="items">
              <img src="<?php bloginfo('template_directory');?>/assets/men_items/men_item_6.PNG" alt="men-cloths"> 
              <div class="price-box">
                   <div class="price-box__description">
                       the focus hoodie
                   </div>
                   <div class="price-box__price">
                       &#36;115
                   </div>
               </div><!--price-box-->
           </div><!--end of items--> 
            </a>
            
            <a href="item_buy_page.html">
               <div class="items">
              <img src="<?php bloginfo('template_directory');?>/assets/men_items/men_item_7.PNG" alt="men-cloths">
              <div class="price-box">
                   <div class="price-box__description">
                       the focus hoodie
                   </div>
                   <div class="price-box__price">
                       &#36;115
                   </div>
               </div><!--price-box--> 
           </div><!--end of items--> 
            </a>
           
           <a href="item_buy_page.html">
              <div class="items">
              <img src="<?php bloginfo('template_directory');?>/assets/men_items/men_item_8.PNG" alt="men-cloths"> 
              <div class="price-box">
                   <div class="price-box__description">
                       the focus hoodie
                   </div>
                   <div class="price-box__price">
                       &#36;115
                   </div>
               </div><!--price-box-->
           </div><!--end of items--> 
           </a>
           
           <a href="item_buy_page.html">
               <div class="items">
              <img src="<?php bloginfo('template_directory');?>/assets/men_items/men_item_9.PNG" alt="men-cloths"> 
              <div class="price-box">
                   <div class="price-box__description">
                       the focus hoodie
                   </div>
                   <div class="price-box__price">
                       &#36;115
                   </div>
               </div><!--price-box-->
           </div><!--end of items-->  
           </a>
       </div><!--end of container-->

<?php get_footer(); ?>



