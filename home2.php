<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
      <title>Home</title>
      <!-- CSS  -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css">
   </head>
   <style type="text/css">
      .searchbar-home,
      .top-sheet{
      display: none;
      z-index: 1100;
      position: fixed;
      width: 100%;
      top: 0;
      left: 0;
      right: 0;
      background: #000000b8;
      height: 100%;
     /* -webkit-animation-delay: 0.1s;
-moz-animation-delay: 1s;*/
   animation-delay: 0.3s;
   animation-duration: 0.3s;
   animation-fill-mode: both;
/*-webkit-animation-duration: 1s;
 
  -webkit-animation-fill-mode: both;
  */
      }
@-webkit-keyframes fadeInRight{
  from {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}
@keyframes fadeInRight{
  from {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@-webkit-keyframes top-sheet {
  from {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}
@keyframes top-sheet {
  from {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}


.fadeInRight,
.top-sheet {
  -webkit-animation-name: fadeInRight;
  animation-name: fadeInRight;
}


.fadeInRight,
.top-sheet{
  -webkit-animation-name: fadeInRight;
  animation-name: fadeInRight;
}
   </style>
   <body>
      <div class="container custom-container" style="background-color:#f1f1f1">
      <div class="section topbar fixed-header padding-0">
         <!--   Icon Section   -->
         <div class="row">
            <div class="col s4 m4 left-align">
               <a href="#" data-target="slide-out" class="sidenav-trigger">
               <i class="material-icons white-text">menu</i>
               </a>
            </div>
            <div class="col s4 m4 center-align">
               <span class="page-title">HOME</span>
            </div>
            <div class="col s4 m4 right-align">
               <a class="white-text"><i class="material-icons dp48 search-icon-home">search</i></a>
               <div class=" modal-trigger app-notifications" href="#modal1" style="display: inline-block;">
                  <span class="notifications-app"><i class="material-icons dp48">notifications_none</i></span>
               </div>
            </div>
         </div>
      </div>
      <div class="searchbar-home fadeInRight">
         <div class="section" style="box-shadow:0 1px 1.5px rgba(0, 0, 0, 0.64);background: #fff;">
            <div class="row">
                  <form>
                     <div class="input-field col s12 top-margin">
                        <i class="material-icons dp48 prefix"><a href="/app-design-new/home.php" class="black-text">arrow_back</a></i>
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
      <div class="section product-categoery-icon" style="margin-top:40px">
        <!--  <div class="row" style="position: fixed;width: 100%;background: #fff;z-index: 999;padding-top: 12px;">
            <div class="col s3 m3 center-align">
               <i class="fa fa-car" aria-hidden="true"></i>
               <h5 class="top-margin">Car</h5>
            </div>
            <div class="col s3 m3 center-align">
               <i class="fa fa-desktop" aria-hidden="true"></i>
               <h5 class="top-margin">Electronic</h5>
            </div>
            <div class="col s3 m3 center-align">
               <i class="fa fa-briefcase" aria-hidden="true"></i>
               <h5 class="top-margin">Jobs</h5>
            </div>
            <div class="col s3 m3 center-align">
               <i class="fa fa-home" aria-hidden="true"></i>
               <h5 class="top-margin">Property</h5>
            </div>
         </div>  -->
         <div class="row tab-menu"  style="position: fixed;width: 100%;background: #fff;z-index: 999;text-align: center;">
            <div class="col s12 no-padding">
               <ul class="tabs">
                  <li class="tab"><a href="#test1" >Car</a></li>
                    <!-- Dropdown Trigger -->
                  <li class="tab"><a class="" href="#test2">Electronic</a></li>
                  <li class="tab"><a href="#test3">Jobs</a></li>
                  <li class="tab"><a href="#test4">Property</a></li>
               </ul>
            </div>
             <!-- <div id="test1" class="col s12 categories-menu">
                <ul class="dropdown-content"style="width:100%;position: absolute;top:48px;opacity: 1;">
                   <li><a href="#!">Commercial Vehicles</a></li>
                   <li><a href="#!">Spare Parts</a></li>
                   <li><a href="#!">Other Vehicles</a></li>
                </ul>
             </div>  
             <div id="test2" class="col s12 categories-menu">
               <ul class="dropdown-content"style="width:100%;position: absolute;top:48px;opacity: 1;">
                   <li><a href="#!">Computers & Laptops</a></li>
                   <li><a href="#!">Cameras & Lenses</a></li>
                   <li><a href="#!">Computer Accessories</a></li>
                </ul>
             </div>  
             <div id="test3" class="col s12 categories-menu">
                <ul class="dropdown-content"style="width:100%;position: absolute;top:48px;opacity: 1;">
                   <li><a href="#!">Data entry & Back office</a></li>
                   <li><a href="#!">BPO & Telecaller</a></li>
                   <li><a href="#!">Driver</a></li>
                </ul>
             </div>  
             <div id="test4" class="col s12 categories-menu">
                <ul class="dropdown-content"style="width:100%;position: absolute;top:48px;opacity: 1;">
                   <li><a href="#!">For Sale: Houses & Apartments</a></li>
                   <li><a href="#!">Lands & Plots</a></li>
                   <li><a href="#!">For Rent: Shops & Offices</a></li>
                </ul>
             </div>   -->
          </div>
         <div class="section home-slider padding-0" style="margin-top:60px;">
            <div class="row">
               <div class="col s12 m12 l12">
                  <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1280px;height:500px;overflow:hidden;visibility:hidden;">
                     <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1280px;height:500px;overflow:hidden;">
                        <div>
                           <img data-u="image" src="https://images-na.ssl-images-amazon.com/images/G/01/desktop/US_SnS_Banner_750x275_2._CB517357317_.png" />
                        </div>
                        <div>
                           <img data-u="image" src="images/slider-2.jpg" />
                        </div>
                        <div>
                           <img data-u="image" src="images/slider-3.jpg" />
                        </div>
                     </div>
                     <!-- Bullet Navigator -->
                     <div data-u="navigator" class="jssorb052" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                        <div data-u="prototype" class="i" style="width:16px;height:16px;">
                           <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%; fill:#007aff">
                              <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                           </svg>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="section" style="background-color: #f1f1f1;">
            <div class="row">
               <div class="col s12 m12 l12 left-align">
                  <h6 class="top-margin"><b>Exclusive Items</b></h6>
               </div>
               <div class="col s12 m12 l12">
                  <div class="swiper-container recentlyAdded">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <a href="/app-design-new/single-products.php">
                              <div class="porducts-grid center">
                                 <img src="images/1.jpg">
                                 <img class="app-wishlist-icon" src="images/congrats-badge.png">
                              </div>
                           </a>
                           <div class="porducts-title col s12 m12 l12">
                              <div class="title-wishlist">
                                 <a href="/app-design-new/single-products.php">
                                    <h6 class="black-text">Fresh Essential No Gas Deodorant - Ignite, 150 ml (Pack of 2)</h6>
                                 </a>
                                 <div class="wishlist-icon ">
                                    <i class="material-icons dp48 wishlist" onclick="M.toast({html: 'Add to wishlist'})">favorite_border</i>
                                 </div>
                              </div>
                              <h6 class="green-text">$150</h6>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <a href="/app-design-new/single-products.php">
                              <div class="porducts-grid center">
                                 <img src="images/3.jpg">
                                 <img class="app-wishlist-icon" src="images/congrats-badge.png">
                              </div>
                           </a>
                           <div class="porducts-title col s12 m12 l12">
                              <div class="title-wishlist">
                                 <a href="/app-design-new/single-products.php">
                                    <h6 class="black-text">Fresh Essential No Gas Deodorant - Ignite, 150 ml (Pack of 2)</h6>
                                 </a>
                                 <div class="wishlist-icon ">
                                    <i class="material-icons dp48 wishlist" onclick="M.toast({html: 'Add to wishlist'})">favorite_border</i>
                                 </div>
                              </div>
                              <h6 class="green-text">$150</h6>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <a href="/app-design-new/single-products.php">
                              <div class="porducts-grid center">
                                 <img src="images/Women-Bag-PNG-HD.png">
                                 <img class="app-wishlist-icon" src="images/congrats-badge.png">
                              </div>
                           </a>
                           <div class="porducts-title col s12 m12 l12">
                              <div class="title-wishlist">
                                 <a href="/app-design-new/single-products.php">
                                    <h6 class="black-text">Fresh Essential No Gas Deodorant - Ignite, 150 ml (Pack of 2)</h6>
                                 </a>
                                 <div class="wishlist-icon ">
                                    <i class="material-icons dp48 wishlist" onclick="M.toast({html: 'Add to wishlist'})">favorite_border</i>
                                 </div>
                              </div>
                              <h6 class="green-text">$150</h6>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <a href="/app-design-new/single-products.php">
                              <div class="porducts-grid center">
                                 <img src="images/Insigne_2.jpg">
                                 <img class="app-wishlist-icon" src="images/congrats-badge.png">
                              </div>
                           </a>
                           <div class="porducts-title col s12 m12 l12">
                              <div class="title-wishlist">
                                 <a href="/app-design-new/single-products.php">
                                    <h6 class="black-text">Fresh Essential No Gas Deodorant - Ignite, 150 ml (Pack of 2)</h6>
                                 </a>
                                 <div class="wishlist-icon ">
                                    <i class="material-icons dp48 wishlist" onclick="M.toast({html: 'Add to wishlist'})">favorite_border</i>
                                 </div>
                              </div>
                              <h6 class="green-text">$150</h6>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <a href="/app-design-new/single-products.php">
                              <div class="porducts-grid center">
                                 <img src="images/5.jpg">
                                 <img class="app-wishlist-icon" src="images/congrats-badge.png">
                              </div>
                           </a>
                           <div class="porducts-title col s12 m12 l12">
                              <div class="title-wishlist">
                                 <a href="/app-design-new/single-products.php">
                                    <h6 class="black-text">Fresh Essential No Gas Deodorant - Ignite, 150 ml (Pack of 2)</h6>
                                 </a>
                                 <div class="wishlist-icon ">
                                    <i class="material-icons dp48 wishlist" onclick="M.toast({html: 'Add to wishlist'})">favorite_border</i>
                                 </div>
                              </div>
                              <h6 class="green-text">$150</h6>
                           </div>
                        </div>
                     </div>
                     <!-- Add Pagination -->
                     <div class="swiper-pagination"></div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col s6 m6 left-align">
                  <h6 class="top-margin"><a href="/app-design-new/products-page.php" class="red-text">Show more</a></h6>
               </div>
               <div class="col s6 m6 right-align">
                  <i class="material-icons dp48 red-text">chevron_right</i>
               </div>
            </div>
         </div>
         <hr class="app-hr">
         <div class="section" style="background-color: #f1f1f1;">
            <div class="row">
               <div class="col s12 m12 l12 left-align">
                  <h6 class="top-margin"><b>Recently Added</b></h6>
               </div>
               <div class="col s12 m12 l12">
                  <div class="swiper-container recentlyAdded">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <a href="/app-design-new/single-products.php">
                              <div class="porducts-grid center">
                                 <img src="images/1.jpg">
                              </div>
                           </a>
                           <div class="porducts-title col s12 m12 l12">
                              <div class="title-wishlist">
                                 <a href="/app-design-new/single-products.php">
                                    <h6 class="black-text">Fresh Essential No Gas Deodorant - Ignite, 150 ml (Pack of 2)</h6>
                                 </a>
                                 <div class="wishlist-icon ">
                                    <i class="material-icons dp48 wishlist" onclick="M.toast({html: 'Add to wishlist'})">favorite_border</i>
                                 </div>
                              </div>
                              <h6 class="green-text">$150</h6>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <a href="/app-design-new/single-products.php">
                              <div class="porducts-grid center">
                                 <img src="images/3.jpg">
                              </div>
                           </a>
                           <div class="porducts-title col s12 m12 l12">
                              <div class="title-wishlist">
                                 <a href="/app-design-new/single-products.php">
                                    <h6 class="black-text">Fresh Essential No Gas Deodorant - Ignite, 150 ml (Pack of 2)</h6>
                                 </a>
                                 <div class="wishlist-icon ">
                                    <i class="material-icons dp48 wishlist" onclick="M.toast({html: 'Add to wishlist'})">favorite_border</i>
                                 </div>
                              </div>
                              <h6 class="green-text">$150</h6>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <a href="/app-design-new/single-products.php">
                              <div class="porducts-grid center">
                                 <img src="images/Women-Bag-PNG-HD.png">
                              </div>
                           </a>
                           <div class="porducts-title col s12 m12 l12">
                              <div class="title-wishlist">
                                 <a href="/app-design-new/single-products.php">
                                    <h6 class="black-text">Fresh Essential No Gas Deodorant - Ignite, 150 ml (Pack of 2)</h6>
                                 </a>
                                 <div class="wishlist-icon ">
                                    <i class="material-icons dp48 wishlist" onclick="M.toast({html: 'Add to wishlist'})">favorite_border</i>
                                 </div>
                              </div>
                              <h6 class="green-text">$150</h6>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <a href="/app-design-new/single-products.php">
                              <div class="porducts-grid center">
                                 <img src="images/Insigne_2.jpg">
                              </div>
                           </a>
                           <div class="porducts-title col s12 m12 l12">
                              <div class="title-wishlist">
                                 <a href="/app-design-new/single-products.php">
                                    <h6 class="black-text">Fresh Essential No Gas Deodorant - Ignite, 150 ml (Pack of 2)</h6>
                                 </a>
                                 <div class="wishlist-icon ">
                                    <i class="material-icons dp48 wishlist" onclick="M.toast({html: 'Add to wishlist'})">favorite_border</i>
                                 </div>
                              </div>
                              <h6 class="green-text">$150</h6>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <a href="/app-design-new/single-products.php">
                              <div class="porducts-grid center">
                                 <img src="images/5.jpg">
                              </div>
                           </a>
                           <div class="porducts-title col s12 m12 l12">
                              <div class="title-wishlist">
                                 <a href="/app-design-new/single-products.php">
                                    <h6 class="black-text">Fresh Essential No Gas Deodorant - Ignite, 150 ml (Pack of 2)</h6>
                                 </a>
                                 <div class="wishlist-icon ">
                                    <i class="material-icons dp48 wishlist" onclick="M.toast({html: 'Add to wishlist'})">favorite_border</i>
                                 </div>
                              </div>
                              <h6 class="green-text">$150</h6>
                           </div>
                        </div>
                     </div>
                     <!-- Add Pagination -->
                     <div class="swiper-pagination"></div>
                  </div>
               </div>
               <div class="row">
                  <div class="col s6 m6 left-align">
                     <h6 class="top-margin"><a href="/app-design-new/products-page.php" class="red-text">Show more</a></h6>
                  </div>
                  <div class="col s6 m6 right-align">
                     <i class="material-icons dp48 red-text">chevron_right</i>
                  </div>
               </div>
            </div>
         </div>
         <hr class="app-hr">
         <div class="wrap-padding porducts-list">
            <div class="section"style="background-color: #f1f1f1;">
               <div class="row">
                  <div class="col s12 m12 l12 left-align">
                     <h6 class="top-margin"><b>Deals Near By</b></h6>
                     <img src="images/banner-gold.jpg" class="responsive-img">
                     <h5>VINTAGE</h5>
                     <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                     <p class="black-text">Only 71 items left in stok !</p>
                     <h6 class="black-text"><span class="red-text">$560</span>  <span class="grey-text">|</span> <strong>5:30:42</strong></h6>
                  </div>
               </div>
               <div class="row">
                  <div class="col s6 m6 left-align">
                     <h6 class="top-margin"><a href="/app-design-new/products-page.php" class="red-text">Show more</a></h6>
                  </div>
                  <div class="col s6 m6 right-align">
                     <i class="material-icons dp48 red-text">chevron_right</i>
                  </div>
               </div>
            </div>
         </div>
         <!-- Modal Structure -->
         <div class=" fadeInRight top-sheet fixed-notification-main">
            <div class="" style="position:relative;">
               <h4 class="fixed-notification">Notification 2<i class="material-icons dp48"><a href="/app-design-new/home.php" class="black-text">close</a></i></h4>

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
      <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="js/materialize.js"></script>
      <script src="js/jssor.slider.min.js" type="text/javascript"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
      <script src="js/init.js"></script>
      <script src="js/custom-jssor-slider.js"></script>
      <script>
            jQuery(document).ready(function($){
             $('ul.tabs').tabs();
           });
           //     jQuery('li.tab').click(function(){
           //   var target = $(this).children("a").attr("href");
           //   console.log(target);
           //   $('.tab-menu ').find(target).show();
           // })
            

            jQuery(document).ready(function($){
              jQuery('.modal').modal();
              slider('.four-products',4);
              slider('.recentlyAdded',3);
              jQuery('.wishlist-icon').click(function(){
                // $(this).html('<i class="material-icons dp48 ">favorite</i>')
                $(this).children('i').html('favorite');
              })
            });
              slider = function(selector,showS){
                var swiper = new Swiper(selector, {
                  slidesPerView: showS,
                  spaceBetween: 30,
                  centeredSlides: false,
                  pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                  },
                   autoplay: {
                  delay: 4000,
                },
                 breakpoints: {
                    480: {
                      slidesPerView: 2,
                      spaceBetween: 10,
                    },
                    640: {
                      slidesPerView: 2,
                      spaceBetween: 20,
                    },
                  }
                });    
              }
      </script>
   </body>
</html>