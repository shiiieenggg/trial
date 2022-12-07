
<!DOCTYPE html>
<html>



<head>
	<meta charset="utf-8">
	<title>Home</title>
	<title>PURRFECT</title>
    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- CSS LINK -->
    <link rel="stylesheet" href="css/style.css">


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

	<!-- <?php include('header.php')?> -->
  

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

            <!-- Title -->
            <div class="row ">
                <div class=" col-lg-6 ">
                    <h1 class="heading"> <span style="color:#7AC7E6"> PURR</span><span style="color:#FFDB58">FECT</span> place to buy items for your furbabies!</h1>
                    <button type="button" class="btn btn-lg shop-button"><a class="button_name" href="#Category"><i class="fa-sharp fa-solid fa-bag-shopping"></i> SHOP NOW </a></button>
                </div>

                <div class="col-lg-6">
                    <img class="title_image" src="images/home.png" alt="homeimage">
                </div>

            </div>
        </div>
    </section>

<!--Offer-->
    <section id="offer">
        <div class=container-fluid>
            <div class="row">
                <div>
                    <h2 class="sec_title">We care about your pets!</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <img class="offer_image" src="images/home2.png" alt="offerimage">
                    </div>

                    <div class="col-lg-6 checklist_box ">
                        <h3 class=checklist><i class="fa-solid fa-circle-check fa-2x"></i>Affordable food and accessories </h3>
                        <h3 class=checklist><i class="fa-solid fa-circle-check fa-2x"></i>Best quality of pet accessories </h3>
                        <h3 class=checklist><i class="fa-solid fa-circle-check fa-2x"></i>High quality of organic foods </h3>
                        <h3 class=checklist><i class="fa-solid fa-circle-check fa-2x"></i>High quality of vitamins suplements</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--Categories-->
    <section id="Category">
        <div>
            <h2 class="sec_title"><i class="fas fa-paw"></i> Category <i class="fas fa-paw"></i> </h2>
        </div>

        <div class="flex-container">
            <div class="row justify-contect-evenly ">
                <div class="col-lg-4 col-md-6 col-6">
                    <div class="card-block cardcolor">
                        <div class="card-body">
                            <img class="icon" src="images/petfood.png" alt="food" height="70" width="70">
                            <div class="catnamebox">
                                <a class="catename" href="Food.php">Food</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=" col-lg-4 col-md-6 col-6">
                    <div class="card-block cardcolor ">
                        <div class="card-body">
                            <img class="icon" src="images/pills.png" alt="pills" height="70" width="70">
                            <div class="catnamebox">
                                <a class="catename" href="Medicine.php">Medicine</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6">
                    <div class="card-block cardcolor">
                        <div class="card-body">
                            <img class="icon" src="images/bedding.png" alt="beddings" height="70" width="70">
                            <div class="catnamebox">
                                <a class="catename" href="Beddings.php">Beddings</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6">
                    <div class="card-block cardcolor">
                        <div class="card-body">
                            <img class="icon" src="images/petoy.png" alt="toy" height="70" width="70">
                            <div class="catnamebox">
                                <a class="catename" href="Toy.php">Toys</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6">
                    <div class="card-block cardcolor">
                        <div class="card-body ">
                            <img class="icon" src="images/accesories.png" alt="accessories" height="70" width="70">
                            <div class="catnamebox">
                                <a class="catename" href="Accesories.php">Accessories</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6">
                    <div class="card-block cardcolor">
                        <div class="card-body ">
                            <img class="icon" src="images/shampoo.png" alt="accessories" height="70" width="70">
                            <div class="catnamebox">
                                <a class="catename" href="Sanitation.php">Sanitation</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>


 <!--Saleee-->
     <section class = "sale-section">
    <div class = "container-fluid">
        <div class = "row sale-ads">
            <div class = "sec_title">Biggest News Since The Bone!
                <p class = "sec_sub"> Since Christmas is getting near, PURRFFECT offers something exciting!</p>
            </div>

          <div class = "col-lg-7 col-12 salecon">
             <img class = "saledog" src="images/SalePoster.jpg" height="400" width="590"></img>
           </div>
       
       <div class = "col-lg-5 col-12 sale-shop-now">
           <h1 class="ads-text">Happy howlidays! Hope Santa Paws brings you lots of treats.</h1>
           <button type="button" class="btn btn-lg sale-btn"><a class="btn_sale" href="sale.html"><i class="fas fa-shopping-bag"></i> SHOP NOW!</a></button>
           </div>
       </div>
    </div>
    <style>
        /* customizable snowflake styling */
        .snowflake {
          color: #fff;
          font-size: 1em;
          font-family: Arial, sans-serif;
          text-shadow: 0 0 5px #000;
        }
        
        @-webkit-keyframes snowflakes-fall{0%{top:-10%}100%{top:100%}}@-webkit-keyframes snowflakes-shake{0%,100%{-webkit-transform:translateX(0);transform:translateX(0)}50%{-webkit-transform:translateX(80px);transform:translateX(80px)}}@keyframes snowflakes-fall{0%{top:-10%}100%{top:100%}}@keyframes snowflakes-shake{0%,100%{transform:translateX(0)}50%{transform:translateX(80px)}}.snowflake{position:fixed;top:-10%;z-index:9999;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;cursor:default;-webkit-animation-name:snowflakes-fall,snowflakes-shake;-webkit-animation-duration:10s,3s;-webkit-animation-timing-function:linear,ease-in-out;-webkit-animation-iteration-count:infinite,infinite;-webkit-animation-play-state:running,running;animation-name:snowflakes-fall,snowflakes-shake;animation-duration:10s,3s;animation-timing-function:linear,ease-in-out;animation-iteration-count:infinite,infinite;animation-play-state:running,running}.snowflake:nth-of-type(0){left:1%;-webkit-animation-delay:0s,0s;animation-delay:0s,0s}.snowflake:nth-of-type(1){left:10%;-webkit-animation-delay:1s,1s;animation-delay:1s,1s}.snowflake:nth-of-type(2){left:20%;-webkit-animation-delay:6s,.5s;animation-delay:6s,.5s}.snowflake:nth-of-type(3){left:30%;-webkit-animation-delay:4s,2s;animation-delay:4s,2s}.snowflake:nth-of-type(4){left:40%;-webkit-animation-delay:2s,2s;animation-delay:2s,2s}.snowflake:nth-of-type(5){left:50%;-webkit-animation-delay:8s,3s;animation-delay:8s,3s}.snowflake:nth-of-type(6){left:60%;-webkit-animation-delay:6s,2s;animation-delay:6s,2s}.snowflake:nth-of-type(7){left:70%;-webkit-animation-delay:2.5s,1s;animation-delay:2.5s,1s}.snowflake:nth-of-type(8){left:80%;-webkit-animation-delay:1s,0s;animation-delay:1s,0s}.snowflake:nth-of-type(9){left:90%;-webkit-animation-delay:3s,1.5s;animation-delay:3s,1.5s}.snowflake:nth-of-type(10){left:25%;-webkit-animation-delay:2s,0s;animation-delay:2s,0s}.snowflake:nth-of-type(11){left:65%;-webkit-animation-delay:4s,2.5s;animation-delay:4s,2.5s}
        </style>
        <div class="snowflakes" aria-hidden="true">
          <div class="snowflake">
          ❅
          </div>
          <div class="snowflake">
          ❆
          </div>
          <div class="snowflake">
          ❅
          </div>
          <div class="snowflake">
          ❆
          </div>
          <div class="snowflake">
          ❅
          </div>
          <div class="snowflake">
          ❆
          </div>
          <div class="snowflake">
            ❅
          </div>
          <div class="snowflake">
            ❆
          </div>
          <div class="snowflake">
            ❅
          </div>
          <div class="snowflake">
            ❆
          </div>
          <div class="snowflake">
            ❅
          </div>
          <div class="snowflake">
            ❆
          </div>
        </div>
     </section>


