<?php

	require "functions.php";
	check_login();
?>


<!DOCTYPE html>
<html>



<head>
	<meta charset="utf-8">
	<title>Home</title>
	<title>PURRFECT</title>
    <!-- Bootstrap Link -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    
    <!-- CSS LINK -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="style6.css">


    <!-- Fonts  Awesome-->
    <script src="https://kit.fontawesome.com/905a42ee69.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&family=Open+Sans:wght@500&display=swap" rel="stylesheet"><link />
    <link href="https://fonts.googleapis.com/css2?family=Sniglet&display=swap" rel="stylesheet"><link />

</head>
<body>

	<!-- <h1>Home</h1> -->

  <?php if(check_login(false)):?>
		<!-- Hi, <?=$_SESSION['USER']->username?>; -->

		<br><br>
		<?php if(!check_verified()):?>
			<a href="verify.php">
				<button>Verify Profile</button>
			</a>
		<?php endif;?>
	<?php endif;?>
  

<!-- Title -->
<section id="Title">
        <div class="container-fluid">
            <!-- Nav Bar -->
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.php"><span style="color:#7AC7E6"> PURR</span><span style="color:#FFDB58">FECT</span></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#brigette" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="brigette">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Pet
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="CatFood.php"> <i class="fas fa-paw"></i> Cat</a></li>
                                <li><a class="dropdown-item" href="DogFood.php"> <i class="fas fa-paw"></i> Dog</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#Contacts">Contact</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="login.php">LogIn</a>
                       </li>

                          <li class="nav-item">
                              <a class="nav-link" href="signup.php">SignUp</a>
                          </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#About_Us">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="profile.php"><i class="fa-solid fa-user"></i></a>
                        </li>

                    </ul>

                </div>
            </nav>
    </section>


    <div class="container">
    <div class="row profile">
	<!-- <div class="col-md-4"> -->
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img class="profile" src=images/review_img.jpg  alt="img">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
					<?=$_SESSION['USER']->username?>
					</div>
					<div class="profile-usertitle-job">
						Silver Member
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-warning btn-sm">Follow</button>
					<button type="button" class="btn btn-primary btn-sm">Message</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-user"></i>
							Account Settings </a>
						</li>
						<li class="active">
							<a href="#">
							<i class="fas fa-heart"></i>
							Favorites </a>
						</li>
						<li>
							<a href="#" target="_blank">
							<i class="fas fa-clipboard-list"></i>
							Wishlist </a>
						</li>
						<li>
							<a href="#" target="_blank">
							<i class="fas fa-address-book"></i>
							Address </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-flag"></i>
							Help </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->

</div>


    <!-- Footer -->
<footer id="footer">
    <hr class="line">
    <div class="ft-box">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-ft">
                <p class="ft-title"><span style="color:#7AC7E6"> PURR</span><span style="color:#FFDB58">FECT</span></p>
                <p class="ft-text">
                    Sign Up for our newsletter and
                    received 5%off on your first order
                    <div class="input-group">
                      <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                      <button type="button" class="btn btn-outline-primary">search</button>
                    </div>
                </p>
            </div>
            <div class="col-lg-4 col-md-6 col-ft">
                <p> <a class="ft-Title" href="index.php"> Menu</a> </p>
                <p> <a class="ft-text" href="index.php"> Home</a>  </p>
                <p>  <a class="ft-text" href="index.php"> Pet</a>  </p>
                <p> <a class="ft-text" href="index.php#About_Us">About</a> </p>
                <p>  <a class="ft-text" href="shoppingcart.php">Cart</a> </p>
                <p> <a class="ft-text" href="account.php">Account</a> </p>
            </div>
            <div class="col-lg-4 col-md-12  col-ft">
                <p class="ft-title"> CONNECT WITH US</p>
                <ul class="wrapper">
                  <li class="icon facebook">
                    <span class="tooltip">Facebook</span>
                    <span><i class="fab fa-facebook-f fa-1x"></i></span>
                  </li>
                  <li class="icon twitter">
                    <span class="tooltip">Twitter</span>
                    <span><i class="fab fa-twitter fa-1x"></i></span>
                  </li>
                  <li class="icon instagram">
                    <span class="tooltip">Instagram</span>
                    <span><i class="fab fa-instagram fa-1x"></i></span>
                  </li>
                  <li class="icon github">
                    <span class="tooltip">Github</span>
                    <span><i class="fab fa-github fa-1x"></i></span>
                  </li>
                  <li class="icon youtube">
                    <span class="tooltip">Youtube</span>
                    <span><i class="fab fa-youtube fa-1x"></i></span>
                  </li>
                </ul>
            </div>
        </div>
        <hr><hr />
    
    
        <div class="copyright-box">
            <p class="copyright"> ©PURRFECT 2022 PURFFECT </p>
        </div>
    </div>
    <hr class="line">
    
    </footer>
    


</body>
</html>
