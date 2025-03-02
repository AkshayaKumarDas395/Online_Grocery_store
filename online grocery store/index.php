<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DN Mart</title>

    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" /> -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- FONT AWESOME CDN LINK -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
 crossorigin="anonymous" referrerpolicy="no-referrer" />
 

<!--  custom css file link -->
<link rel="stylesheet" href="style.css">

</head>


<body>


<!-- header section starts -->

<header>

    <div class="header-1">
        <!-- <img src="image-logo.png" alt=""> -->
        <a href="#" class="logo"><i class="fa fa-shopping-cart" style="font-size:48px;color:rgb(17, 128, 45)"></i>DN mart</a>
        <form action="" class="search-box-container">
            <input type="search" id="search-box" placeholder="search here...........">
            <label for="search-box" class="fas fa-search"></label>
        </form>  
    </div>

    <div class="header-2">

            <div id="menu-bar" class="fas fa-bars"></div>

        <nav class="navbar"> 
            <a href="#home">home</a>
            <a href="#category">category</a>
            <a href="#product">product</a>
            <a href="#deal">deal</a>
            <a href="#contact">contact</a>
            <a href="#review">Review</a>
        </nav>
       
        <div class="icons">
            <a href="#" class="fas fa-shopping-cart" id="cart-btn"></a>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-user-circle" id="login-btn"></a>
        </div>
        
    </div>
</header>

<!-- header section ends -->

<!-- loginForm starts -->

<div class="login-form-container">
    <i class="fas fa-times" id="form-close"></i>

    <form action="">
        <h3>login</h3>
        <input type="email" class="box" placeholder="Enter your email">
        <input type="password" class="box" placeholder="Enter your Password">
        <input type="submit" value="login now" class="btn">
        <input type="checkbox" id="remember">
        <label for="remember">remember me</label>
        <p>forget password? <a href="#">click here</a></p>
        <p>don't have an account? <a href="#">register now</a></p>
    </form>
</div>


<!-- loginForm ends -->


<!-- home section starts -->

<section class="home" id="home">
    <div class="image">
        <img src="image-home 1.png" alt="image not found" >
    </div>
    <div class="content">
        <span>Fresh And Organic</span>
        <h3 class="changecontent">Your Daily Need Products</h3>
        <a href="#" class="btn">Get Started</a>
    </div>
</section>

<!-- home section ends -->


<!-- banner section starts -->

<section class="banner-container">

    <div class="banner">
        <img src="image-banner 1.png"
         alt="No Special Offer">
        <div class="content">
            <h3>Special Offer</h3>
            <p>upto 60% off  </p>
            <a href="#" class="btn" onclick="window.location.href='specialoffer.html'">shop now</a>
        </div>
    </div>


    <div class="banner">
        <img src="image-banner 2.jpg"
         alt="no limmited offer">
        <div class="content">
            <h3>Limited Offer</h3>
            <p>upto 40% off  </p>
            <a href="#" class="btn" onclick="window.location.href='limitedoffer.html'">shop now</a>
        </div>
    </div>


</section>

<!-- banner section ends -->


<!-- category section starts -->

    <section class="category" id="category">
        <h1 class="heading">Shop by<span> Category</span></h1>

        <div class="box-container">
            <div class="box">
                <h3>Vegetables</h3>
                <p>Upto 50% off</p>
                <img src="image-category-vegetable 1.png" alt="">
                <a href="#" class="btn" onclick="window.location.href='vegetable.html'">shop now</a>
            </div>

                <div class="box">
                    <h3>Spices</h3>
                    <p>Upto 45% off</p>
                    <img src="image-catagory-spices 1.png" alt="">
                    <a href="#" class="btn" onclick="window.location.href='spice.html'">shop now</a>


                </div>
                
                <div class="box">
                    <h3>Dairy products</h3>
                    <p>Upto 35% off</p>
                    <img src="image-category-dairy-products 1.png" alt="">
                    <a href="#" class="btn" onclick="window.location.href='dairyproduct.html'">shop now</a>
                </div>
                <div class="box">
                    <h3>Fruits</h3>
                    <p>Upto 30% off</p>
                    <img src="image-category-fruits 1.png" alt="">
                    <a href="#" class="btn" onclick="window.location.href='fruit.html'">shop now</a>
                </div>
                
            </div>
    </section>

