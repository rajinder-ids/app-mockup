<?php 
   include_once('config.php');
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
      <title>Watch List</title>
      <!-- CSS  -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
   <body>
      <div class="container custom-container">
         <div class="section topbar fixed-header padding-0">
            <!--   Icon Section   -->
            <div class="row">
               <div class="col s4 m4 left-align">
                  <a href="#" data-target="slide-out" class="sidenav-trigger">
                  <i class="material-icons white-text">menu</i>
                  </a>
               </div>
               <div class="col s4 m4 center-align">
                  <span class="page-title">Watch List</span>
               </div>
               <div class="col s4 m4 right-align">
                  <a class="white-text"><i class="material-icons dp48 search-icon-home">search</i></a>
                  <div class=" modal-trigger app-notifications" href="#modal1" style="display: inline-block;">
                     <span class="notifications-app"><i class="material-icons dp48">notifications_none</i></span>
                  </div>
               </div>
            </div>
         </div>
         <div class="searchbar-home fadeInRight fadeout">
         <div class="section" style="box-shadow:0 1px 1.5px rgba(0, 0, 0, 0.64);background: #fff;">
            <div class="row">
                  <form>
                     <div class="input-field col s12 top-margin">
                        <i class="material-icons dp48 prefix fade-out"><a  class="black-text">arrow_back</a></i>
                        <input type="text"  id="input-search" class="validate" placeholder="Search for products, brands and more">
                     </div>
                     <div class="divider"></div>
                     
                     <div class="col s2 m2 12">
                        <i class="material-icons dp48">history</i>
                     </div>
                     <div class="col s8 m8 18">
                        <strong>Shoes</strong>
                     </div>
                     <div class="col s2 m2 12 right-align">
                        <i class="material-icons dp48" style="transform: rotateZ(325deg);">arrow_upward</i>
                     </div>
                  </form>
            </div>
         </div>
         <!-- <div class="section" style="box-shadow: 0 1px 1.5px rgba(0,0,0,.11765);background: #fff;margin-top:12px;">
            <div class="row">
               <div class="col s12 m12 l12">
                  <div class="col s12 m12 l12">
                     <span>Trending</span>
                  </div>
                  &nbsp;
                  <div class="tranding-btn">

                     <a class="waves-effect waves-light btn-small">Shoes</a>
                     <a class="waves-effect waves-light btn-small">Bag</a>
                     <a class="waves-effect waves-light btn-small">Shoes</a>
                     <a class="waves-effect waves-light btn-small">Bag</a>
                     <a class="waves-effect waves-light btn-small">Shoes</a>
                  </div>
               </div>
            </div>
         </div> -->
      </div>
         <!---------sidebar menu----------->
         <ul id="slide-out" class="sidenav">
         <li>
            <div class="user-view center">
               <div class="background" style="background: linear-gradient(to right, rgba(254,39,82,1) 0%, rgba(237,33,44,1) 100%);"> 
               </div>
               <div class="profile">
                  <img class="" src="images/profile.png">
                  <h5 class="white-text">Jassica Jones</h5>
               </div>
            </div>
         </li>
         <li class="waves-effect">
            <a href="home.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
         </li>
         <li class="waves-effect">
            <a href="edit-profile.php"><i class="fa fa-user-o" aria-hidden="true"></i>My profile</a>
         </li>
         <li class="waves-effect">
            <a href="send-code.php"><i class="fa fa-qrcode" aria-hidden="true"></i>Scan-code</a>
         </li>
         <li class="waves-effect">
            <a href="subscription.php"><i class="fa fa-server" aria-hidden="true"></i>Subscription</a>
         </li>
         <li>
            <a href="home.php"><i class="fa fa-shield" aria-hidden="true"></i>Exclusive Items</a>
         </li>
         <li class="waves-effect">
            <a href="watch-list.php"><i class="fa fa-heart-o" aria-hidden="true"></i>Watch List</a>
         </li>
         <li class="waves-effect">
            <a href="shoping-list.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Shopping List</a>
         </li>
         <li class="waves-effect">
            <a href="contact.php"><i class="fa fa-star-o" aria-hidden="true"></i>Feedback/Contact</a>
         </li>
         <li class="waves-effect">
            <a href="faq.php"><i class="fa fa-wpforms" aria-hidden="true"></i>FAQ</a>
         </li>
         <li class="waves-effect">
            <a href="sign-up.php"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>Logout</a>
         </li>
      </ul>
         <!---------sidebar menu----------->
         <div class="wrap-padding porducts-list" style="margin-top:54px">
            <div class="section">
               <div class="row">
                  <div class="col s6 m4 l3">
                     <a href="/app-design-new/single-products.php">
                     <div class="porducts-grid center">
                        <img src="images/1.png">
                        <i class="material-icons dp48 app-wishlist-icon">favorite_border</i>
                     </div></a>
                     <div class="porducts-title">
                        <a href="/app-design-new/single-products.php">
                        <h6 class="black-text">Portable Wireless Speakers</h6>
                        </a>
                        <h5 class="green-text">$14.86</h5>
                        <h6 class="grey-text">$14.86 <span class="black-text">(Save 10%)</span></h6>
                        <a href="/app-design-new/products-page.php" class="add-to-shop">Add a shopping list</a>
                     </div>
                  </div>
                  <div class="col s6 m4 l3">
                     <a href="/app-design-new/single-products.php">
                        <div class="porducts-grid center">
                           <img src="images/2.png">
                           <i class="material-icons dp48 app-wishlist-icon">favorite_border</i>
                        </div>
                     </a>
                     <div class="porducts-title">
                        <a href="/app-design-new/single-products.php">
                           <h6 class="black-text">BEATS Wireless Headphones</h6>
                        </a>
                        <h5 class="green-text">$14.86</h5>
                        <h6 class="grey-text">$14.86 <span class="black-text">(Save 10%)</span></h6>
                        <a href="/app-design-new/products-page.php" class="add-to-shop">Add a shopping list</a>
                     </div>
                  </div>
                  <div class="col s6 m4 l3">
                     <a href="/app-design-new/single-products.php">
                        <div class="porducts-grid center">
                           <img src="images/1.png">
                           <i class="material-icons dp48 app-wishlist-icon">favorite_border</i>
                        </div>
                     </a>
                     <div class="porducts-title">
                        <a href="/app-design-new/single-products.php">
                           <h6 class="black-text">Portable Wireless Speakers</h6>
                        </a>
                        <h5 class="green-text">$14.86</h5>
                        <h6 class="grey-text">$14.86 <span class="black-text">(Save 10%)</span></h6>
                        <a href="/app-design-new/products-page.php" class="add-to-shop">Add a shopping list</a>
                     </div>
                  </div>
                  <div class="col s6 m4 l3">
                     <a href="/app-design-new/single-products.php">
                        <div class="porducts-grid center">
                           <img src="images/2.png">
                           <i class="material-icons dp48 app-wishlist-icon">favorite_border</i>
                        </div>
                     </a>
                     <div class="porducts-title">
                        <a href="/app-design-new/single-products.php">
                           <h6 class="black-text">BEATS Wireless Headphones</h6>
                        </a>
                        <h5 class="green-text">$14.86</h5>
                        <h6 class="grey-text">$14.86 <span class="black-text">(Save 10%)</span></h6>
                        <a href="/app-design-new/products-page.php" class="add-to-shop">Add a shopping list</a>
                     </div>
                  </div>
                  <div class="col s6 m4 l3">
                     <a href="/app-design-new/single-products.php">
                        <div class="porducts-grid center">
                           <img src="images/2.png">
                           <i class="material-icons dp48 app-wishlist-icon">favorite_border</i>
                        </div>
                     </a>
                     <div class="porducts-title">
                        <a href="/app-design-new/single-products.php">
                           <h6 class="black-text">BEATS Wireless Headphones</h6>
                        </a>
                        <h5 class="green-text">$14.86</h5>
                        <h6 class="grey-text">$14.86 <span class="black-text">(Save 10%)</span></h6>
                        <a href="/app-design-new/products-page.php" class="add-to-shop">Add a shopping list</a>
                     </div>
                  </div>
                  <div class="col s6 m4 l3">
                     <a href="/app-design-new/single-products.php">
                        <div class="porducts-grid center">
                           <img src="images/2.png">
                           <i class="material-icons dp48 app-wishlist-icon">favorite_border</i>
                        </div>
                     </a>
                     <div class="porducts-title">
                        <a href="/app-design-new/single-products.php">
                           <h6 class="black-text">BEATS Wireless Headphones</h6>
                        </a>
                        <h5 class="green-text">$14.86</h5>
                        <h6 class="grey-text">$14.86 <span class="black-text">(Save 10%)</span></h6>
                        <a href="/app-design-new/products-page.php" class="add-to-shop">Add a shopping list</a>
                     </div>
                  </div>
                  <div class="col s6 m4 l3">
                     <a href="/app-design-new/single-products.php">
                        <div class="porducts-grid center">
                           <img src="images/2.png">
                           <i class="material-icons dp48 app-wishlist-icon">favorite_border</i>
                        </div>
                     </a>
                     <div class="porducts-title">
                        <a href="/app-design-new/single-products.php">
                           <h6 class="black-text">BEATS Wireless Headphones</h6>
                        </a>
                        <h5 class="green-text">$14.86</h5>
                        <h6 class="grey-text">$14.86 <span class="black-text">(Save 10%)</span></h6>
                        <a href="/app-design-new/products-page.php" class="add-to-shop">Add a shopping list</a>
                     </div>
                  </div>
                  <div class="col s6 m4 l3">
                     <a href="/app-design-new/single-products.php">
                        <div class="porducts-grid center">
                           <img src="images/2.png">
                           <a href="#"><i class="material-icons dp48 app-wishlist-icon">favorite_border</i></a>
                        </div>
                     </a>
                     <div class="porducts-title">
                        <a href="/app-design-new/single-products.php">
                           <h6 class="black-text">BEATS Wireless Headphones</h6>
                        </a>
                        <h5 class="green-text">$14.86</h5>
                        <h6 class="grey-text">$14.86 <span class="black-text">(Save 10%)</span></h6>
                        <a href="/app-design-new/products-page.php" class="add-to-shop">Add a shopping list</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Modal Structure -->
         <div class=" fadeInRight top-sheet fixed-notification-main">
            <div class="" style="position:relative;">
               <h4 class="fixed-notification fade-out">Notification 2<i class="material-icons dp48"><a class="black-text">close</a></i></h4>

               <ul class="collection">
                  <li class="collection-item avatar">
                     <i class="material-icons circle green">assessment</i>
                     <span class="title">Visual</span>
                     <p class="grey-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </li>
                  <li class="collection-item avatar">
                     <i class="material-icons circle">folder</i>
                     <span class="title">USB for file transfar</span>
                     <p class="grey-text">Touch for more option.</p>
                  </li>
                  <li class="collection-item avatar">
                     <i class="material-icons circle green">assessment</i>
                     <span class="title">Visual</span>
                     <p class="grey-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </li>
                  <li class="collection-item avatar">
                     <i class="material-icons circle">folder</i>
                     <span class="title">USB for file transfar</span>
                     <p class="grey-text">Touch for more option.</p>
                  </li>
                  <li class="collection-item avatar">
                     <i class="material-icons circle">folder</i>
                     <span class="title">USB for file transfar</span>
                     <p class="grey-text">Touch for more option.</p>
                  </li>
                  <li class="collection-item avatar">
                     <i class="material-icons circle">folder</i>
                     <span class="title">USB for file transfar</span>
                     <p class="grey-text">Touch for more option.</p>
                  </li>
                  <li class="collection-item avatar">
                     <i class="material-icons circle">folder</i>
                     <span class="title">USB for file transfar</span>
                     <p class="grey-text">Touch for more option.</p>
                  </li>
                  <li class="collection-item avatar">
                     <i class="material-icons circle">folder</i>
                     <span class="title">USB for file transfar</span>
                     <p class="grey-text">Touch for more option.</p>
                  </li>
                  <li class="collection-item avatar">
                     <i class="material-icons circle">folder</i>
                     <span class="title">USB for file transfar</span>
                     <p class="grey-text">Touch for more option.</p>
                  </li>
                  <li class="collection-item avatar">
                     <i class="material-icons circle">folder</i>
                     <span class="title">USB for file transfar</span>
                     <p class="grey-text">Touch for more option.</p>
                  </li>
                  <li class="collection-item avatar">
                     <i class="material-icons circle">folder</i>
                     <span class="title">USB for file transfar</span>
                     <p class="grey-text">Touch for more option.</p>
                  </li>

               </ul>
            </div>
         </div>
      </div>
      <!--  Scripts-->
     <!--  Scripts-->
      <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="js/materialize.js"></script>
      <script src="js/jssor.slider.min.js" type="text/javascript"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
      <script src="js/init.js"></script>
   </body>
</html>