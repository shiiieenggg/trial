const productsEl = document.querySelector(".product-list");
const cartItemsEl = document.querySelector(".cart-items");
const subtotalEl = document.querySelector(".subtotal");
const totalItemsInCartEl = document.querySelector(".total-items-in-cart");
const wishItemsEl = document.querySelector(".wish-list-items");

//Render Products
function renderProdcuts() {
  products.forEach((product) => {
    productsEl.innerHTML += `
    <div class = "col-lg-3 col-6">
    <div class = "productHolder">
    <div class = "card " id= "main">
    <div class = "card shadow" id="sub"> 
    <img class = "pro-image" src ="${product.imgSrc}">
    </div>
      <div class = "cardText ">
      <img id = "product-stars" src="${product.rate}" height= "25" width = "90"><img>
        <p class = "pro-category"><i>${product.category}</i></p>
        <p class = product-name>${product.name}</p>
        <p class = "price"> PHP <span class = "total-price">${product.price}</span></p>
          <div class="buttons">
            <button type="button" class="btn btn-lg shopp-button" data-bs-toggle="modal" data-bs-target="#${product.code}"><h5> <i class="fas fa-shopping-cart"></i> Add to Cart</h5></button>
            <div class="modal fade" id="${product.code}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"  id="staticBackdropLabel"><span style="color:#7AC7E6">ADD TO</span><span style="color:#FFDB58"> CART</span></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Product Image -->
                            <div class="row">
                                <div class="col-lg-6 col-6">
                                    <div class="card2 shadow productcard">
                                    
                                        <div class="card-body">
                                            <img class = "pro-image" src="${product.imgSrc}" alt="catfood" height="150" width="150">
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Deatils  -->
                                <div class="col-lg-6 col-6">
                                    <h6 class="addname">
                                    ${product.name}
                                    </h6>
                                    <h6 class="addprice">
                                        PHP <span id = "total-price">${product.price}<span>
                                    </h6>
    
                                    <div class="row">
                                        <div class="col-lg-6 col-6 addtodetails1">
                                            <h6>Quantity</h6>
                                        </div>
    
                                        <div class="col-lg-6 col-6 addtodetails2">
                                            <div class="d-flex flex-row">
                                                <button class="btn btn-link px-2" id = "increment" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                                <input id="form1" min="0" name="quantity" value="2" type="number" class="form-control form-control-sm" style="width: 50px;" />
                                                <button class="btn btn-link px-2" id = "decrement" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
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
                                
                            <button type="button" class="btn btn-danger btn-choice"  onclick="addToWishList(${product.id})" data-bs-dismiss="modal"><i class="fas fa-heart"></i> Add to Wishlist</button>
                            <button type="button" class="btn btn-primary btn-choice" onclick="addToCart(${product.id})"  data-bs-dismiss="modal"><i class="fas fa-shopping-cart"></i> Add to Cart</butto>
                            </div>
                            <div class = "description">
                            <div class = "heading">Product Description</div>
                            <div class = "description-content">
                            <h6 class = "content">${product.description}</h6>
                            

                            </div>
                            </div>
                             <div class = "ratings-head">
                            <div class = "ratings-sub">
                            <span class="heading">User Rating</span>
                           
<span class="fa fa-star fa-1x  checked"></span>
<span class="fa fa-star fa-1x checked"></span>
<span class="fa fa-star fa-1x checked"></span>
<span class="fa fa-star fa-1x checked"></span>
<span class="fa fa-star fa-1x "></span>
<h6 class = "rate-sub">4.1 average based on 254 reviews.</h>
<hr style="border:3px solid #f1f1f1">

<div class="row">
<div class="side">
<div>5<i class="fas fa-star checked"></i></div>
</div>
<div class="middle">
<div class="bar-container">
<div class="bar-5"></div>
</div>
</div>
<div class="side right">
<div>150</div>
</div>
<div class="side">
<div>4<i class="fas fa-star checked"></i></div>
</div>
<div class="middle">
<div class="bar-container">
<div class="bar-4"></div>
</div>
</div>
<div class="side right">
<div>63</div>
</div>
<div class="side">
<div>3<i class="fas fa-star checked"></i></div>
</div>
<div class="middle">
<div class="bar-container">
<div class="bar-3"></div>
</div>
</div>
<div class="side right">
<div>15</div>
</div>
<div class="side">
<div>2<i class="fas fa-star checked"></i></div>
</div>
<div class="middle">
<div class="bar-container">
<div class="bar-2"></div>
</div>
</div>
<div class="side right">
<div>6</div>
</div>
<div class="side">
<div>1<i class="fas fa-star checked"></i></div>
</div>
<div class="middle">
<div class="bar-container">
<div class="bar-1"></div>
</div>
</div>
<div class="side right">
<div>20</div>
</div>
</div>
</div>
</div>
                            <div class="review-box">
                                <h6 class="heading">
                                    Reviews
                                </h6>
                                <div class="row">
                                    <div class="col-lg-3 col-3 ">
                                        <img class="review_img" src="images/review_img.jpg" alt="rating" height="70" width="70">
                                    </div>
                                    <div class="col-lg-9 col-9">
                                        <div class="card3 shadow commentcard">
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
                                        <div class="card3 shadow  commentcard">
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
                    </div>
                
            </div>
        </div>
      </div>
    </div>
    
  </div>
  </div>
  </div>
        `;
  });
}
renderProdcuts();