<!--Popular Product-->
    <section id="PopularPro">
        <div>
            <h2 class="sec_title"> <i class="fas fa-paw"></i> Popular Products <i class="fas fa-paw"></i></h2>
        </div>
        <div class="cardcontainer">
            <div class="row justify-contect-evenly ">
                <div class="col-lg-3 col-md-6 col-6 ">
                    <div class="card shadow ">
                        <div class="card-body">
                            <img class="proimage" src="images/Pidegree.png" alt="Pidegree" height="150" width="150">
                            <div class="fave">
                                <i class="fas fa-heart"></i>
                            </div>
                        </div>
                    </div>
                    <h6 class="proname">
                        Pidegree Dog Food
                    </h6>
                    <h6 class="proprice">
                        Php 300.00
                    </h6>
                    <img class="stars" src="images/stars.png" alt="food" height="20" width="70">
                    <!--Modals-->
                    <div class="buttons">
                        <button type="button" class="btn btn-lg shop-button" data-bs-toggle="modal" data-bs-target="#dogfood1"> Add to Cart</button>
                        <div class="modal fade" id="dogfood1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Add to Cart</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Product Image -->
                                        <div class="row">
                                            <div class="col-lg-6 col-6">
                                                <div class="card shadow productcard">
                                                    <div class="card-body">
                                                        <img src="FoodDog/dogfood1.png" alt="dogfood" height="150" width="150">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Deatils  -->
                                            <div class="col-lg-6 col-6">
                                                <h6 class="addname">
                                                    Pidegree Dog Food
                                                </h6>
                                                <h6 class="addprice">
                                                    Php 300.00
                                                </h6>

                                                <div class="row">
                                                    <div class="col-lg-6 col-6 addtodetails1">
                                                        <h6>Quantity</h6>
                                                    </div>

                                                    <div class="col-lg-6 col-6 addtodetails2">
                                                        <div class="d-flex flex-row">
                                                            <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                                <i class="fas fa-minus"></i>
                                                            </button>
                                                            <input id="form1" min="0" name="quantity" value="2" type="number" class="form-control form-control-sm" style="width: 50px;" />
                                                            <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                                <i class="fas fa-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6 col-6 addtodetails1">
                                                        <h6 class="details">Type :</h6>
                                                    </div>
                                                    <div class="col-lg-6 col-6 addtodetails2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                            <label class="form-check-label" for="exampleRadios1">Adult</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                            <label class="form-check-label" for="exampleRadios2">Babies</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-box">
                                            <h6 class="costumer">
                                                Reviews
                                            </h6>
                                            <div class="row">
                                                <div class="col-lg-3 col-3 ">
                                                    <img class="review_img" src="images/review_img.jpg" alt="rating" height="70" width="70">
                                                </div>
                                                <div class="col-lg-9 col-9">
                                                    <div class="card shadow commnet card">
                                                        <div class="card-body">
                                                            <h6 class="costumer">
                                                                Henry Li <img src="images/stars.png" alt="rating" height="20" width="64">
                                                            </h6>

                                                            <h6 class="comment">Always friendly. Always has helpful products to keep my animals happy and healthy.</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-3 col-3 ">
                                                    <img class="review_img" src="images/review_img2.jpg" alt="rating" height="70" width="70">
                                                </div>
                                                <div class="col-lg-9 col-9">
                                                    <div class="card shadow  commnetcard">
                                                        <div class="card-body">
                                                            <h6 class="costumer">
                                                                Alice Sun
                                                                <img src="images/stars.png" alt="rating" height="20" width="64">
                                                            </h6>
                                                            <h6 class="comment">Always friendly. Always has helpful products to keep my animals happy and healthy.</h6>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-group mb-3 inputreview">
                                                <input type="text" class="form-control" placeholder="Input your review" aria-label="Recipient's username" aria-describedby="button-addon2">
                                                <button class="btn btn-outline-primary" type="button" id="button-addon2">Send</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div></div>
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Modals-->
                </div>

                <div class="col-lg-3 col-md-6 col-6 ">
                    <div class="card shadow">
                        <div class="card-body">
                            <img class="proimage" src="images/Whiskas.png" alt="Whiskas" height="150" width="150">
                            <div class="fave">
                                <i class="fas fa-heart"></i>
                            </div>
                        </div>
                    </div>
                    <h6 class="proname">
                        Whiskas (Adult)
                    </h6>
                    <h6 class="proprice">
                        Php 320.00
                    </h6>
                    <img class="stars" src="images/stars.png" alt="food" height="20" width="70">
                    <div class="buttons">
                        <button type="button" class="btn btn-lg shop-button" data-bs-toggle="modal" data-bs-target="#catfood1"> Add to Cart</button>
                        <div class="modal fade" id="catfood1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Add to Cart</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Product Image -->
                                        <div class="row">
                                            <div class="col-lg-6 col-6">
                                                <div class="card shadow productcard">
                                                    <div class="card-body">
                                                        <img src="images/catfood1.png" alt="catfood" height="150" width="150">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Deatils  -->
                                            <div class="col-lg-6 col-6">
                                                <h6 class="addname">
                                                    Whiskas
                                                </h6>
                                                <h6 class="addprice">
                                                    Php 320.00
                                                </h6>

                                                <div class="row">
                                                    <div class="col-lg-6 col-6 addtodetails1">
                                                        <h6>Quantity</h6>
                                                    </div>

                                                    <div class="col-lg-6 col-6 addtodetails2">
                                                        <div class="d-flex flex-row">
                                                            <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                                <i class="fas fa-minus"></i>
                                                            </button>
                                                            <input id="form1" min="0" name="quantity" value="2" type="number" class="form-control form-control-sm" style="width: 50px;" />
                                                            <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                                <i class="fas fa-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6 col-6 addtodetails1">
                                                        <h6 class="details">Type :</h6>
                                                    </div>
                                                    <div class="col-lg-6 col-6 addtodetails2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                            <label class="form-check-label" for="exampleRadios1">Adult</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                            <label class="form-check-label" for="exampleRadios2">Babies</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-box">
                                            <h6 class="costumer">
                                                Reviews
                                            </h6>
                                            <div class="row">
                                                <div class="col-lg-3 col-3 ">
                                                    <img class="review_img" src="images/review_img.jpg" alt="rating" height="70" width="70">
                                                </div>
                                                <div class="col-lg-9 col-9">
                                                    <div class="card shadow commnet card">
                                                        <div class="card-body">
                                                            <h6 class="costumer">
                                                                Henry Li <img src="images/stars.png" alt="rating" height="20" width="64">
                                                            </h6>

                                                            <h6 class="comment">Always friendly. Always has helpful products to keep my animals happy and healthy.</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-3 col-3 ">
                                                    <img class="review_img" src="images/review_img2.jpg" alt="rating" height="70" width="70">
                                                </div>
                                                <div class="col-lg-9 col-9">
                                                    <div class="card shadow  commnetcard">
                                                        <div class="card-body">
                                                            <h6 class="costumer">
                                                                Alice Sun
                                                                <img src="images/stars.png" alt="rating" height="20" width="64">
                                                            </h6>
                                                            <h6 class="comment">Always friendly. Always has helpful products to keep my animals happy and healthy.</h6>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-group mb-3 inputreview">
                                                <input type="text" class="form-control" placeholder="Input your review" aria-label="Recipient's username" aria-describedby="button-addon2">
                                                <button class="btn btn-outline-primary" type="button" id="button-addon2">Send</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div></div>
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Modals-->
                </div>


                <div class="col-lg-3 col-md-6 col-6 ">
                    <div class="card shadow">
                        <div class="card-body">
                            <img class="proimage" src="images/Goodest.png" alt="Goodest" height="150" width="150">
                            <div class="fave">
                                <i class="fas fa-heart"></i>
                            </div>
                        </div>
                    </div>
                    <h6 class="proname">
                        Goodest (Chicken Chomp)
                    </h6>
                    <h6 class="proprice">
                        Php 200.00
                    </h6>
                    <img class="stars" src="images/stars.png" alt="food" height="20" width="70">
                    <!--Modals-->
                    <div class="buttons">
                        <button type="button" class="btn btn-lg shop-button" data-bs-toggle="modal" data-bs-target="#catfood2"> Add to Cart</button>
                        <div class="modal fade" id="catfood2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Add to Cart</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Product Image -->
                                        <div class="row">
                                            <div class="col-lg-6 col-6">
                                                <div class="card shadow productcard">
                                                    <div class="card-body">
                                                        <img src="images/catfood2.png" alt="catfood2" height="150" width="150">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Deatils  -->
                                            <div class="col-lg-6 col-6">
                                                <h6 class="addname">
                                                    Goodest (Chicken Chomp)
                                                </h6>
                                                <h1 class="addprice">
                                                    Php 200.00
                                                </h1>

                                                <div class="row">
                                                    <div class="col-lg-6 col-6 addtodetails1">
                                                        <h6>Quantity</h6>
                                                    </div>

                                                    <div class="col-lg-6 col-6 addtodetails2">
                                                        <div class="d-flex flex-row">
                                                            <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                                <i class="fas fa-minus"></i>
                                                            </button>
                                                            <input id="form1" min="0" name="quantity" value="2" type="number" class="form-control form-control-sm" style="width: 50px;" />
                                                            <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                                <i class="fas fa-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6 col-6 addtodetails1">
                                                        <h6 class="details">Type :</h6>
                                                    </div>
                                                    <div class="col-lg-6 col-6 addtodetails2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                            <label class="form-check-label" for="exampleRadios1">Adult</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                            <label class="form-check-label" for="exampleRadios2">Babies</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-box">
                                            <h6 class="costumer">
                                                Reviews
                                            </h6>
                                            <div class="row">
                                                <div class="col-lg-3 col-3 ">
                                                    <img class="review_img" src="images/review_img.jpg" alt="rating" height="70" width="70">
                                                </div>
                                                <div class="col-lg-9 col-9">
                                                    <div class="card shadow commnet card">
                                                        <div class="card-body">
                                                            <h6 class="costumer">
                                                                Henry Li <img src="images/stars.png" alt="rating" height="20" width="64">
                                                            </h6>

                                                            <h6 class="comment">Always friendly. Always has helpful products to keep my animals happy and healthy.</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-3 col-3 ">
                                                    <img class="review_img" src="images/review_img2.jpg" alt="rating" height="70" width="70">
                                                </div>
                                                <div class="col-lg-9 col-9">
                                                    <div class="card shadow  commnetcard">
                                                        <div class="card-body">
                                                            <h6 class="costumer">
                                                                Alice Sun
                                                                <img src="images/stars.png" alt="rating" height="20" width="64">
                                                            </h6>
                                                            <h6 class="comment">Always friendly. Always has helpful products to keep my animals happy and healthy.</h6>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-group mb-3 inputreview">
                                                <input type="text" class="form-control" placeholder="Input your review" aria-label="Recipient's username" aria-describedby="button-addon2">
                                                <button class="btn btn-outline-primary" type="button" id="button-addon2">Send</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div></div>
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Modals-->
                </div>

                <div class="col-lg-3 col-md-6 col-6 ">
                    <div class="card shadow">
                        <div class="card-body">
                            <img class="proimage" src="FoodDog/dogfood12.png" alt="Derby" height="150" width="150">
                            <div class="fave">
                                <i class="fas fa-heart"></i>
                            </div>
                        </div>
                    </div>
                    <h6 class="proname">
                        Derby Dog Food (Adult)
                    </h6>
                    <h6 class="proprice">
                        Php 200.00
                    </h6>
                    <img class="stars" src="images/stars.png" alt="food" height="20" width="70">
                    <!--Modals-->
                    <div class="buttons">
                        <button type="button" class="btn btn-lg shop-button" data-bs-toggle="modal" data-bs-target="#dogfood12"> Add to Cart</button>
                        <div class="modal fade" id="dogfood12" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Add to Cart</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Product Image -->
                                        <div class="row">
                                            <div class="col-lg-6 col-6">
                                                <div class="card shadow productcard">
                                                    <div class="card-body">
                                                        <img src="FoodDog/dogfood12.png" alt="dogfood12" height="150" width="150">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Deatils  -->
                                            <div class="col-lg-6 col-6">
                                                <h6 class="addname">
                                                    Derby Dog Food
                                                </h6>
                                                <h6 class="addprice">
                                                    Php 200.00
                                                </h6>

                                                <div class="row">
                                                    <div class="col-lg-6 col-6 addtodetails1">
                                                        <h6>Quantity</h6>
                                                    </div>

                                                    <div class="col-lg-6 col-6 addtodetails2">
                                                        <div class="d-flex flex-row">
                                                            <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                                <i class="fas fa-minus"></i>
                                                            </button>
                                                            <input id="form1" min="0" name="quantity" value="2" type="number" class="form-control form-control-sm" style="width: 50px;" />
                                                            <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                                <i class="fas fa-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6 col-6 addtodetails1">
                                                        <h6 class="details">Type :</h6>
                                                    </div>
                                                    <div class="col-lg-6 col-6 addtodetails2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                            <label class="form-check-label" for="exampleRadios1">Adult</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                            <label class="form-check-label" for="exampleRadios2">Babies</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-box">
                                            <h6 class="costumer">
                                                Reviews
                                            </h6>
                                            <div class="row">
                                                <div class="col-lg-3 col-3 ">
                                                    <img class="review_img" src="images/review_img.jpg" alt="rating" height="70" width="70">
                                                </div>
                                                <div class="col-lg-9 col-9">
                                                    <div class="card shadow commnet card">
                                                        <div class="card-body">
                                                            <h6 class="costumer">
                                                                Henry Li <img src="images/stars.png" alt="rating" height="20" width="64">
                                                            </h6>

                                                            <h6 class="comment">Always friendly. Always has helpful products to keep my animals happy and healthy.</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-3 col-3 ">
                                                    <img class="review_img" src="images/review_img2.jpg" alt="rating" height="70" width="70">
                                                </div>
                                                <div class="col-lg-9 col-9">
                                                    <div class="card shadow  commnetcard">
                                                        <div class="card-body">
                                                            <h6 class="costumer">
                                                                Alice Sun
                                                                <img src="images/stars.png" alt="rating" height="20" width="64">
                                                            </h6>
                                                            <h6 class="comment">Always friendly. Always has helpful products to keep my animals happy and healthy.</h6>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-group mb-3 inputreview">
                                                <input type="text" class="form-control" placeholder="Input your review" aria-label="Recipient's username" aria-describedby="button-addon2">
                                                <button class="btn btn-outline-primary" type="button" id="button-addon2">Send</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div></div>
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Modals-->
                </div>
            </div>
        </div>
    </section>


