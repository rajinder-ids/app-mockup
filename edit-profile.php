<?php 
  include_once('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Edit-profile</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container custom-container edit-profile-section">
  <div class="section topbar">
      <!--   Icon Section   -->
      <div class="row">
         <div class="col s4 m4 left-align">
            <a href="/app-design-new/home.php"class="white-text"><i class="material-icons dp48" style="font-size:40px">chevron_left</i></a>
         </div>
         <div class="col s4 m4 center-align">
            Edit profile
         </div>
         <div class="col s4 m4 right-align">
           <!--  <i class="material-icons dp48">notifications_none</i> -->
         </div>
      </div>
  </div>

  <div class="section center upload-image">
        <div class="row">
        <div class="upload-image">
          <img src="images/edit-profile-img.png">
        </div>
      </div>
  </div>
  <div class="wrap-padding">
     <div class="section">
      <div class="row">
          <form class="col s12" method="post">
            <div class="card">
                <?php echo $message; ?>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="name" type="text" class="validate" name="username">
                <label for="name">Name</label>
                <div class="errorTxt4">
                  <div class="error">
                    <?php
                      if(!empty($namevalidate)){
                        echo $namevalidate;
                      } 
                    ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="email" type="email" class="validate" name="email">
                <label for="email">Email</label>
                <div class="errorTxt4">
                  <div class="error">
                    <?php
                      if(!empty($emailvalidate)){
                        echo $emailvalidate;
                      } 
                    ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="phoneNumber" type="tel" class="validate" name="phoneNumber">
                <label for="phoneNumber">City</label>
                <div class="errorTxt4">
                  <div class="error">
                    <?php
                      if(!empty($cityvalidate)){
                        echo $cityvalidate;
                      } 
                    ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="phoneNumber" type="tel" class="validate" name="phoneNumber">
                <label for="phoneNumber">Phone</label>
                <div class="errorTxt4">
                  <div class="error">
                    <?php
                      if(!empty($phoneNumbervalidate)){
                        echo $phoneNumbervalidate;
                      } 
                    ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="phoneNumber" type="tel" class="validate" name="phoneNumber">
                <label for="phoneNumber">Subscription Plan</label>
                <div class="errorTxt4">
                  <div class="error">
                    <?php
                      if(!empty($subscriptionvalidate)){
                        echo $subscriptionvalidate;
                      } 
                    ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col s12">
                <h5 class="black-text">Interested Areas</h5>
              </div>
              <div class="col s6 m4">
                <p>
                  <label>
                    <input type="checkbox" class="filled-in" />
                    <span>Fashion</span>
                  </label>
                </p>
                <p>
                  <label>
                    <input type="checkbox" class="filled-in" />
                    <span>Electronics</span>
                  </label>
                </p>
                <p>
                  <label>
                    <input type="checkbox" class="filled-in" />
                    <span>Sports</span>
                  </label>
                </p>
                <p>
                  <label>
                    <input type="checkbox" class="filled-in" />
                    <span>Vehicles</span>
                  </label>
                </p>
              </div>
              <div class="col s6 m4">
                <p>
                  <label>
                    <input type="checkbox" class="filled-in" />
                    <span>Property</span>
                  </label>
                </p>

                <p>
                  <label>
                    <input type="checkbox" class="filled-in" />
                    <span>Jobs</span>
                  </label>
                </p>

                <p>
                  <label>
                    <input type="checkbox" class="filled-in" />
                    <span>Kitchen</span>
                  </label>
                </p>

                <p>
                  <label>
                    <input type="checkbox" class="filled-in" />
                    <span>Offers</span>
                  </label>
                </p>
              </div>
              <div class="col s6 m4">
                <p>
                  <label>
                    <input type="checkbox" class="filled-in" />
                    <span>Toys/Games</span>
                  </label>
                </p>
                <p>
                  <label>
                    <input type="checkbox" class="filled-in" />
                    <span>Home Decor</span>
                  </label>
                </p>
                <p>
                  <label>
                    <input type="checkbox" class="filled-in" />
                    <span>Fitness</span>
                  </label>
                </p>
                <p>
                  <label>
                    <input type="checkbox" class="filled-in" />
                    <span>Bady care</span>
                  </label>
                </p>
              </div>
            </div>
            <div class="row center"> 
              <button class="btn waves-effect waves-light btn-large change-password-btn" type="submit" name="action">Change Password</button>
            </div>
            <div class="row center"> 
              <button class="btn waves-effect waves-light btn-large sign-in-btn" type="submit" name="action">Update Profile</button>
            </div>
          </form>
        </div>
     </div>
   </div>
</div>

  <!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  <script type="text/javascript">
    $('.sign-in-btn').click(function() {
      $('.sign-in-btn').html('<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>Sign in').addClass('disabled');
    });
  </script>

  </body>
</html>
