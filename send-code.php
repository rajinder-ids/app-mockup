<?php 
  include_once('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Send code</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container custom-container scan-code-bg">
  <div class="section topbar">
      <!--   Icon Section   -->
      <div class="row">
         <div class="col s4 m4 left-align">
            <a href="/app-design-new/home.php" class="white-text"><i class="material-icons dp48" style="font-size:40px">chevron_left</i></a>
         </div>
         <div class="col s4 m4 center-align">
            Send code
         </div>
         <div class="col s4 m4 right-align">
           <!--  <i class="material-icons dp48">notifications_none</i> -->
         </div>
      </div>
      <div class="row">
        <div class="col s2">
        </div>
        <div class="col s8">
          <h5>Mobile Phone</h5>
          <div class="input-field">
              <input id="icon_telephone" type="tel" class="validate white-text">
              <label for="icon_telephone" class="white-text">Enter mobile number</label>
          </div>
          <h5>Or <small>Scan QR-code</small></h5>
        </div>
        <div class="col s2">
        </div>
      </div>
  </div>
  <div class="section">
    <div class="row ">
      <div class="col s12 m12 l12" style="height: 600px;position:relative">
        <div class="send-code">
          <img src="images/send-code.png" class="responsive-img">
        </div>
      </div>
    </div>
  </div>
  <div class="section scan-code-bg">
    <div class="row center">
      <div class="col s12 m12 l12">
        <button class="btn waves-effect waves-light btn-large sign-in-btn white-text" name="action">Next</button>
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