<!--Ads1-->
    <section id="ads1">
        <div class="advertisment">
            <div><iframe class ="pic1"src="images/ads1.mp4" height="354" width="236" frameborder="0" scrolling="no" ></iframe></div>
            <div>  <img class="pic2" src="images/2ads.gif" alt="premium" height="354" width="530"></div>
            <div> <iframe class ="pic1"src="images/ads2.mp4" height="354" width="236" frameborder="0" scrolling="no" ></iframe></div>
        </div>
    </section>


<!-- Feature Product -->
    <section id="FeaPro">
        <div>
            <h2 class="sec_title"><i class="fas fa-paw"></i>Feature Products<i class="fas fa-paw"></i></h2>
        </div>
        <div class="cardcontainer">
            <div class="row justify-contect-evenly ">
                <div class="col-lg-3 col-md-6 col-6 ">
                    <div class="card shadow ">
                        <div class="card-body">
                            <img class="proimage" src="images/Pidegree.png" alt="Pidegree" height="150" width="150">
                            <div class="fave">
                                <i class="fas fa-heart"></i>
                            </div>
                        </div>
                    </div>
                    <h6 class="proname">
                        Pidegree Dog Food
                    </h6>
                    <h6 class="proprice">
                        Php 300.00
                    </h6>
                    <img class="stars" src="images/stars.png" alt="food" height="20" width="70">
                    <!--Modals-->
                    <div class="buttons">
                        <button type="button" class="btn btn-lg shop-button" data-bs-toggle="modal" data-bs-target="#dogfood1"> Add to Cart</button>
                        <div class="modal fade" id="dogfood1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Add to Cart</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Product Image -->
                                        <div class="row">
                                            <div class="col-lg-6 col-6">
                                                <div class="card shadow productcard">
                                                    <div class="card-body">
                                                        <img src="FoodDog/dogfood1.png" alt="dogfood" height="150" width="150">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Deatils  -->
                                            <div class="col-lg-6 col-6">
                                                <h6 class="addname">
                                                    Pidegree Dog Food
                                                </h6>
                                                <h6 class="addprice">
                                                    Php 300.00
                                                </h6>

                                                <div class="row">
                                                    <div class="col-lg-6 col-6 addtodetails1">
                                                        <h6>Quantity</h6>
                                                    </div>

                                                    <div class="col-lg-6 col-6 addtodetails2">
                                                        <div class="d-flex flex-row">
                                                            <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                                <i class="fas fa-minus"></i>
                                                            </button>
                                                            <input id="form1" min="0" name="quantity" value="2" type="number" class="form-control form-control-sm" style="width: 50px;" />
                                                            <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                                <i class="fas fa-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6 col-6 addtodetails1">
                                                        <h6 class="details">Type :</h6>
                                                    </div>
                                                    <div class="col-lg-6 col-6 addtodetails2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                            <label class="form-check-label" for="exampleRadios1">Adult</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                            <label class="form-check-label" for="exampleRadios2">Babies</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-box">
                                            <h6 class="costumer">
                                                Reviews
                                            </h6>
                                            <div class="row">
                                                <div class="col-lg-3 col-3 ">
                                                    <img class="review_img" src="images/review_img.jpg" alt="rating" height="70" width="70">
                                                </div>
                                                <div class="col-lg-9 col-9">
                                                    <div class="card shadow commnet card">
                                                        <div class="card-body">
                                                            <h6 class="costumer">
                                                                Henry Li <img src="images/stars.png" alt="rating" height="20" width="64">
                                                            </h6>

                                                            <h6 class="comment">Always friendly. Always has helpful products to keep my animals happy and healthy.</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-3 col-3 ">
                                                    <img class="review_img" src="images/review_img2.jpg" alt="rating" height="70" width="70">
                                                </div>
                                                <div class="col-lg-9 col-9">
                                                    <div class="card shadow  commnetcard">
                                                        <div class="card-body">
                                                            <h6 class="costumer">
                                                                Alice Sun
                                                                <img src="images/stars.png" alt="rating" height="20" width="64">
                                                            </h6>
                                                            <h6 class="comment">Always friendly. Always has helpful products to keep my animals happy and healthy.</h6>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-group mb-3 inputreview">
                                                <input type="text" class="form-control" placeholder="Input your review" aria-label="Recipient's username" aria-describedby="button-addon2">
                                                <button class="btn btn-outline-primary" type="button" id="button-addon2">Send</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div></div>
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Modals-->
                </div>

                <div class="col-lg-3 col-md-6 col-6 ">
                    <div class="card shadow">
                        <div class="card-body">
                            <img class="proimage" src="images/Whiskas.png" alt="Whiskas" height="150" width="150">
                            <div class="fave">
                                <i class="fas fa-heart"></i>
                            </div>
                        </div>
                    </div>
                    <h6 class="proname">
                        Whiskas (Adult)
                    </h6>
                    <h6 class="proprice">
                        Php 320.00
                    </h6>
                    <img class="stars" src="images/stars.png" alt="food" height="20" width="70">
                    <div class="buttons">
                        <button type="button" class="btn btn-lg shop-button" data-bs-toggle="modal" data-bs-target="#catfood1"> Add to Cart</button>
                        <div class="modal fade" id="catfood1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Add to Cart</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Product Image -->
                                        <div class="row">
                                            <div class="col-lg-6 col-6">
                                                <div class="card shadow productcard">
                                                    <div class="card-body">
                                                        <img src="images/catfood1.png" alt="catfood" height="150" width="150">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Deatils  -->
                                            <div class="col-lg-6 col-6">
                                                <h6 class="addname">
                                                    Whiskas
                                                </h6>
                                                <h6 class="addprice">
                                                    Php 320.00
                                                </h6>

                                                <div class="row">
                                                    <div class="col-lg-6 col-6 addtodetails1">
                                                        <h6>Quantity</h6>
                                                    </div>

                                                    <div class="col-lg-6 col-6 addtodetails2">
                                                        <div class="d-flex flex-row">
                                                            <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                                <i class="fas fa-minus"></i>
                                                            </button>
                                                            <input id="form1" min="0" name="quantity" value="2" type="number" class="form-control form-control-sm" style="width: 50px;" />
                                                            <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                                <i class="fas fa-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6 col-6 addtodetails1">
                                                        <h6 class="details">Type :</h6>
                                                    </div>
                                                    <div class="col-lg-6 col-6 addtodetails2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                            <label class="form-check-label" for="exampleRadios1">Adult</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                            <label class="form-check-label" for="exampleRadios2">Babies</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-box">
                                            <h6 class="costumer">
                                                Reviews
                                            </h6>
                                            <div class="row">
                                                <div class="col-lg-3 col-3 ">
                                                    <img class="review_img" src="images/review_img.jpg" alt="rating" height="70" width="70">
                                                </div>
                                                <div class="col-lg-9 col-9">
                                                    <div class="card shadow commnet card">
                                                        <div class="card-body">
                                                            <h6 class="costumer">
                                                                Henry Li <img src="images/stars.png" alt="rating" height="20" width="64">
                                                            </h6>

                                                            <h6 class="comment">Always friendly. Always has helpful products to keep my animals happy and healthy.</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-3 col-3 ">
                                                    <img class="review_img" src="images/review_img2.jpg" alt="rating" height="70" width="70">
                                                </div>
                                                <div class="col-lg-9 col-9">
                                                    <div class="card shadow  commnetcard">
                                                        <div class="card-body">
                                                            <h6 class="costumer">
                                                                Alice Sun
                                                                <img src="images/stars.png" alt="rating" height="20" width="64">
                                                            </h6>
                                                            <h6 class="comment">Always friendly. Always has helpful products to keep my animals happy and healthy.</h6>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-group mb-3 inputreview">
                                                <input type="text" class="form-control" placeholder="Input your review" aria-label="Recipient's username" aria-describedby="button-addon2">
                                                <button class="btn btn-outline-primary" type="button" id="button-addon2">Send</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div></div>
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Modals-->
                </div>


                <div class="col-lg-3 col-md-6 col-6 ">
                    <div class="card shadow">
                        <div class="card-body">
                            <img class="proimage" src="images/Goodest.png" alt="Goodest" height="150" width="150">
                            <div class="fave">
                                <i class="fas fa-heart"></i>
                            </div>
                        </div>
                    </div>
                    <h6 class="proname">
                        Goodest (Chicken Chomp)
                    </h6>
                    <h6 class="proprice">
                        Php 200.00
                    </h6>
                    <img class="stars" src="images/stars.png" alt="food" height="20" width="70">
                    <!--Modals-->
                    <div class="buttons">
                        <button type="button" class="btn btn-lg shop-button" data-bs-toggle="modal" data-bs-target="#catfood2"> Add to Cart</button>
                        <div class="modal fade" id="catfood2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Add to Cart</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Product Image -->
                                        <div class="row">
                                            <div class="col-lg-6 col-6">
                                                <div class="card shadow productcard">
                                                    <div class="card-body">
                                                        <img src="images/catfood2.png" alt="catfood2" height="150" width="150">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Deatils  -->
                                            <div class="col-lg-6 col-6">
                                                <h6 class="addname">
                                                    Goodest (Chicken Chomp)
                                                </h6>
                                                <h1 class="addprice">
                                                    Php 200.00
                                                </h1>

                                                <div class="row">
                                                    <div class="col-lg-6 col-6 addtodetails1">
                                                        <h6>Quantity</h6>
                                                    </div>

                                                    <div class="col-lg-6 col-6 addtodetails2">
                                                        <div class="d-flex flex-row">
                                                            <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                                <i class="fas fa-minus"></i>
                                                            </button>
                                                            <input id="form1" min="0" name="quantity" value="2" type="number" class="form-control form-control-sm" style="width: 50px;" />
                                                            <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                                <i class="fas fa-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6 col-6 addtodetails1">
                                                        <h6 class="details">Type :</h6>
                                                    </div>
                                                    <div class="col-lg-6 col-6 addtodetails2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                            <label class="form-check-label" for="exampleRadios1">Adult</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                            <label class="form-check-label" for="exampleRadios2">Babies</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-box">
                                            <h6 class="costumer">
                                                Reviews
                                            </h6>
                                            <div class="row">
                                                <div class="col-lg-3 col-3 ">
                                                    <img class="review_img" src="images/review_img.jpg" alt="rating" height="70" width="70">
                                                </div>
                                                <div class="col-lg-9 col-9">
                                                    <div class="card shadow commnet card">
                                                        <div class="card-body">
                                                            <h6 class="costumer">
                                                                Henry Li <img src="images/stars.png" alt="rating" height="20" width="64">
                                                            </h6>

                                                            <h6 class="comment">Always friendly. Always has helpful products to keep my animals happy and healthy.</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-3 col-3 ">
                                                    <img class="review_img" src="images/review_img2.jpg" alt="rating" height="70" width="70">
                                                </div>
                                                <div class="col-lg-9 col-9">
                                                    <div class="card shadow  commnetcard">
                                                        <div class="card-body">
                                                            <h6 class="costumer">
                                                                Alice Sun
                                                                <img src="images/stars.png" alt="rating" height="20" width="64">
                                                            </h6>
                                                            <h6 class="comment">Always friendly. Always has helpful products to keep my animals happy and healthy.</h6>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-group mb-3 inputreview">
                                                <input type="text" class="form-control" placeholder="Input your review" aria-label="Recipient's username" aria-describedby="button-addon2">
                                                <button class="btn btn-outline-primary" type="button" id="button-addon2">Send</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div></div>
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Modals-->
                </div>

                <div class="col-lg-3 col-md-6 col-6 ">
                    <div class="card shadow">
                        <div class="card-body">
                            <img class="proimage" src="FoodDog/dogfood12.png" alt="Derby" height="150" width="150">
                            <div class="fave">
                                <i class="fas fa-heart"></i>
                            </div>
                        </div>
                    </div>
                    <h6 class="proname">
                        Derby Dog Food (Adult)
                    </h6>
                    <h6 class="proprice">
                        Php 200.00
                    </h6>
                    <img class="stars" src="images/stars.png" alt="food" height="20" width="70">
                    <!--Modals-->
                    <div class="buttons">
                        <button type="button" class="btn btn-lg shop-button" data-bs-toggle="modal" data-bs-target="#dogfood12"> Add to Cart</button>
                        <div class="modal fade" id="dogfood12" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Add to Cart</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Product Image -->
                                        <div class="row">
                                            <div class="col-lg-6 col-6">
                                                <div class="card shadow productcard">
                                                    <div class="card-body">
                                                        <img src="FoodDog/dogfood12.png" alt="dogfood12" height="150" width="150">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Deatils  -->
                                            <div class="col-lg-6 col-6">
                                                <h6 class="addname">
                                                    Derby Dog Food
                                                </h6>
                                                <h6 class="addprice">
                                                    Php 200.00
                                                </h6>

                                                <div class="row">
                                                    <div class="col-lg-6 col-6 addtodetails1">
                                                        <h6>Quantity</h6>
                                                    </div>

                                                    <div class="col-lg-6 col-6 addtodetails2">
                                                        <div class="d-flex flex-row">
                                                            <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                                <i class="fas fa-minus"></i>
                                                            </button>
                                                            <input id="form1" min="0" name="quantity" value="2" type="number" class="form-control form-control-sm" style="width: 50px;" />
                                                            <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                                <i class="fas fa-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6 col-6 addtodetails1">
                                                        <h6 class="details">Type :</h6>
                                                    </div>
                                                    <div class="col-lg-6 col-6 addtodetails2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                            <label class="form-check-label" for="exampleRadios1">Adult</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                            <label class="form-check-label" for="exampleRadios2">Babies</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-box">
                                            <h6 class="costumer">
                                                Reviews
                                            </h6>
                                            <div class="row">
                                                <div class="col-lg-3 col-3 ">
                                                    <img class="review_img" src="images/review_img.jpg" alt="rating" height="70" width="70">
                                                </div>
                                                <div class="col-lg-9 col-9">
                                                    <div class="card shadow commnet card">
                                                        <div class="card-body">
                                                            <h6 class="costumer">
                                                                Henry Li <img src="images/stars.png" alt="rating" height="20" width="64">
                                                            </h6>

                                                            <h6 class="comment">Always friendly. Always has helpful products to keep my animals happy and healthy.</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-3 col-3 ">
                                                    <img class="review_img" src="images/review_img2.jpg" alt="rating" height="70" width="70">
                                                </div>
                                                <div class="col-lg-9 col-9">
                                                    <div class="card shadow  commnetcard">
                                                        <div class="card-body">
                                                            <h6 class="costumer">
                                                                Alice Sun
                                                                <img src="images/stars.png" alt="rating" height="20" width="64">
                                                            </h6>
                                                            <h6 class="comment">Always friendly. Always has helpful products to keep my animals happy and healthy.</h6>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-group mb-3 inputreview">
                                                <input type="text" class="form-control" placeholder="Input your review" aria-label="Recipient's username" aria-describedby="button-addon2">
                                                <button class="btn btn-outline-primary" type="button" id="button-addon2">Send</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div></div>
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Modals-->
                </div>
            </div>
        </div>

    </section>


