<?php
include("./php/loginserv.php"); // Include loginserv for checking username and password
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="./node_modules/angular/angular.js"></script>
    <script src="./node_modules/jquery/dist/jquery.js"></script>
    <script src="./js/test.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/temp/main.css">
    <title>Welcome | Eatadakimasu Cafe</title>

    <!-- <script>
        var app = angular.module('myApp', []);
        app.controller('myController', function($scope){
            $scope.name = "hello world";
        });
    </script> -->
</head>
<body ng-app="myApp" ng-model="myController">

    <!--Order Form  -->
    <div class="containers" id="food-order">
        <center>
            <div class="exit" id="exit-order"></div>
            <div class="frame food"></div>
            <h1 class="food-name">food</h1>
            <h3 class="qty-label">QTY</h3>
            <div class="container-qty">
                <button class="minus">-</button>
                <h3 class="qty" id="form-qty">0</h3>
                <button class="plus">+</button>
            </div>
            <div class="special">
            <span>Special Instruction: </span><input type="checkbox" name="" value=""><br>
            </div>
            <textarea rows="10" cols="60"></textarea><br>
            <button class="add-to-cart">Add to Cart</button> 
        </center>
    </div>

    <!--Sign  -->
    <div class="s-in" id="s-in">
        <center>
            <div class="c-in bg">
                <form action="#" method="post">                    
                    <div class="exit" id="exit-order"></div>
                    <h3>USERNAME</h3>
                    <input type="text" name="user">
                    <h3>PASSWORD</h3>
                    <input type="text" name="pass"><br><br>   
                    <span><strong><?php echo $error; ?></strong></span>
                    <div class="btn-container">
                        <input type="submit" class="in" value="LOGIN" name="submit">
                        <input onclick="window.location='./php/register.php'" type="button" class="up" value="REGISTER" ><br>
                        <input type="button" class="guest" value="LOGIN AS GUEST">
                    </div>
                </form>                    
            </div>
        </center>
    </div>

    <!--Navigation Bar  -->
    <div class="container-body">    
    <header>
        <div class="container">
            <h1>eatadakimasu<span>cafe</span></h1>
            <nav>
                <ul>
                    <strong>
                        <li><a href="#" class="home">home</a></li>
                        <li><a href="#" class="about">about us</a></li>
                        <li><a href="#" class="menu">menu</a></li>
                        <li><a href="#" class="order">order</a></li>
                        <li><a href="#" class="contact">contact</a></li>
                        <li><a href="" class="sign-in" id="sign-in">sign in</a></li>
                    </strong>
                </ul>
            </nav>
        </div>
    </header>

    <!--Home  -->
    <section id="home"> 
        <div class="home-background bg"></div>
        <article class="art-bg">
            <h1>Every Dish is a Specialty</h1>
            <hr>
            <p>A unique experience in japan dining</p>
        </article>
    </section>

    <!--About us  -->
    <section class="container" id="about">
        <img src="./img/menu/sushi.jpg" alt="" class="bg">
        <article class="about">
            <h1>Our Story</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima vero, repellat quibusdam voluptas architecto consectetur, illum aliquid incidunt hic corporis soluta, reiciendis. Placeat alias, quasi tenetur quis consequatur explicabo tempora commodi quas, et fuga dolor autem, perferendis? Officia enim veritatis provident, soluta perspiciatis ratione deserunt facere aperiam aliquam ullam quae at facilis nostrum rerum eveniet! Asperiores cupiditate atque accusamus natus, sequi quae nobis dolorum incidunt, iusto ipsa nihil vero alias debitis praesentium velit aliquam excepturi eos sed voluptates enim libero voluptatem deleniti laboriosam. Architecto sunt, nihil facere aperiam! Repellendus asperiores quidem officiis esse dolorum quia laboriosam illo, necessitatibus placeat tenetur! Commodi quae magnam a provident maiores consequatur, molestiae ipsum obcaecati quidem ex aut quas saepe quis! Doloremque et repellendus earum saepe, iste numquam ducimus reiciendis laborum aut reprehenderit natus sed quos sint tempora unde ut porro labore perspiciatis ratione rem, eum velit repellat dignissimos. Nihil, quia corporis! Consequuntur quis excepturi ipsa quia voluptatum. Quis sequi dignissimos laboriosam consequatur quam perspiciatis voluptatibus sit deserunt a et maxime eaque aspernatur esse, nobis amet illo aliquam corrupti natus quia laborum dolore! Quidem vero assumenda doloribus rem labore placeat necessitatibus incidunt sit enim iste. Illum inventore minus vitae maxime id, explicabo consequatur ipsam nulla.</p>
        </article>
    </section>
    

    <!--Menu  -->
    <section id="menu">
        <div class="menu-background bg"></div>
        <article class="art-bg">
            <h1><span>AFFORDABLE</span> PRICING</h1>
        </article>
    </section>
    
    <section class="container">
        <article class="menu">
            <h1>Our Menu</h1>
            <p>Have some of japan's delicacies.</p>
            <hr>
        </article>
        <div class="box-container">
            <div class="box">
                <div class="frame curry"></div>
                <article>
                    <h1>Curry Rice</h1>
                    <p>
                        Curry sauce is served on top of cooked rice to make
                        curry rice.
                    </p>
                </article> 
                <div class="button-cart-container">
                    <h1>₱80</h1>
                    <button id="curry" class="add-to-cart">Add to Cart</button>
                </div>
            </div>

            <div class="box">
               <div class="frame donburi"></div>
                <article>
                    <h1>Donburi</h1>
                    <p>
                        Fish, meat, vegetables or other ingredients simmered together and served over rice.
                    </p>
                </article> 
                <div class="button-cart-container">
                    <h1>₱100</h1>
                    <button id="donburi" class="add-to-cart">Add to Cart</button>
                </div>
            </div>
            <div class="box">
               <div class="frame cakey"></div>
                <article>
                    <h1>Japanese Cakey</h1>
                    <p>
                        Japanese sponge cake made of sugar, flour, eggs, and starch syrup. 
                    </p>
                </article> 
                <div class="button-cart-container">
                    <h1>₱30</h1>
                    <button id="cakey" class="add-to-cart">Add to Cart</button>
                </div>
            </div>
            <div class="box">
               <div class="frame karaage"></div>
                <article>
                    <h1>Karaage</h1>
                    <p>
                        Seasoned with garlic and ginger along with soy sauce, 
                        coated lightly with flour, and deep fried.
                    </p>
                </article> 
                <div class="button-cart-container">
                    <h1>₱70</h1>
                    <button id="karaage" class="add-to-cart">Add to Cart</button>
                </div>
            </div>
            <div class="box">
               <div class="frame omurice"></div>
                <article>
                    <h1>Omurice</h1>
                    <p>
                        Omelette made with fried 
                        rice and usually topped with ketchup.
                    </p>
                </article> 
                <div class="button-cart-container">
                    <h1>₱50</h1>
                    <button id="omurice" class="add-to-cart">Add to Cart</button>
                </div>
            </div>
            <div class="box">
               <div class="frame onigiri"></div>
                <article>
                    <h1>Onigiri</h1>
                    <p>
                        Rice formed into triangular or oval shapes and usually wrapped in nori (seaweed).
                    </p>
                </article> 
                <div class="button-cart-container">
                    <h1>₱50</h1>
                    <button id="onigiri" class="add-to-cart">Add to Cart</button>
                </div>
            </div>
            <div class="box">
               <div class="frame ramen"></div>
                <article>
                    <h1>Ramen</h1>
                    <p>
                        Yellowish broth made with plenty of 
                        salt and any combination of chicken, vegetables, and seaweed.
                    </p>
                </article> 
                <div class="button-cart-container">
                    <h1>₱120</h1>
                    <button id="ramen" class="add-to-cart">Add to Cart</button>
                </div>
            </div>
            <div class="box">
               <div class="frame pudding"></div>
                <article>
                    <h1>Pudding</h1>
                    <p>
                        Cold cooked rice shaped in small cakes and topped with 
                        strips of raw fish, and sliced into pieces.
                    </p>
                </article> 
                <div class="button-cart-container">
                    <h1>₱100</h1>
                    <button id="pudding" class="add-to-cart">Add to Cart</button>
                </div>
            </div>
            <div class="box">
               <div class="frame tempura"></div>
                <article>
                    <h1>Tempura</h1>
                    <p>
                        Seafood that have been battered and deep fried.
                        Accompanied by shredded cabbage and sauce.
                    </p>
                </article> 
                <div class="button-cart-container">
                    <h1>₱60</h1>
                    <button id="tempura" class="add-to-cart">Add to Cart</button>
                </div>
            </div>
            <div class="box">
               <div class="frame tonkatsu"></div>
                <article>
                    <h1>Tonkatsu</h1>
                    <p>
                        Breaded, deep-fried pork cutlet served in bite-sized 
                        pieces and accompanied by shredded cabbage.
                    </p>
                </article> 
                <div class="button-cart-container">
                    <h1>₱80</h1>
                    <button id="tonkatsu" class="add-to-cart">Add to Cart</button>
                </div>
            </div>

            <!--============================
                          DRINKS
            ================================-->
            <article class="menu">
                <h1>Drinks</h1>
                <hr>
            </article> 
            <div class="box">
               <div class="frame lipton-tea"></div>
                <article>
                    <h1>Lipton Green Tea</h1>
                    <p>
                        Breaded, deep-fried pork cutlet served in bite-sized 
                        pieces and accompanied by shredded cabbage.
                    </p>
                </article> 
                <div class="button-cart-container">
                    <h1>₱80</h1>
                    <button class="add-to-cart" id="lipton">Add to Cart</button>
                </div>
            </div>
            <div class="box">
               <div class="frame iced-tea"></div>
                <article>
                    <h1>Iced Tea</h1>
                    <p>
                        Breaded, deep-fried pork cutlet served in bite-sized 
                        pieces and accompanied by shredded cabbage.
                    </p>
                </article> 
                <div class="button-cart-container">
                    <h1>₱80</h1>
                    <button class="add-to-cart" id="iced">Add to Cart</button>
                </div>
            </div>
        </div>
    </section>

    <!--Order  -->
    <section id="order">
        <div class="order-background bg"></div>
        <article>
            <h1><span>ORDER</span> NOW</h1>
        </article>
    </section>

    <section class="container order">
        <!-- <div class="order-location">
            <div id="sample">
                <h1 id="title-form">Personal Information</h1>
                <p id="sub-title">Please fill up this form before ordering.</p>
            </div> 
            <div class="form-container">
                <input type="text" placeholder="First Name">
                <input type="text" placeholder="Middle Name">
                <input type="text" placeholder="Last Name">
                <input type="text" placeholder="Barangay"><br>
                <input type="text" placeholder="Street">
                <input type="text" placeholder="House No."><br>
                <input type="email" placeholder="Email Address">
                <input type="text" placeholder="Contact Number"><br>
            </div>
            <div class="button-container">
                <button class="in">login</button>
                <button class="up">register</button><br>
                <button class="guest">login as guest</button>
            </div>
        </div> -->

        <!--CART  -->

            <ul>
                <li class="row header">
                    <span class="qty">QTY{{ name }}</span>
                    <span class="item">ITEM</span>
                    <span class="price">QTY</span>
                </li>
                <li class="row item">
                    <span class="qty">2</span>
                    <span class="item-name">Donburi</span>
                    <span class="price">$56</span>
                    <span class="action"></span>
                </li>
                <li class="row footer">
                    <span class="total">Total:</span>
                    <span class="total-price">$1623.23</span>
                    <span class="order-button">
                        <a href="#">ORDER</a>
                    </span>
                </li>
            </ul>

    </section>


    <!--Contract Us  -->
    <footer id="contact">
        <div class="container">
            <p></p>Designed by <a style="color: white;" href="https://www.facebook.com/ZeddieSantos">ISIS</a>, Copyright &copy; 2017</p>
        </div>  
    </footer>
    
</body>
</html>