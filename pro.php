<?php

	require "functions.php";
	check_login();
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style6.css">
<link rel="stylesheet" href="css/style2.css">

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css'>
<!-- <link rel="stylesheet" href="style3.css"> -->
<!-- <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Solway:wght@800&display=swap" rel="stylesheet"> -->

<link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&family=Open+Sans:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Sniglet&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<head>
	<meta charset="utf-8">
	<title>Profile</title>
</head>
<body>

	<h1>Profile</h1>

	<?php include('header.php');?>
  <?php if(check_login(false)):?>
		<!-- Hi, <?=$_SESSION['USER']->username?>; -->

		<br><br>
		<?php if(!check_verified()):?>
			<a href="verify.php">
				<button>Verify Profile</button>
			</a>
		<?php endif;?>
	<?php endif;?>


<!--Navbar-->
<section id="Title">
        <div class="container-fluid">
            <!-- Nav Bar -->
            <nav class="navbar navbar-light">
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

                        <li class="nav-item">
<!--Cart-->
<div class = "cart">
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary cart-btn" data-bs-toggle="modal" data-bs-target="#cart">
    <i class="fas fa-cart-arrow-down"></i> <span class = "total-items-in-cart">0</span>
  </button>
  <!-- Modal -->
  <div class="modal fade" id="cart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><span style="color:#7AC7E6">SHOPPING</span><span style="color:#FFDB58">   CART</span></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class = "row cart-sub">
            <div class="col-4">Item</div>
            <div class="col-4">Unit price</div>
            <div class="col-4">Units</div>
          </div>
          <div class = "cart-items">
              <!--Render Cart Items-->
          </div>
        </div>
        <div class="modal-footer">
          <div class="subtotal text-center" id="total">
            Subtotal (0 items): PHP 
        </div>
        <button type="button" class="btn btn-primary cart-btn" data-bs-toggle="modal" data-bs-target="#cart">BUY NOW!</button>
        </div>
      </div>
    </div>
  </div>
</div>
                        </li>

<li class="nav-item">

<!--WishList-->
<div class = "wishlist">
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary wish-list-btn" data-bs-toggle="modal" data-bs-target="#wishlist">
  <i class="fas fa-heart"></i></span>
  </button>
  <!-- Modal -->
  <div class="modal fade" id="wishlist" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><span style="color:#7AC7E6">WISH</span><span style="color:#FFDB58">LIST</span></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class = "row cart-sub">
          <div class="col-4">Item</div>
          <div class="col-4">Price</div>
          <div class="col-4">Rate</div>
        </div>
        <div class = "wish-list-items">
            <!--Render Cart Items-->
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
</li>
                    </ul>

                </div>
            </nav>
        </div>
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


<br>
<br>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script><script  src="./script.js"></script>

</body>

</body>
</html>