<!-- About Us -->
    <section id="About_Us">

        <div class=container-fluid>
            <div class="row">
                <div>
                    <h2 class="sec_title"><i class="fas fa-paw"></i>About Us<i class="fas fa-paw"></i></h2>
                </div>

                <div class="row">
                    <div class="col-lg-6 md-6 ">
                        <img class="aboutusimage" src="images/aboutusimage.png" alt="aboutusimage">
                    </div>

                    <div class="checklist_box col-lg-6 md-6 ">
                        <h3 class="aboutdetails">
                            Until one has loved an animal, a part of one's soul remains unweakened. We believed in it and we believe in
                            easy access to things that are good for our mind, body, and spirit. With a clever offering, superb support, and secure checkout
                            you're in good hands.
                        </h3>
                        <h3 class="abchecklist">
                            <i class="fa-solid fa-circle-check fa-2x"></i> Over 10 years of experience
                        </h3>
                        <h3 class="abchecklist">
                            <i class="fa-solid fa-circle-check fa-2x"></i> Trusted by Purrparent
                        </h3>
                        <h3 class="abchecklist"><i class="fa-solid fa-circle-check fa-2x"></i> High Quality Products </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!--Ads2-->
    <section id="ads2">
        <div id="items" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="sample" src="images/sampleads1.jpg" alt="user1" height="259" width="350">
                    <img class="sample" src="images/sampleads2.jpg" alt="user2" height="259" width="350">
                    <img class="sample" src="images/sampleads3.jpg" alt="user3" height="259" width="350">
                </div>
                <div class="carousel-item">
                    <img class="sample" src="images/sampleads4.jpg" alt="user4" height="259" width="350">
                    <img class="sample" src="images/sampleads5.jpg" alt="user5" height="259" width="350">
                    <img class="sample" src="images/sampleads6.jpg" alt="user6" height="259" width="350">
                </div>
                <div class="carousel-item">
                    <img class="sample" src="images/sampleads7.jpg" alt="user7" height="259" width="350">
                    <img class="sample" src="images/sampleads8.jpg" alt="user8" height="259" width="350">
                    <img class="sample" src="images/sampleads9.jpg" alt="user9" height="259" width="350">
                </div>
            </div>

        </div>
    </section>

    
<!-- Contacts -->
    <section id="Contacts">
        <div class="row">
            <div class=container-fluid>
                <div class="row">
                    <div class="box2 col-lg-6 col-md-6">
                        <div class="contactbg">
                            <h2 class="Contact_Title"> <i class="fas fa-paw"></i> Contact Us <i class="fas fa-paw"></i></h2>
                            <h5 class=contactlist>
                                <i class="fa-solid fa-location-dot contacticon"></i> Dalahican Rd, Lucena City
                            </h5>
                            <h5 class=contactlist>
                                <i class="fa-solid fa-envelope contacticon"></i> contactpurrfect.com
                            </h5>
                            <h5 class=contactlist> <i class="fa-sharp fa-solid fa-phone contacticon"></i> (123) 234-4456 </h5>
                        </div>
                        </div>



                    <div class="col-lg-6 col-md-6">
                        <img class="contact_image" src="images/contact_image.png" alt="contact_image" height="430" width="450">
                    </div>

                </div>
            </div>
        </div>
    </section>

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
