<?php
// include("./php/loginserv.php"); // Include loginserv for checking username and password
// include("./php/registerserv.php");
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="./node_modules/angular/angular.min.js"></script>
    <script src="./node_modules/angular-animate/angular-animate.js"></script>
    <script src="./node_modules/jquery/dist/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    
    <link rel="stylesheet" type="text/css" href="./css/temp/main.css">
    <script src="./js/test.js"></script>
    <title>Welcome | Eatadakimasu Cafe</title>

    <!-- <script>
        var app = angular.module('myApp', []);
        app.controller('myController', function($scope){
            $scope.name = "hello world";
        });
    </script> -->
</head>
<body ng-app="myApp" ng-controller="myCtrl" ng-init="checkUser()">
    <!--Order Form  -->
    <div class="containers" id="food-order" ng-init="qty = 0" ng-show="showOrder">
        <center>
            <div class="top-action">
                <div class="exit" id="exit-order" ng-click="exitForm(); showOrder = false"></div>
            </div>
            <div class="frame food"></div>
            <h1 class="food-name">food</h1>
            <div class="container-qty">
                <h2>₱{{ qty * 30 }}</h2>
                <h3 class="qty-label">QTY</h3> <br>
                <button class="minus" ng-click="0<qty? qty = qty - 1: angular.noop()">-</button>
                <h3 class="qty" id="form-qty">0</h3>
                <button class="plus" ng-click="qty = qty + 1">+</button> <br>
            </div>
            <div class="special">
            <span>Special Instruction: </span><input type="checkbox" ng-model="showInst" name="" value=""><br>
            </div>
            <textarea rows="5" cols="60" ng-show="showInst"></textarea><br>
            <button class="add-to-cart" ng-click="addPrice(); showOrder = false" id="add-to-cart" add-To-Cart>Add to Cart</button> 
        </center>
    </div>

    <!--Sign  -->
    <div class="s-in" id="s-in" ng-show="showIn">
        <center>
            <div class="c-in bg">
                <!--==============================================
                                    LOGIN FORM  
                  ==============================================-->
                <div class="top-action">
                    <div class="back" ng-click="showRegister = false; showLogin = false; showBill = false; showPayment = false; showBack = false" ng-show="showBack"></div>
                    <div class="exit" id="s-exit" ng-click="showIn = false; showLogin = false; showRegister = false; showBill = false; showPayment = false; showBack = false; exitForm()"></div>
                </div>
                <form action="" method="post" id="form">                
                    <div class="login-form" ng-hide="showLogin">   
                        <h4>USERNAME</h4> 
                        <input type="text" name="user">
                        <h4>PASSWORD</h4> 
                        <input type="password" name="pass"><br><br>   
                        <div class="alert alert-success" ng-show="loginSuccess">
                            <center><strong><span class="glyphicon glyphicon-ok"></span> Login Successful! </strong> {{ welcome }}</center>
                        </div>
                        <div class="alert alert-danger" ng-show="loginFailed">
                            <center><strong><span class="glyphicon glyphicon-remove"></span> Login Failed! </strong> Username / password is incorrect.</center>
                        </div>
                        <div class="alert alert-warning" ng-show="loginGuest">
                            <center><strong><span class="glyphicon glyphicon-ok-circle"></span>  Logging in as Guest...</strong></center>
                        </div>
                        <div class="btn-container">
                            <input type="submit" id="login" ng-click="sign_in()" class="in" value="LOGIN" name="submit">
                            <input type="button" class="up" value="REGISTER" ng-click="showLogin= true; showRegister = true; showBack = true"><br>
                            <input type="button" class="guest" ng-click="sign_guest()" value="LOGIN AS GUEST" name="submit2">
                        </div>
                    </div>  
                </form>
                <!--==============================================
                            PERSONAL INFORMATION FORM  
                  ==============================================-->
                <form action="" method="post" id="register">
                    <div class="register-form">
                        <!--************************************
                            NAVIGATION BAR FOR REGISTER FORM  
                        **************************************-->
                        <div class="reg-nav" ng-show="showLogin">
                            <center>
                                <hr>
                                <div class="c-nav">
                                    <span>
                                        <strong>
                                        <button type="button" class="nav-form nav-1" ng-click="navLoc(1,'top'); showRegister = true; showBill = false; showPayment = false">1</button>
                                        <button class="invi"></button>
                                        <button type="button" class="nav-form nav-2" ng-click="navLoc(2,'top'); showRegister = false; showBill = true; showPayment = false">2</button>
                                        <button class="invi"></button>
                                        <button type="button" class="nav-form nav-3" ng-click="navLoc(3,'top'); showRegister = false; showBill = false; showPayment = true">3</button>
                                        </strong>
                                    </span>
                                </div>
                                <span>
                                    <h6 class="person-info">Personal Information</h6>
                                    <h6 class="invi">1</h6>
                                    <h6 class="bill-info">Billing Information</h6>
                                    <h6 class="invi">1</h6>
                                    <h6 class="pay-info">Payment Information</h6>
                                </span>
                            </center>
                        </div>
                        <div class="person-form" ng-show="showRegister">
                            <div class="col-span-2">
                                <div class="col-2">
                                    <h5>First Name</h5>
                                    <input type="text" name="first-name" value="">
                                </div>
                                <div class="col-2">
                                    <h5>Last Name</h5>
                                    <input type="text" name="last-name">
                                </div>
                            </div>
                            <div ng-hide="isGuest">
                                <h5>Username</h5>
                                <input type="text" name="username">
                                <h5>Password</h5>
                                <input type="password" name="password">
                                <h5>Confirm Password</h5>
                                <input type="password" name="cpassword">
                            </div>
                            <div class="col-span-3">
                                <div class="col-3">
                                    <h5>Birthday</h5>
                                    <select name="month">
                                        <option value="00">Month</option>
                                        <option value="01">January</option>
                                        <option value="02">February</option>
                                        <option value="03">March</option>
                                        <option value="04">April</option>
                                        <option value="05">May</option>
                                        <option value="06">June</option>
                                        <option value="07">July</option>
                                        <option value="08">August</option>
                                        <option value="09">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>   
                                </div>
                                <div class="col-3">
                                    <h5>Day</h5>    
                                    <input type="text" placeholder="Day" class="day" name="day">
                                </div>
                                <div class="col-3">
                                    <h5>Year</h5>    
                                    <input type="text" placeholder="Year" class="year" name="year">
                                </div>
                            </div>
                            <h5>Gender</h5>
                            <select name="gender">
                                <option value="Gender">Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select> 
                            <button type="button" ng-click="navLoc(2,'btn'); showRegister = false; showBill = true;" class="btn btn-success">Next Step</button>
                        </div>
                
                        <!--==============================================
                                    BILLING INFORMATION FORM  
                        ==============================================-->
                    
                        <div class="bill-form" ng-show="showBill">
                            <h5>Barangay *</h5>
                            <input type="text" name="barangay">

                            <div class="col-span-2">
                                <div class="col-2">
                                    <h5>Street</h5>
                                    <input type="text" name="street">
                                </div>
                                <div class="col-2">
                                    <h5>House No.</h5>
                                    <input type="text" name="h-no">
                                </div>
                            </div>

                            <h5>Email *</h5>
                            <input type="text" name="email">
                            <h5>Mobile No. *</h5>
                            <input type="text" name="mobile">
                            <button type="button" ng-click="navLoc(3,'btn'); showBill = false; showPayment = true;" class="btn btn-warning">Skip</button>
                            <button type="button" ng-click="navLoc(3,'btn'); showBill = false; showPayment = true;" class="btn btn-success">Next Step</button>
                        </div>
                        <!--==============================================
                                    PAYMENT INFORMATION FORM  
                        ==============================================-->
                        <div class="payment-form" ng-show="showPayment">
                            <h5>Card Type</h5>
                            <select name="card">
                                <option value="MasterCard">MasterCard</option>
                                <option value="VisaCard">Visa Card</option>
                                <option value="PayPal">PayPal</option>
                            </select>

                            <div class="col-span-2">
                                <div class="col-2">
                                    <h5>Credit Card Number</h5>
                                    <input type="text">
                                </div>
                                <div class="col-2">
                                    <h5>Security Code</h5>
                                    <input type="text">
                                </div>
                            </div>

                            <div class="col-span-2">
                                <div class="col-2">
                                    <h5>Expiration Date</h5>
                                    <input type="date">
                                </div>
                                <div class="col-2">
                                    <h5 class="invi">asd</h5>
                                    <input type="date">
                                </div>
                            </div>
                            <input type="submit" ng-click="showLogin = false; showPayment = false; saveCustInfo()" class="save-info" value="Save Information" name="save">                            
                        </div>
                    </div>
                </form>
            </div>
        </center>
    </div>

    <!--Navigation Bar  -->
    <div class="container-body" id="bimbi">    
    <header>
        <div class="container">
            <!-- <h1>eatadakimasu<span>cafe</span></h1> -->
            <div class="logo"></div>
            <nav>
                <ul>
                    <strong>
                        <li><a href="" id="nav-home" class="home">home</a></li>
                        <li><a href="#" id="nav-about" class="about">about us</a></li>
                        <li><a href="#" id="nav-menu" class="menu">menu</a></li>
                        <li><a href="#" id="nav-order" class="order">order</a></li>
                        <li><a href="#" id="nav-contact" class="contact">contact</a></li>
                        <li><a href="" class="sign-in" id="sign-in" ng-click="showIn = true" ng-hide="signedIn">sign in</a>
                        <a href="" id="user" class="user dropdown-toggle" data-toggle="dropdown" ng-show="signedIn"><span class="greetings">Hello, </span>{{ user }} <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                                <li><a href="" class="o-user">Edit Info</a></li><br>
                                <hr> 
                                <li><a href="./php/logout.php" ng-click="logout()" class="o-user" style="color: #f06953;">Logout</a></li>
                            </ul>
                        </li>
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
        <article class="menu-sub-title">
            <h1 class="menu-title">Our Menu</h1>
            <p class="menu-sub">Have some of japan's delicacies.</p>
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
                    <button id="curry" ng-click="requireLogin()" class="add-to-cart" ng-click="showOrder = true">Add to Cart</button>
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
                    <button id="donburi" ng-click="requireLogin()" class="add-to-cart" ng-click="showOrder = true">Add to Cart</button>
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
                    <button id="cakey" ng-click="requireLogin()" class="add-to-cart" ng-click="showOrder = true">Add to Cart</button>
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
                    <button id="karaage" ng-click="requireLogin()" class="add-to-cart" ng-click="showOrder = true">Add to Cart</button>
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
                    <button id="omurice" ng-click="requireLogin()" class="add-to-cart" ng-click="showOrder = true">Add to Cart</button>
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
                    <button id="onigiri" ng-click="requireLogin()" class="add-to-cart" ng-click="showOrder = true">Add to Cart</button>
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
                    <button id="ramen" ng-click="requireLogin()" class="add-to-cart" ng-click="showOrder = true">Add to Cart</button>
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
                    <button id="pudding" ng-click="requireLogin()" class="add-to-cart" ng-click="showOrder = true">Add to Cart</button>
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
                    <button id="tempura" ng-click="requireLogin()" class="add-to-cart" ng-click="showOrder = true">Add to Cart</button>
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
                    <button id="tonkatsu" ng-click="requireLogin()" class="add-to-cart" ng-click="showOrder = true">Add to Cart</button>
                </div>
            </div> 

            <!--============================
                          DRINKS
            ================================-->
            <article class="menu-sub-title">
                <br>
                <h1 class="menu-title">Drinks</h1>
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
                    <button class="add-to-cart" ng-click="requireLogin()" id="lipton" ng-click="showOrder = true">Add to Cart</button>
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
                    <button class="add-to-cart" ng-click="requireLogin()" id="iced" ng-click="showOrder = true">Add to Cart</button>
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
        <strong>
        <ul class="cart" id="cart">
            <li class="row header">
                <span class="qty">QTY</span>
                <span class="item">ITEM</span>
                <span class="price">PRICE</span>
            </li>

            <!-- <li class="row items">
                <span class="qty">2</span>
                <span class="item-name">Donburi</span>
                <a href="" class="action" ng-click="showActions = !showActions"></a>
                <span class="price">₱80.00</span>
                <div class="action-item" ng-show="showActions"><a href=""><span class="glyphicon glyphicon-pencil"></span></a><a href=""><span class="glyphicon glyphicon-remove"></span></a></div>
            </li> -->
            
            <li class="row footer" id="add-item">
                <span class="total">Total:</span>
                <span class="total-price">₱{{ totalPricy }}</span>
                <a href="" id="order-btn" class="order-button" ng-click="order()">ORDER</a>
            </li>
            <hr>
        </ul>
        </strong>

    </section>


    <!--Contract Us  -->
    <footer id="contact">
        <div class="container">
            <p></p>Designed by <a style="color: white;" href="https://www.facebook.com/ZeddieSantos">ISIS</a>, Copyright &copy; 2017</p>
        </div>  
    </footer>
    
</body>
</html>