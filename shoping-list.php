<?php 
  include_once('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Shoping list</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container custom-container">
  <div class="section topbar">
      <!--   Icon Section   -->
      <div class="row">
         <div class="col s4 m4 left-align">
            <a href="/app-design-new/home.php" class="white-text"><i class="material-icons dp48" style="font-size: 40px">chevron_left</i></a>
         </div>
         <div class="col s4 m4 center-align">
            Shoping List
         </div>
         <!-- <div class="col s4 m4 right-align">
           <i class="material-icons dp48">notifications_none</i>
         </div> -->
      </div>
  </div>
  <div class="wrap-padding">
      <div class="section">
        <div class="row">
          <div class="col s6 m6 l6 left-align">
            <h5>ITEMS(n)</h5>
          </div>
          <div class="col s6 m6 l6 right-align">
            <h5><small class="green-text">Select all</small>&nbsp; <small> Delete all</small></h5>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col s12 m12 l4">
            <div class="shoping-list">
              <div class="col s4 center">
                <div class="shoping-list-img">
                  <img src="images/2.png">
                </div>
              </div>
              <div class="col s6">
                <div class="shoping-list-title">
                  <h6 class="black-text">Convallis Furniture</h6>
                  <p class="grey-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                  <h6 class="green-text">$14.67 <small class="grey-text discount-price">$16.71</small> <span class="black-text">(Save 10%) </span</h6>
                </div>
              </div>
              <div class="col s2 left-align">
                <h6>
                <label>
                  <input type="checkbox" class="filled-in" />
                  <span></span>
                </label>
              </h6>
                <a href="#"><i class="material-icons dp48 grey-text">delete</i></a>
              </div>
            </div>
          </div>
          <div class="col s12 m12 l4">
            <div class="shoping-list">
              <div class="col s4 center">
                <div class="shoping-list-img">
                  <img src="images/rating.png">
                </div>
              </div>
              <div class="col s6">
                <div class="shoping-list-title">
                  <h6 class="black-text truncate">Convallis Furniture</h6>
                  <p class="grey-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                  <h6 class="green-text">$14.67 <small class="grey-text discount-price">$16.71</small> <span class="black-text">(Save 10%) </span</h6>
                </div>
              </div>
              <div class="col s2 left-align">
                <h6>
                <label>
                  <input type="checkbox" class="filled-in" />
                  <span></span>
                </label>
              </h6>
                <a href="#"><i class="material-icons dp48 grey-text">delete</i></a>
              </div>
            </div>
          </div>
          <div class="col s12 m12 l4">
            <div class="shoping-list">
              <div class="col s4 center">
                <div class="shoping-list-img">
                  <img src="images/2.png">
                </div>
              </div>
              <div class="col s6">
                <div class="shoping-list-title">
                  <h6 class="black-text truncate">Convallis Furniture</h6>
                  <p class="grey-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                  <h6 class="green-text">$14.67 <small class="grey-text discount-price">$16.71</small> <span class="black-text">(Save 10%) </span</h6>
                </div>
              </div>
              <div class="col s2 left-align">
                <h6>
                <label>
                  <input type="checkbox" class="filled-in" />
                  <span></span>
                </label>
              </h6>
                <a href="#"><i class="material-icons dp48 grey-text">delete</i></a>
              </div>
            </div>
          </div>
          <div class="col s12 m12 l4">
            <div class="shoping-list">
              <div class="col s4 center">
                <div class="shoping-list-img">
                  <img src="images/2.png">
                </div>
              </div>
              <div class="col s6">
                <div class="shoping-list-title">
                  <h6 class="black-text truncate">Convallis Furniture</h6>
                  <p class="grey-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                  <h6 class="green-text">$14.67 <small class="grey-text discount-price">$16.71</small> <span class="black-text">(Save 10%) </span</h6>
                </div>
              </div>
              <div class="col s2 left-align">
                <h6>
                <label>
                  <input type="checkbox" class="filled-in" />
                  <span></span>
                </label>
              </h6>
                <a href="#"><i class="material-icons dp48 grey-text">delete</i></a>
              </div>
            </div>
          </div>
          <div class="col s12 m12 l4">
            <div class="shoping-list">
              <div class="col s4 center">
                <div class="shoping-list-img">
                  <img src="images/rating.png">
                </div>
              </div>
              <div class="col s6">
                <div class="shoping-list-title">
                  <h6 class="black-text truncate">Convallis Furniture</h6>
                  <p class="grey-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                  <h6 class="green-text">$14.67 <small class="grey-text discount-price">$16.71</small> <span class="black-text">(Save 10%) </span</h6>
                </div>
              </div>
              <div class="col s2 left-align">
                <h6>
                <label>
                  <input type="checkbox" class="filled-in" />
                  <span></span>
                </label>
              </h6>
                <a href="#"><i class="material-icons dp48 grey-text">delete</i></a>
              </div>
            </div>
          </div>
          <div class="col s12 m12 l4">
            <div class="shoping-list">
              <div class="col s4 center">
                <div class="shoping-list-img">
                  <img src="images/2.png">
                </div>
              </div>
              <div class="col s6">
                <div class="shoping-list-title">
                  <h6 class="black-text truncate">Convallis Furniture</h6>
                  <p class="grey-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                  <h6 class="green-text">$14.67 <small class="grey-text discount-price">$16.71</small> <span class="black-text">(Save 10%) </span</h6>
                </div>
              </div>
              <div class="col s2 left-align">
                <h6>
                <label>
                  <input type="checkbox" class="filled-in" />
                  <span></span>
                </label>
              </h6>
                <a href="#"><i class="material-icons dp48 grey-text">delete</i></a>
              </div>
            </div>
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
