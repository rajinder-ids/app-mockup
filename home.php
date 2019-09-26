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
<body>

<div class="container custom-container" style="background-color:#f1f1f1">
   <div class="section topbar fixed-header">
      <!--   Icon Section   -->
      <div class="row">
         <div class="col s4 m4 left-align">
            <a href="#" data-target="slide-out" class="sidenav-trigger">
              <i class="material-icons white-text">menu</i>
            </a>
         </div>
         <div class="col s4 m4 center-align">
            HOME
         </div>
         <div class="col s4 m4 right-align modal-trigger app-notifications" href="#modal1">
            <span class="notifications-app"><i class="material-icons dp48">notifications_none</i></span>
         </div>
      </div>
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
          <li>
            <a href="home.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
          </li>
          <li>
            <a href="edit-profile.php"><i class="fa fa-user-o" aria-hidden="true"></i>My profile</a>
          </li>
          <li>
            <a href="send-code.php"><i class="fa fa-qrcode" aria-hidden="true"></i>Scan-code</a>
          </li>
          <li>
            <a href="subscription.php"><i class="fa fa-server" aria-hidden="true"></i>Subscription</a>
          </li>
          <li>
            <a href="home.php"><i class="fa fa-shield" aria-hidden="true"></i>Exclusive Items</a>
          </li>
          <li>
            <a href="watch-list.php"><i class="fa fa-heart-o" aria-hidden="true"></i>Watch List</a>
          </li>
          <li>
            <a href="shoping-list.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Shopping List</a>
          </li>
          <li>
            <a href="contact.php"><i class="fa fa-star-o" aria-hidden="true"></i>Feedback/Contact</a>
          </li>
          <li>
            <a href="faq.php"><i class="fa fa-wpforms" aria-hidden="true"></i>FAQ</a>
          </li>
          <li>
            <a href="sign-up.php"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>Logout</a>
          </li>
        </ul>
  <!---------sidebar menu----------->

   <div class="section product-categoery-icon" style="margin-top:70px">
      <div class="row">
        <div class="col s3 m3 center-align">
         <i class="fa fa-car" aria-hidden="true"></i>
          <h5>Car</h5>
        </div>
        <div class="col s3 m3 center-align">
          <i class="fa fa-desktop" aria-hidden="true"></i>
          <h5>Electronic</h5>
        </div>
        <div class="col s3 m3 center-align">
          <i class="fa fa-briefcase" aria-hidden="true"></i>
          <h5>Jobs</h5>
        </div>
        <div class="col s3 m3 center-align">
          <i class="fa fa-home" aria-hidden="true"></i>
          <h5>Property</h5>
        </div>
      </div>
   </div>

  <div class="section home-slider">
    <div class="row">
      <div class="col s12 m12 l12">
        <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1280px;height:380px;overflow:hidden;visibility:hidden;">
        
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1280px;height:380px;overflow:hidden;">
            <div>
                <img data-u="image" src="images/slider-1.png" />
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
  <div class="section">
    <div class="row">
      <div class="col s12 m12 l12 left-align">
            <h5>Exclusive Items</h5>
      </div>
      <div class="col s12 m12 l12">
        <div class="swiper-container recentlyAdded">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
                  <a href="#"><div class="porducts-grid center">
                    <img src="images/1.jpg">
                    <img class="app-wishlist-icon" src="images/congrats-badge.png">
                  </div></a>
                  <div class="porducts-title col s8 m8 l8">
                    <a href="#"><h6 class="black-text">Fresh Essential No Gas Deodorant - Ignite, 150 ml (Pack of 2)</h6></a>
                    <h6 class="green-text">$150</h6>
                  </div>
                  <div class="wishlist-icon col s4 m4 l4 right-align">
                    <i class="material-icons dp48 wishlist" onclick="M.toast({html: 'Add to wishlist'})">favorite_border</i>
                   
                  </div>
            </div>
            <div class="swiper-slide">
                  <a href="#"><div class="porducts-grid center">
                    <img src="images/3.jpg">
                    <img class="app-wishlist-icon" src="images/congrats-badge.png">
                  </div></a>
                  <div class="porducts-title col s8 m8 l8">
                    <a href="#"><h6 class="black-text">Fresh Essential No Gas Deodorant - Ignite, 150 ml (Pack of 2)</h6></a>
                    <h6 class="green-text">$150</h6>
                  </div>
                  <div class="wishlist-icon col s4 m4 l4 right-align">
                     <i class="material-icons dp48" onclick="M.toast({html: 'Add to wishlist'})">favorite_border</i>
                  </div> 
            </div>
            <div class="swiper-slide">
                  <a href="#"><div class="porducts-grid center">
                   <img src="images/Women-Bag-PNG-HD.png">
                   <img class="app-wishlist-icon" src="images/congrats-badge.png">
                  </div></a>
                  <div class="porducts-title col s8 m8 l8">
                    <a href="#"><h6 class="black-text">Bag</h6></a>
                    <h6 class="green-text">$150</h6>
                  </div>
                  <div class="wishlist-icon col s4 m4 l4 right-align">
                     <i class="material-icons dp48" onclick="M.toast({html: 'Add to wishlist'})">favorite_border</i>
                  </div> 
            </div>
            <div class="swiper-slide">
                  <a href="#"><div class="porducts-grid center">
                    <img src="images/Insigne_2.jpg">
                    <img class="app-wishlist-icon" src="images/congrats-badge.png">
                  </div></a>
                  <div class="porducts-title col s8 m8 l8">
                    <a href="#"><h6 class="black-text">Bag</h6></a>
                    <h6 class="green-text">$150</h6>
                  </div>
                  <div class="wishlist-icon col s4 m4 l4 right-align">
                     <i class="material-icons dp48" onclick="M.toast({html: 'Add to wishlist'})">favorite_border</i>
                  </div>
            </div>
            <div class="swiper-slide">
                   <a href="#"><div class="porducts-grid center">
                   <img src="images/5.jpg">
                   <img class="app-wishlist-icon" src="images/congrats-badge.png">
                  </div></a>
                  <div class="porducts-title col s8 m8 l8">
                    <a href="#"><h6 class="black-text">Bag</h6></a>
                    <h6 class="green-text">$150</h6>
                  </div>
                  <div class="wishlist-icon col s4 m4 l4 right-align">
                     <i class="material-icons dp48" onclick="M.toast({html: 'Add to wishlist'})">favorite_border</i>
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
            <h6><a href="/app-design-new/home.php" class="red-text">Show more</a></h6>
          </div>
          <div class="col s6 m6 right-align">
            <i class="material-icons dp48 red-text">chevron_right</i>
          </div>
      </div>
  </div>
   <hr class="app-hr">
   <div class="section">
    <div class="row">
      <div class="col s12 m12 l12 left-align">
            <h5>Recently Added</h5>
      </div>
      <div class="col s12 m12 l12">
        <div class="swiper-container recentlyAdded">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
                  <a href="#"><div class="porducts-grid center">
                    <img src="images/1.jpg">
                  </div></a>
                  <div class="porducts-title col s8 m8 l8">
                    <a href="#"><h6 class="black-text">Bag</h6></a>
                    <h6 class="green-text">$150</h6>
                  </div>
                  <div class="wishlist-icon col s4 m4 l4 right-align">
                    <i class="material-icons dp48 " onclick="M.toast({html: 'Add to wishlist'})">favorite_border</i>
                  </div>
            </div>
            <div class="swiper-slide">
                  <a href="#"><div class="porducts-grid center">
                    <img src="images/3.jpg">
                  </div></a>
                  <div class="porducts-title col s8 m8 l8">
                    <a href="#"><h6 class="black-text">Bag</h6></a>
                    <h6 class="green-text">$150</h6>
                  </div>
                  <div class="wishlist-icon col s4 m4 l4 right-align">
                     <i class="material-icons dp48" onclick="M.toast({html: 'Add to wishlist'})">favorite_border</i>
                  </div> 
            </div>
            <div class="swiper-slide">
                  <a href="#"><div class="porducts-grid center">
                   <img src="images/Women-Bag-PNG-HD.png">
                  </div></a>
                  <div class="porducts-title col s8 m8 l8">
                    <a href="#"><h6 class="black-text">Bag</h6></a>
                    <h6 class="green-text">$150</h6>
                  </div>
                  <div class="wishlist-icon col s4 m4 l4 right-align">
                     <i class="material-icons dp48" onclick="M.toast({html: 'Add to wishlist'})">favorite_border</i>
                  </div> 
            </div>
            <div class="swiper-slide">
                  <a href="#"><div class="porducts-grid center">
                    <img src="images/Insigne_2.jpg">
                  </div></a>
                  <div class="porducts-title col s8 m8 l8">
                    <a href="#"><h6 class="black-text">Bag</h6></a>
                    <h6 class="green-text">$150</h6>
                  </div>
                  <div class="wishlist-icon col s4 m4 l4 right-align">
                     <i class="material-icons dp48" onclick="M.toast({html: 'Add to wishlist'})">favorite_border</i>
                  </div>
            </div>
            <div class="swiper-slide">
                   <a href="#"><div class="porducts-grid center">
                   <img src="images/5.jpg">
                  </div></a>
                  <div class="porducts-title col s8 m8 l8">
                    <a href="#"><h6 class="black-text">Bag</h6></a>
                    <h6 class="green-text">$150</h6>
                  </div>
                  <div class="wishlist-icon col s4 m4 l4 right-align">
                     <i class="material-icons dp48" onclick="M.toast({html: 'Add to wishlist'})">favorite_border</i>
                  </div>
            </div>
          </div>
          <!-- Add Pagination -->
          <div class="swiper-pagination"></div>
        </div>
      </div>
      <div class="row">
          <div class="col s6 m6 left-align">
            <h6><a href="/app-design-new/home.php" class="red-text">Show more</a></h6>
          </div>
          <div class="col s6 m6 right-align">
            <i class="material-icons dp48 red-text">chevron_right</i>
          </div>
      </div>
    </div>
  </div>
   <hr class="app-hr">
   <div class="wrap-padding porducts-list">
      <div class="section">
        <div class="row">
          <div class="col s12 m12 l12 left-align">
            <h5>Deals Near By</h5>
            <img src="images/banner-gold.jpg" class="responsive-img">
            <h5>VINTAGE</h5>
            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <p class="black-text">Only 71 items left in stok !</p>
            <h6 class="black-text"><span class="red-text">$560</span>  <span class="grey-text">|</span> <strong>5:30:42</strong></h6>
          </div>
        </div>
         <div class="row">
          <div class="col s6 m6 left-align">
            <h6><a href="/app-design-new/home.php" class="red-text">Show more</a></h6>
          </div>
          <div class="col s6 m6 right-align">
            <i class="material-icons dp48 red-text">chevron_right</i>
          </div>
        </div>
      </div>
   </div>
 <!-- Modal Structure -->
  <div id="modal1" class="modal bottom-sheet">
    <div class="modal-content">
      <h4>Notification</h4>
      <ul class="collection">
              <li class="collection-item avatar">
                <i class="material-icons circle green">assessment</i>
                <span class="title">Title</span>
                <p>First Line
                  <br> Second Line
                </p>
                <a href="#!" class="secondary-content">
                  <i class="material-icons">grade</i>
                </a>
              </li>
              <li class="collection-item avatar">
                <i class="material-icons circle">folder</i>
                <span class="title">Title</span>
                <p>First Line
                  <br> Second Line
                </p>
                <a href="#!" class="secondary-content">
                  <i class="material-icons">grade</i>
                </a>
              </li>
              <li class="collection-item avatar">
                <i class="material-icons circle green">assessment</i>
                <span class="title">Title</span>
                <p>First Line
                  <br> Second Line
                </p>
                <a href="#!" class="secondary-content">
                  <i class="material-icons">grade</i>
                </a>
              </li>
              <li class="collection-item avatar">
                <i class="material-icons circle red">play_arrow</i>
                <span class="title">Title</span>
                <p>First Line
                  <br> Second Line
                </p>
                <a href="#!" class="secondary-content">
                  <i class="material-icons">grade</i>
                </a>
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
  

  </body>
</html>
