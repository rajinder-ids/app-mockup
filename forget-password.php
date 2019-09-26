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
<body>

<div class="container custom-container height-100">
  <div class="wrap-padding height-100"style="background-color: #fff">
    <div class="col s12 m12 l2 left-algin">
          <a href="/app-design/bargainz.php">
            <i class="material-icons dp48 black-text" style="font-size: 40px">chevron_left</i>
          </a>
        </div>
     <div class="section app-form">
      <div class="row">
        <div class="col s12 m12 left-algin">
          <h4 class="red-text">Forget Password</h4>
          <p class="grey-text">Please enter your email address below and we will send an email to change your password.</p>
        </div>
          <form class="col s12" method="post">

            <div class="row">
              <div class="input-field col s12">
                <input id="email" type="email" class="validate" name="email">
                <label for="email">Email</label>
                <div class="errorTxt4">
                  <div class="error">
                    This field is required                  
                  </div>
                </div>
              </div>
            </div>
            <div class="row center"> 
              <button class="btn waves-effect waves-light btn-large sign-in-btn white-text" type="submit" name="action">Send email</button>
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