<!-- category section ends -->


<!-- product section starts -->

<section class="product" id="product">

    <h1 class="heading">Latest<span>Products</span></h1>

    <div class="box-container">

        <div class="box">
            <span class="discount">-40%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="1 banana.jpg" alt="discounts">
            <h3>Organic Banana</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹60 <span>₹100</span></div>
            <div class="quantity">
                <span>Quantity : </span>
                <input type="number" min="1" max="500" value="1">
                <span> /Dozen </span>
            </div>
            <a href="#" class="btn" onclick="window.location.href='placeorder.html'">Buy Now</a>
        </div>

        <div class="box">
            <span class="discount">-33%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="2 mango.png" alt="discounts">
            <h3>Fresh Mango</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹100 <span>₹150</span></div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="500" value="1">
                <span> /kg </span>
            </div>
            <a href="#" class="btn" onclick="window.location.href='placeorder.html'">Buy Now</a>
        </div>

        <div class="box">
            <span class="discount">-50%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="3 orange.png" alt="discounts">
            <h3>Organic orange</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹35 <span>₹70</span></div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="500" value="1">
                <span> /kg </span>
            </div>
            <a href="#" class="btn" onclick="window.location.href='placeorder.html'">Buy Now</a>
        </div>

        <div class="box">
            <span class="discount">-45%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="4 pomegranate.png" alt="discounts">
            <h3>Fresh Pomegranate</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹110 <span>₹200</span></div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="500" value="1">
                <span> /kg </span>
            </div>
            <a href="#" class="btn" onclick="window.location.href='placeorder.html'">Buy Now</a>
        </div>

        <div class="box">
            <span class="discount">-33%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="5 grapes.jpg" alt="discounts">
            <h3> Grapes </h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹100 <span>₹150</span></div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="500" value="1">
                <span> /kg </span>
            </div>
            <a href="#" class="btn" onclick="window.location.href='placeorder.html'">Buy Now</a>
        </div>

        <div class="box">
            <span class="discount">-20%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="6 blackcherry.png" alt="discounts">
            <h3>Blackcherry </h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹200 <span>₹250</span></div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="500" value="1">
                <span> /kg </span>
            </div>
            <a href="#" class="btn" onclick="window.location.href='placeorder.html'">Buy Now</a>
        </div>

        <div class="box">
            <span class="discount">-50%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="7 apple.jpg" alt="discounts">
            <h3>Fresh Apple </h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹100 <span>₹200</span></div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="500" value="1">
                <span> /kg </span>
            </div>
            <a href="#" class="btn" onclick="window.location.href='placeorder.html'">Buy Now</a>
        </div>

        <div class="box">
            <span class="discount">-15%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="" alt="discounts">
            <h3>Cheese </h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹250 <span>₹300</span></div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="500" value="1">
                <span> /kg </span>
            </div>
            <a href="#" class="btn" onclick="window.location.href='placeorder.html'">Buy Now</a>
        </div>

        <div class="box">
            <span class="discount">-40%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="9 lichi.webp" alt="discounts">
            <h3>Organic Carrot </h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹30 <span>₹50</span></div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="500" value="1">
                <span> /kg </span>
            </div>
            <a href="#" class="btn" onclick="window.location.href='placeorder.html'">Buy Now</a>
        </div>

        <div class="box">
            <span class="discount">-25%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="10 dragon-fruit.png" alt="discounts">
            <h3>Dragon Fruit </h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹150 <span>₹200</span></div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="500" value="1">
                <span> /kg </span>
            </div>
            <a href="#" class="btn" onclick="window.location.href='placeorder.html'">Buy Now</a>
        </div>
        
        <div class="box">
            <span class="discount">-33%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="11 pineapple.png" alt="discounts">
            <h3>Pineapple </h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹100 <span>₹150</span></div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="500" value="1">
                <span> /kg </span>
            </div>
            <a href="#" class="btn" onclick="window.location.href='placeorder.html'">Buy Now</a>
        </div>

        <div class="box">
            <span class="discount">-20%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="12 strawbery.jpg" alt="discounts">
            <h3>Strawbery </h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹400 <span>₹500</span></div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="500" value="1">
                <span> /kg </span>
            </div>
            <a href="#" class="btn" onclick="window.location.href='placeorder.html'">Buy Now</a>
        </div>

        <div class="box">
            <span class="discount">-33%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="13 pears.jpg" alt="discounts">
            <h3>Organic Pears </h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹200 <span>₹300</span></div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="500" value="1">
                <span> /kg </span>
            </div>
            <a href="#" class="btn" onclick="window.location.href='placeorder.html'">Buy Now</a>
        </div>

        <div class="box">
            <span class="discount">-55%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="14 papaya.jpg" alt="discounts">
            <h3> Papaya </h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹40 <span>₹70</span></div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="500" value="1">
                <span> /kg </span>
            </div>
            <a href="#" class="btn" onclick="window.location.href='placeorder.html'">Buy Now</a>
        </div>

        <div class="box">
            <span class="discount">-33%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="15 jackfruit.webp" alt="discounts">
            <h3>Bringal </h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹50 <span>₹75</span></div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="500" value="1">
                <span> /kg </span>
            </div>
            <a href="#" class="btn" onclick="window.location.href='placeorder.html'">Buy Now</a>
        </div>

        <div class="box">
            <span class="discount">-20%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="16 dewberry.jpg" alt="discounts">
            <h3>Fresh Tomato </h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹80 <span>₹100</span></div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="500" value="1">
                <span> /kg </span>
            </div>
            <a href="#" class="btn" onclick="window.location.href='placeorder.html'">Buy Now</a>
        </div>

        <div class="box">
            <span class="discount">-50%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="17 black olum.webp" alt="discounts">
            <h3>Organic Potato </h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹30 <span>₹60</span></div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="500" value="1">
                <span> /kg </span>
            </div>
            <a href="#" class="btn" onclick="window.location.href='placeorder.html'">Buy Now</a>
        </div>

        <div class="box">
            <span class="discount">-35%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="18 cardamon.webp" alt="discounts">
            <h3>Garlic </h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹90 <span>₹150</span></div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="500" value="1">
                <span> /kg </span>
            </div>
            <a href="#" class="btn" onclick="window.location.href='placeorder.html'">Buy Now</a>
        </div>

        <div class="box">
            <span class="discount">-40%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="19 cherry.webp" alt="discounts">
            <h3>Organic Ginger </h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹150 <span>₹250</span></div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="500" value="1">
                <span> /kg </span>
            </div>
            <a href="#" class="btn" onclick="window.location.href='placeorder.html'">Buy Now</a>
        </div>

        <div class="box">
            <span class="discount">-80%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="20 coconut.webp" alt="discounts">
            <h3>Fresh Parsley </h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹10 <span>₹50</span></div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="500" value="1">
                <span> /kg </span>
            </div>
            <a href="#" class="btn" onclick="window.location.href='placeorder.html'">Buy Now</a>
        </div>

        <div class="box">
            <span class="discount">-35%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="21 dates.webp" alt="discounts">
            <h3>Black Pepper </h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹250 <span>₹400</span></div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="500" value="1">
                <span> /kg </span>
            </div>
            <a href="#" class="btn" onclick="window.location.href='placeorder.html'">Buy Now</a>
        </div>

        <div class="box">
            <span class="discount">-40%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="22 custard-apple.webp" alt="discounts">
            <h3>Onion </h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹30 <span>₹50</span></div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="500" value="1">
                <span> /kg </span>
            </div>
            <a href="#" class="btn" onclick="window.location.href='placeorder.html'">Buy Now</a>
        </div>

        <div class="box">
            <span class="discount">-25%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="23 bay leaf.jpg" alt="discounts">
            <h3>Bay leaf </h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹150 <span>₹200</span></div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="500" value="1">
                <span> /kg </span>
            </div>
            <a href="#" class="btn" onclick="window.location.href='placeorder.html'">Buy Now</a>
        </div>

        <div class="box">
            <span class="discount">-40%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="30 cinnamon.jpg" alt="discounts">
            <h3>Cinnamon</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹300 <span>₹500</span></div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="500" value="1">
                <span> /kg </span>
            </div>
            <a href="#" class="btn" onclick="window.location.href='placeorder.html'">Buy Now</a>
        </div>

        </div>

