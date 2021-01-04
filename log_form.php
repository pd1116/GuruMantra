<?php
	session_start();
	include('conn.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Gurumantra | Coaching Class</title>
    <!--CSS-->
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <link href="home_page.css" rel="stylesheet" type="text/css"/>
    <!--logo-->
<link rel="shortcut icon" href="logo_guru.png" type="image/x-icon">
<link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@800&display=swap" rel="stylesheet">
<!--Font-->
<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Laila:wght@500&display=swap" rel="stylesheet">
  </head>
  <body>
    <!-- Header -->
    <h4  class="font_f">
      <img src="logo_guru.png" width="50" height="50" style="border-radius: 50%; border-width: 1px; border-color: rgb(255, 255, 255); border-style: solid; margin-right: 10px; box-shadow: 0px 3px 6px rgb(255, 255, 255); margin-left: 10px;"><b>गुरुमंत्र</b>

    </h4>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav_list">  
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
               <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>

      <!-- Our Courses -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Our Courses </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Std 5</a>
                <a class="dropdown-item" href="#">Std 6</a>
                <a class="dropdown-item" href="std7.html">Std 7</a>
                <a class="dropdown-item" href="#">Std 8</a>
                <a class="dropdown-item" href="#">Std 9</a>
                </div>
            </li>
      
      <!-- About SGS -->
          <li class="nav-item">
            <a class="nav-link" href="about_us.html">About Us<span class="sr-only">(current)</span></a>
          </li>
        </ul>
        </div>
      </nav>
  <!--Login Form-->
<div class="container">
  <form method="POST" action="login.php">
    <div class="demo-table">
    <div class="form-head">Login</div>
    <div class="field-column">
    <div>
	    <label>Username:</label>
	  </div>
    <div>
      <input id="user_name" type="text" class="textb" value="<?php if (isset($_COOKIE["user"])){echo $_COOKIE["user"];}?>" name="username">
    </div>
    </div>
    <div class="field-column">
    <div>
      <label>Password:</label>
	  </div>
    <div>
      <input name="password" id="password" type="password" class="textb" value="<?php if (isset($_COOKIE["pass"])){echo $_COOKIE["pass"];}?>" name="password">
    </div>
  <div class=field-column>
  <div>
	 <input type="submit" name="login" value="Login" class="btnLogin"></span>
  </div>
  </div>
	</form>
 	</div>
	<span>
	<?php
		if (isset($_SESSION['message'])){
			echo $_SESSION['message'];
		}
		unset($_SESSION['message']);
	?>
</span>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>