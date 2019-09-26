<?php 
  include_once('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Subscription</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container custom-container" style="background-color:#f1f1f1">
  <div class="section topbar">
      <!--   Icon Section   -->
      <div class="row">
         <div class="col s4 m4 left-align">
            <a href="/app-design-new/home.php" class="white-text"><i class="material-icons dp48" style="font-size:40px">chevron_left</i></a>
         </div>
         <div class="col s4 m4 center-align">
            Subscription
         </div>
         <div class="col s4 m4 right-align">
           <!--  <i class="material-icons dp48">notifications_none</i> -->
         </div>
      </div>
      <div class="row padding-top-bottom-20">
        <div class="col s12 m12 l12 center">
          <img src="images/Subscription.png">
          <h6>Your monthly Free package is now Expire</h6>
          <h5>Checkout our<br>Subscription Plans</h5>
        </div>
      </div>
  </div>

  <div class="section" style="margin-top:40px;margin-bottom:40px">
    <div class="row center">
      <div class="col s12 m12 l12">
        <div class="card padding-top-bottom-20">
          <h4><strong>1</strong></h4>
          <h5><strong>Week</strong></h5>
          <h5 class="grey-text">Subscription plan</h5>
          <div class="Subscription-price">
            <h4><strong>$2 </strong><small class="grey-text discount-price"> $5</small></h4>
          </div>
          <h5><strong>Start Now</strong></h5>
        </div>
      </div>
    </div>
  </div>
  <div class="section topbar Premium-subscriber-btn">
    <div class="row center">
      <div class="col s12 m12 l12">
        <h5 class="no-margin"><a href="#" class="white-text">Become Premium Subscriber</h5>
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