<!-- product section ends -->


<!-- deal section starts -->

<section class="deal" id="deal">

    <div class="content">
        <!-- <img src="designbanner1.png" alt=""> -->
        <h3 class="title">DEAL OF THE DAY</h3>
        <p>Lorem ipsum dolor sit amet 
        consectetur adipisicing elit. Ullam, facere!</p>

        <div class="count-down">

            <div class="box">
                <h3 id="day">00</h3>
                <span>day</span>
            </div>

            <div class="box">
                <h3 id="hour">00</h3>
                <span>hour</span>
            </div>

            <div class="box">
                <h3 id="minute">43</h3>
                <span>minute</span>
            </div>
            <div class="box">
                <h3 id="second">00</h3>
                <span>second</span>
            </div>

        </div>
         
        <a href="#" class="btn">check the deal</a>

    </div>

</section>

<!-- deal section ends -->


<!-- contact section starts here -->

<section class="contact" id="contact">

    <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span> 
        <SPAN class="SPACE"></SPAN>
        <span>u</span> 
        <span>s</span> 
    </h1> 

    <div class="row">
        <div class="image">
            <img src="image-contact 1.jpg" alt=""> 
        </div>

     <form action="mailto.dasakshay1010@gmail.com" method="post" enctype="text/plain">

        <div class="inputBox">
            <input type="text" placeholder="name">
            <input type="email" placeholder="email">
        </div>

        <div class="inputBox">
            <input type="number" placeholder="number">
            <input type="text" placeholder="subject">
        </div>

        <textarea placeholder="message" name="" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="send message" class="btn">

     </form>
    </div>

