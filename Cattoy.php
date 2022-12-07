<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Toy (Cat)</title>
  
    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  
    <!-- CSS LINK -->
    <link rel="stylesheet" href="css/style10.css">

    <!-- Fonts  Awesome-->
    <script src="https://kit.fontawesome.com/905a42ee69.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&family=Open+Sans:wght@500&display=swap" rel="stylesheet"><link />
    <link href="https://fonts.googleapis.com/css2?family=Sniglet&display=swap" rel="stylesheet"><link />
</head>

<body>
    
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

                   


                    </ul>

                </div>
            </nav>
        </div>
</section>

<div class="Title">
        <h1 class="Title"> <a href="index.php#Category"><img class="icon" src="images/petoy.png" alt="food" height="70" width="70"></a> Cat</h1>
</div>

<section id="categories">
        <div class="container-fluid">
            <!-- Nav Bar -->
            <nav class="navbar navbar-expand-lg navbar-light">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#categories" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="categories">
                    <ul class="navbar-nav ms-auto">
                    <li class="nav-item " id = "categories-item" >
                            <a class="nav-link" href="CatFood.php">Food</a>
                        </li>

                        <li class="nav-item" id = "categories-item">
                            <a class="nav-link" href="Catmed.php">Medicine</a>
                        </li>

                        <li class="nav-item" id = "categories-item">
                            <a class="nav-link" href="Catbed.php">Beddings</a>
                        </li>

                        <li class="nav-item" id = "categories-item">
                            <a class="nav-link" href="Cattoy.php">Toy</a>
                        </li>

                        <li class="nav-item" id = "categories-item">
                            <a class="nav-link" href="Catacc.php">Accessories</a>
                        </li>
                        <li class="nav-item" id = "categories-item">
                            <a class="nav-link" href="Catsan.php">Sanitation</a>
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

                        <li class="nav-item">
                            <a class="nav-link" href="profile.php"><i class="fa-solid fa-user"></i></a>
                        </li>
                        
                    </ul>

                </div>
            </nav>
        </div>
</section>


 

<!--Product-->     
<div class = "card-container">
    <div class = " row allign-content product-list">
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

<!-- JavaScript -->
<script>
  const porductsListEl = document.querySelector(".product-list");
  
</script>

<script src="js/toysCat.js"></script>
<script src="js/app js/appToyCat.js"></script>

</body>
</html>
