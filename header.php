<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Login Traning" />
    <meta name="viewport"    content="width=device-width, initial-scale=1" />
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="style/style.css" />
  </head>
  <body>
    <!-- The Head Of Page -->
    <header>
      <!-- The Navbar of Page -->
      <nav>
        <!-- Logo -->
        <a href="index.php">
          <img src="imgs/logo.png" alt="logo" />
        </a>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">AboutMe</a></li>
        <ul>
      </nav>
        <!-- Login Form -->
        <div class="header-login">
          <form class="login-f" method="post" action="#">
            <input type="text" name="userin" placeholder="Username Or E-mail" minlength="6" maxlength="20" required>
            <input type="password" name="pwd" placeholder="Password" minlength="8" maxlength="22" required>
            <button type="submit" name="login-submit">Login</button>
          </form>
          <!-- The Register Page-->
          <a href="signup.php" class="signup-l">SignUp</a>
          <!-- Sign Out -->
          <form class="signout-f" action="includes/logout.inc.php" method="post">
              <button type="submit" name="logoutsub">Logout</button>
          </form>
        </div>
    </header>