</section>

<!-- contact section ends here -->


<!-- review section starts here -->


<section class="review" id="review">
    <h1 class="heading">
        <span>r</span>
        <span>e</span>
        <span>v</span>
        <span>i</span>
        <span>e</span>
        <span>w</span>
        <span>s</span>      
    </h1>
    <div class="swiper-container review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="box">
                    <img src="image-review 1.jpg" alt="">
                    <h3>Tony Stark</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis voluptatibus minus 
                        facere voluptate reprehenderit est. Vitae facilis excepturi minus porro, 
                        voluptatibus fuga quidem a veritatis sint, laborum vel recusandae accusamus.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box">
                    <img src="image-review 2.jpg" alt="">
                    <h3>Steve Rogers</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis voluptatibus minus 
                        facere voluptate reprehenderit est. Vitae facilis excepturi minus porro, 
                        voluptatibus fuga quidem a veritatis sint, laborum vel recusandae accusamus.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="image-review 3.jpg" alt="">
                    <h3>Peter Parker</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis voluptatibus minus 
                        facere voluptate reprehenderit est. Vitae facilis excepturi minus porro, 
                        voluptatibus fuga quidem a veritatis sint, laborum vel recusandae accusamus.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="image-review 4.jpg" alt="">
                    <h3>Bruce Wayne</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis voluptatibus minus 
                        facere voluptate reprehenderit est. Vitae facilis excepturi minus porro, 
                        voluptatibus fuga quidem a veritatis sint, laborum vel recusandae accusamus.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="image-review 5.jpg" alt="">
                    <h3>Natasha</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis voluptatibus minus 
                        facere voluptate reprehenderit est. Vitae facilis excepturi minus porro, 
                        voluptatibus fuga quidem a veritatis sint, laborum vel recusandae accusamus.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="image-review 6.jpg" alt="">
                    <h3>Scarlet</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis voluptatibus minus 
                        facere voluptate reprehenderit est. Vitae facilis excepturi minus porro, 
                        voluptatibus fuga quidem a veritatis sint, laborum vel recusandae accusamus.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="image-review 7.jpg" alt="">
                    <h3>Bruce Banner</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis voluptatibus minus 
                        facere voluptate reprehenderit est. Vitae facilis excepturi minus porro, 
                        voluptatibus fuga quidem a veritatis sint, laborum vel recusandae accusamus.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="image-review 7.jpg" alt="">
                    <h3>Clark Kent</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis voluptatibus minus 
                        facere voluptate reprehenderit est. Vitae facilis excepturi minus porro, 
                        voluptatibus fuga quidem a veritatis sint, laborum vel recusandae accusamus.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="image-review 7.jpg" alt="">
                    <h3>Dr. Stephen</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis voluptatibus minus 
                        facere voluptate reprehenderit est. Vitae facilis excepturi minus porro, 
                        voluptatibus fuga quidem a veritatis sint, laborum vel recusandae accusamus.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="image-review 7.jpg" alt="">
                    <h3>Peter Quill</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis voluptatibus minus 
                        facere voluptate reprehenderit est. Vitae facilis excepturi minus porro, 
                        voluptatibus fuga quidem a veritatis sint, laborum vel recusandae accusamus.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="image-review 7.jpg" alt="">
                    <h3>Mrs. Diana</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis voluptatibus minus 
                        facere voluptate reprehenderit est. Vitae facilis excepturi minus porro, 
                        voluptatibus fuga quidem a veritatis sint, laborum vel recusandae accusamus.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="image-review 7.jpg" alt="">
                    <h3>Arthur Curry</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis voluptatibus minus 
                        facere voluptate reprehenderit est. Vitae facilis excepturi minus porro, 
                        voluptatibus fuga quidem a veritatis sint, laborum vel recusandae accusamus.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="image-review 7.jpg" alt="">
                    <h3>Barry Allen</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis voluptatibus minus 
                        facere voluptate reprehenderit est. Vitae facilis excepturi minus porro, 
                        voluptatibus fuga quidem a veritatis sint, laborum vel recusandae accusamus.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                </div>
            </div>
             <div class="swiper-slide">
                <div class="box">
                    <img src="image-review 7.jpg" alt="">
                    <h3>Lois Lane</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis voluptatibus minus 
                        facere voluptate reprehenderit est. Vitae facilis excepturi minus porro, 
                        voluptatibus fuga quidem a veritatis sint, laborum vel recusandae accusamus.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="image-review 7.jpg" alt="">
                    <h3>Wong</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis voluptatibus minus 
                        facere voluptate reprehenderit est. Vitae facilis excepturi minus porro, 
                        voluptatibus fuga quidem a veritatis sint, laborum vel recusandae accusamus.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- review section ends here -->


