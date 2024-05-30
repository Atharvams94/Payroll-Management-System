

<html>
<head>
<link rel="stylesheet" href="style/page.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body  background-color: grey;>
    <div class="page-modal-content  page-animate-zoom" style="">

      <div class="page-center"><br>
        <img src="images/imageuser.jpg" alt="Avatar" style="width:30%" class="page-circle page-margin-top">
      </div>

      <form class="page-container" action="" method="post" autocomplete="off">
        <div class="page-section">
          <label><b>Username</b></label><br>
          <input class="page-input page-border page-margin-bottom" type="text" placeholder="Enter Username" name="username" required><br>
          <label><b>Password</b></label>
          <input class="page-input page-border" type="password" placeholder="Enter Password" name="password" required>
					<input type="hidden" name="token" value="<?php echo Token::generate(); ?>" />
					<button class="page-button page-block page-light-blue page-section page-padding" type="submit">Login</button>

          <input class="page-check page-margin-top" type="checkbox" name = "remember"> Remember me
        </div>
      </form>

      <div class="page-container page-border-top page-padding-16 ">
        <span class="page-left page-padding page-hide-small"> <a href="register.php">Register</a></span>
        <span class="page-right page-padding page-hide-small">Forgot <a href="register.php">password?</a></span>
      </div>

    </div>


  </body>
  </html>
