<?php

	require "functions.php";
	check_login();
?>

<!DOCTYPE html>
<html>



<!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css'> -->
<!-- <link rel="stylesheet" href="style3.css"> -->
<!-- <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Solway:wght@800&display=swap" rel="stylesheet"> -->

<!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
  <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
  <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&family=Open+Sans:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Sniglet&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->

<head>
	<meta charset="utf-8">
	<title>Profile</title>

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="style7.css">
    <title>Awesome Profile Card</title>

    <link rel="preconnect" href="https://fonts.googleapis.com"><link />
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link />
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&family=Open+Sans:wght@500&display=swap" rel="stylesheet"><link />
   <link href="https://fonts.googleapis.com/css2?family=Sniglet&display=swap" rel="stylesheet"><link />


   

   <!-- Bootstrap Link -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- <link rel="stylesheet" href="style6.css"> -->
<link rel="stylesheet" href="css/style8.css">


</head>
<body>

	<!-- <h1>Profile</h1> -->

	<!-- <?php include('header.php');?> -->
 


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
                            <a class="nav-link" href="#About_Us">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                       </li>

                          <li class="nav-item">
                              <a class="nav-link" href="signup.php">Signup</a>
                          </li>

                        
                        <li class="nav-item">
                            <a class="nav-link" href="profile.php"><i class="fas fa-user"></i></a>
                        </li>




                    </ul>

                </div>
            </nav>
    </section>

    <?php if(check_login(false)):?>
		<!-- Hi, <?=$_SESSION['USER']->username?>; -->

		<br><br>
		<?php if(!check_verified()):?>
			<a href="verify.php">
				<button id="btn-submit">Verify Profile</button>
			</a>
		<?php endif;?>
	<?php endif;?>


  <div class="card">
        <div class="card-header">
            <img src="images/review_img.jpg" alt="Profile Image" class="profile-img">
        </div>
        <div class="card-body">
            <p class="name"><?=$_SESSION['USER']->username?></p>
            <a href="#" class="mail"><?=$_SESSION['USER']->email?></a>
            <p class="job">Followers | Following</p>
        </div>

        <div class="social-links">
            <a href="#" class="fab fa-github social-icon"></a>
            <a href="#" class="fab fa-twitter social-icon"></a>
            <a href="#" class="fab fa-youtube social-icon"></a>
            <a href="#" class="fab fa-linkedin social-icon"></a>
        </div>

        <div class="card-footer">

            <p> <a class = "link" href="#">
            <i class="fas fa-user"></i>
            Account Settings </a></p>
            <hr />
            <p><a class = "link" href="#">
            <i class="fas fa-heart"></i>
            Favorites </a></p>
            <hr />
            <p><a class = "link" href="#" target="_blank">
            <i class="fas fa-address-book"></i>
            Address </a></p>
            <hr />
            <p><a class = "link" href="#About_Us">
            <i class="fas fa-question-circle"></i>
            Help </a></p>
            <hr />
            <p><a class = "link" href="logout.php">
            <i class="fas fa-power-off"></i>
            Logout </a></p>
            <hr />
            <p><a class = "link" href="Checkout.php">
            <i class="fas fa-power-off"></i>
            Checkout </a></p>
            <hr />
          
        </div>
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

