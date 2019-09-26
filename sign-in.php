<?php 
  include_once('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Sign in</title>
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container custom-container">
  <div class="wrap-padding"style="background-color: #fff">
    <div class="col s12 m12 l2 left-algin top-section-fixed">
          <a href="/app-design-new/bargainz.php">
            <i class="material-icons dp48 black-text" style="font-size: 40px">chevron_left</i>
          </a>
        </div>
     <div class="section center-section">
      <div class="row" style="width: 100%;margin-top:50px;">
        <div class="col s12 m12 l2 left-algin">
          <h4 class="red-text">Sign In</h4>
        </div>
          <form class="col s12" method="post">
            <div class="card">
                <?php echo $message; ?>
            </div>
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
            <div class="row">
              <div class="input-field col s12">
                <input id="password" type="password" class="validate" name="password">
                <label for="password">Password</label>
                <a href=""><h6 class="grey-text right-algin">Forget Password?</h6></a>
                <div class="errorTxt4">
                  <div class="error">
                    This field is required                  
                  </div>
                </div>
              </div>
            </div>
            <div class="row center"> 
              <button class="btn waves-effect waves-light btn-large sign-in-btn white-text" type="submit" name="action">Sign in</button>
            </div>
          </form>
        </div>
     </div>
     <div class="row center footer-section"> 
      <div class="col s12 m12 l12">
          <h5 class="grey-text">Don't have an account? <a href="/app-design-new/sign-up.php" class="red-text">Create Account</a></h5>
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