<!-- footer section starts here -->

<section class="footer">

    <div class="box-container">

        <div class="boxs">
            <a href="#" class="logo"><i class="fa fa-shopping-cart" style="font-size:48px;color:rgb(17, 128, 45)"></i>DN mart</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, ut cupiditate deserunt temporibus
               ab modi. Illo, eos delectus architecto rem ipsau</p>

            <div class="share">
                <a href="#" class="btn fab fa-facebook"></a>
                <a href="#" class="btn fab fa-twitter"></a>
                <a href="#" class="btn fab fa-instagram"></a>
                <a href="#" class="btn fab fa-linkedin"></a>
            </div>   
        </div>

            <div class="boxs">
                <h3>our location</h3>
                <div class="links">
                    <a href="#">INDIA</a>
                    <a href="#">USA</a>
                    <a href="#">UK</a>
                    <a href="#">JAPAN</a>
                    <a href="#">CANADA</a>
                    <a href="#">AUSTRALIA</a>
                    <a href="#">RUSSIA</a>
                </div>
            </div>

            <div class="boxs">
                <h3>quick links</h3>
                <div class="links">
                    <a href="#home">HOME</a>
                    <a href="#category">CATAGORY</a>
                    <a href="#product">PRODUCT</a>
                    <a href="#deal">DEAL</a>
                    <a href="#contact">CONTACT</a>
                    <a href="#review">REVIEW</a>
                </div>
            </div>

            <div class="boxs">
                <h3>download app</h3>
                <div class="links">
                    <a href="#">playstore</a>
                    <a href="#">window xp</a>
                    <a href="#">appstore</a>
                </div>
            </div>

    </div>

    <h1 class="credit">created by <span>AK SS AB</span>  |   all rights reserved !</h1>

</section>

<!-- footer section ends here -->

 <!-- review section link to javascript -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- link to javascript  -->

<script src="script.js"></script>


</body>

</html>
