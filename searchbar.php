<?php 
   include_once('config.php');
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
      <title>Forget-password</title>
      <!-- CSS  -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
   <body style="background-color: #f1f1f1;">
      <div class="container custom-container">
         <div class="section" style="box-shadow: 0 1px 1.5px rgba(0,0,0,.11765);background: #fff;">
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
         <div class="section" style="box-shadow: 0 1px 1.5px rgba(0,0,0,.11765);background: #fff;margin-top:12px;">
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
         </div>
         
      </div>
    
      <!--  Scripts-->
      <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="js/materialize.js"></script>
      <script src="js/init.js"></script>
   </body>
</html>