//Cart Array
let cart = JSON.parse(localStorage.getItem("CART")) || [];
updateCart();

//Add to Cart
function addToCart(id){
    //check if product already exist
    if (cart.some((item) => item.id === id)){
       changeNumberOfUnits("plus", id);
    }else {
        const item = products.find((product)=>product.id === id);
        cart.push({
            ... item,
            numberOfUnits: 1,
         } );
    }

    updateCart(); 
}

//Fucntion Add to Cart
function updateCart()
    {
        renderCartItems();
        renderSubtotal();

         // save cart to local storage
  localStorage.setItem("CART", JSON.stringify(cart));
    }

//Calculate and render subtotal
function renderSubtotal() {
    let totalPrice = 0,
      totalItems = 0;
  
    cart.forEach((item) => {
      totalPrice += item.price * item.numberOfUnits;
      totalItems += item.numberOfUnits;
    });
  
    subtotalEl.innerHTML = `Subtotal (${totalItems} items): PHP${totalPrice.toFixed(2)}`;
    totalItemsInCartEl.innerHTML = totalItems;
  }
  
//Render cart items
function renderCartItems() {
    cartItemsEl.innerHTML = ""; // clear cart element
    cart.forEach((item) => {
      cartItemsEl.innerHTML += `
   <div class="cart-item">
       <div class = "cart">
          <div class = "row">
                  <div class = "col-4">
                  <div class=" item-info" onclick="removeItemFromCart(${item.id})">
                       <figure>
                       <div class = "card item-box">
                           <img src="${item.imgSrc}" alt="${item.name}">
                            <p class = "item-name">${item.name}</p>
                            <div>
                       </figure>
                       </div> 
                   </div>
                
                      <div class="col-4 unit-price">
                               <h6><span>PHP <span>${item.price}</h6>
                       </div>
                     
                      <div class="col-4 units">
                           <div class="btn minus" onclick="changeNumberOfUnits('minus', ${item.id})">-</div>
                           <div class="number">${item.numberOfUnits}</div>
                           <div class="btn plus" onclick="changeNumberOfUnits('plus', ${item.id})">+</div>    
                   </div>    
           </div>
     </div>   
    </div>
   
         
        `;
    });
  }

//Remove item from cart
function removeItemFromCart(id) {
    cart = cart.filter((item) => item.id !== id);
  
    updateCart();
  }
  
//Change number of units for an item
function changeNumberOfUnits(action, id) {
    cart = cart.map((item) => {
      let numberOfUnits = item.numberOfUnits;
  
      if (item.id === id) {
        if (action === "minus" && numberOfUnits > 1) {
          numberOfUnits--;
        } else if (action === "plus" && numberOfUnits < item.instock) {
          numberOfUnits++;
        }
      }
  
      return {
        ...item,
        numberOfUnits,
      };
    });
  
    updateCart();
  }
  

//WishList Array
let wishlist = JSON.parse(localStorage.getItem("WISH")) || [];
updateList();

//Add to Wish List
function addToWishList(id){
            const sample = products.find((product)=>product.id === id);
        wishlist.push(sample);
    updateList(); 
}

//Render wish items
function renderWishListItems() {
    wishItemsEl.innerHTML = ""; // clear cart element
    wishlist.forEach((sample) => {
      wishItemsEl.innerHTML += `
      <div class="wish-item">
          <div class = "wish">
                 <div class = "row">
                     <div class = "col-4">
                     <div class=" item-info" onclick="removeItemFromList(${sample.id})">
                     <div class = "card wishcard">
                        <img class = "list-img" src="${sample.imgSrc}" alt="${sample.name}">
                     <div>
                         <p class = "list-name">${sample.name}</p>
                     </div>
                     </div>
                     </div>
                     </div>
                     <div class="col-4">
                      <h6 class = "list-price"><span>PHP <span>${sample.price}</h6>
                     </div>
                      <div class="col-4 ">
                      <img class = "list-rate" src="${sample.rate}" alt="${sample.rate}">         
                      </div>
                  </div>
              
          </div>
     
          
  </div>  
           
         
        `;
    });
  }

//Save and render
  function updateList()
    {
        renderWishListItems();

// save cart to local storage
  localStorage.setItem("WISH", JSON.stringify(wishlist));
    }

//Eemove item from LIST
function removeItemFromList(id) {
    wishlist = wishlist.filter((sample) => sample.id !== id);
  
    updateList();
  }

