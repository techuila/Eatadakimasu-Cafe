<?php

// include("./php/loginserv.php"); // Include loginserv for checking username and password
// include("./php/registerserv.php");
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> -->
    <script src="./node_modules/angular/angular.min.js"></script>
    <script src="./node_modules/angular-animate/angular-animate.js"></script>
    <script src="./node_modules/jquery/dist/jquery.min.js"></script>
    <script src="./node_modules/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>  
    <link rel="stylesheet" href="./node_modules/bootstrap-3.3.7-dist/css/bootstrap.min.css">    
    <link rel="stylesheet" type="text/css" href="./css/temp/main.css">
    <script src="./js/test.js"></script>
    <title>Welcome | Eatadakimasu Cafe</title>
</head>
<body ng-app="myApp" ng-controller="myCtrl" ng-init="checkUser();">

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><strong>{{ modalTitle }}</strong></h4>
            </div>
            <div class="modal-body">
                <p>{{ modalText }}</p>
            </div>
            <div class="modal-footer" ng-hide="closeOnly">
                <button type="button" class="btn btn-success" data-dismiss="modal">Ok</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            <div class="modal-footer" ng-show="closeOnly">
                <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
            </div>
            </div>
        </div>
    </div>

         <!--Order Form  -->
         <div class="containers" id="food-order" ng-init="qty = 0" ng-show="showOrder">
            <center>
                <div class="top-action">
                    <div class="exit" id="exit-order" ng-click="exitForm(); showOrder = false"></div>
                </div>
                <!-- CLEINT VIEW -->

                <div ng-hide="adminMode" class="client-container">
                    <div class="frame food"></div>
                    <h1 class="food-name">food</h1>
                    <div class="container-qty">
                        <h2>₱{{ qty * 30 }}</h2>
                        <h3 class="qty-label">QTY</h3> <br>
                        <button class="minus" ng-click="0<qty? qty = qty - 1: angular.noop()">-</button>
                        <h3 class="qty" id="form-qty">{{ qty }}</h3>
                        <button class="plus" ng-click="qty = qty + 1">+</button>
                    </div><br>
                    <div class="alert alert-danger width" ng-show="empty">
                        <center><strong><span class="glyphicon glyphicon-remove"></span> Adding Failed! </strong> Please specify how many orders.</center>
                    </div>
                    <button add-To-Cart class="add-to-cart" ng-click="addPrice();" id="add-to-cart">Add to Cart</button> 
                </div>

                <!-- ADMIN MODE -->
                <div ng-show="adminMode" class="admin-container">
                    <form class="form" method="POST" action="./php/insertfood.php" id="add-menu" name="add-menu" enctype="multipart/form-data">
                        <div class="frame foody"><div class="img-upload">
                        <input name="photo" id="photo" type="file" style="cursor: pointer; opacity: 0; position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                        </div></div> <br>
                        <h4 class="qty-label">Food Name <span id="errmsg11" style="color:red;font-size:12px"></span></h4> 
                        <input name="food-name" id="food-name-txt" type="text" class="food-name form-control"><br>
                        <h4 class="qty-label">Description <span id="errmsg12" style="color:red;font-size:12px"></span></h4>                             
                        <textarea name="food-desc" id="food-desc-txt" cols="25" rows="3" class="food-desc form-control"></textarea>
                        <h4 class="qty-label">Price <span id="errmsg13  " style="color:red;font-size:12px"></span></h4> 
                        <input name="food-qty" id="food-price-txt" type="text" class="food-price form-control"><br>
                        <input name="insert_menu"type="submit" class="btn hover-add" ng-click="saveMenu();" value="Add">
                        <button class="btn btn-default" style="margin-left: 8px; color: #34495e;">Cancel</button>            
                    </form>
                </div>
            </center>
        </div>

        <!--Sign  -->
        <div class="s-in" id="s-in" ng-show="showIn">
            <center>
                <div class="c-in bg">
                    <div class="top-action">
                        <div class="back" ng-click="showRegister = false; showLogin = false; showBill = false; showPayment = false; showBack = false" ng-show="showBack"></div>
                        <div class="exit" id="s-exit" ng-click="exitForm(); showLogin = false; showRegister = false; showBill = false; showPayment = false; showBack = false;"></div>
                    </div>
                    <div class="s-container">
                        <div class="p-order">
                            <div class="bg-order">
                                <h2>Order Preview</h2>
                                <div class="bgg"></div>
                            </div>
                            <br><br><br>
                            <ul id="p-order">
                                    <li class="row header">
                                        <strong>
                                            <span class="qty">QTY</span>
                                            <span class="item">ITEM</span>
                                            <span class="price">PRICE</span>
                                        </strong>
                                    </li>

                                <!-- <li class="row items">
                                    <span class="qty">2</span>
                                    <span class="item-name">Donburi</span>
                                    <span class="price">₱80.00</span>
                                </li>  -->
                                <li class="row boom" id="add-items">
                                    <strong>
                                        <span class="total">TOTAL:</span>
                                        <span class="total-price">₱ 201</span>
                                    </strong>
                                </li>
                                <hr>
                            </ul>
                        </div>
                    <!--==============================================
                                        LOGIN FORM  
                    ==============================================-->
                        <div class="right-side">
                            <form action="loginserv.php" method="post" id="form">                
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
                                        <input type="button" class="up" value="REGISTER" ng-click="showLogin= true; showRegister = true; showBack = true; notLoggedIn = false"><br>
                                        <input type="button" class="guest" ng-click="sign_guest()" value="LOGIN AS GUEST" name="submit2">
                                    </div>
                                </div>  
                            </form>
                            <!--==============================================
                                        PERSONAL INFORMATION FORM  
                            ==============================================-->
                            <form action="" method="post" id="register" enctype="multipart/form-data">
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
                                            <span class="l-nav">
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
                                                <h5>First Name* <span id="errmsg" style="color:red;font-size:12px"></span></h5>
                                                <input type="text" name="first-name" id="first-name" value="" maxlength="35">
                                            </div>
                                            <div class="col-2">
                                                <h5>Last Name* <span id="errmsg1" style="color:red;font-size:12px"></span></h5>
                                                <input type="text" name="last-name" id="last-name" maxlength="35">
                                            </div>
                                        </div>
                                        <div ng-hide="guest">
                                            <h5>Username*</h5>
                                            <input type="text" name="username" maxlength="15">
                                            <h5>Password*</h5>
                                            <input type="password" name="password" id="password" maxlength="16" minlength = "8">
                                            <h5>Confirm Password*</h5>
                                            <input type="password" name="cpassword" maxlength="16" minlength="8">
                                        </div>
                                        <div class="col-span-3">
                                            <div class="col-3">
                                                <h5>Birth Month*</h5>
                                                <select name="month">
                                                    <option value="00" ng-hide="true">Month</option>
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
                                                <h5>Day* <span id="errmsg2" style="color:red;font-size:12px"></span></h5>    
                                                <input type="text" placeholder="Day" class="day" name="day" id="day" maxlength="2" > <span id="errmsg"></span>
                                            </div>
                                            <div class="col-3">
                                                <h5>Year* <span id="errmsg3" style="color:red;font-size:12px"></span></h5>    
                                                <input type="text" placeholder="Year" class="year" name="year" id="year" maxlength="4"> <span id="errmsg"></span>
                                            </div>
                                        </div>
                                        <h5>Gender</h5>
                                        <select name="gender">
                                            <option value="Gender" ng-hide="true">Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select> 
                                        <button type="button" ng-click="navLoc(2,'btn'); showRegister = false; showBill = true;" class="btn btn-success">Next Step</button>
                                    </div>
                            
                                    <!--==============================================
                                                BILLING INFORMATION FORM  
                                    ==============================================-->
                                
                                    <div class="bill-form" ng-show="showBill">
                                        <h5>Barangay* <span id="errmsg4" style="color:red;font-size:12px"></span></h5>
                                        <input type="text" name="barangay" id="barangay" maxlength="20">

                                        <div class="col-span-2">
                                            <div class="col-2">
                                                <h5>Street <span id="errmsg5" style="color:red;font-size:12px"></span></h5>
                                                <input type="text" name="street" id="street" maxlength="20"> 
                                            </div>
                                            <div class="col-2">
                                                <h5>House No. <span id="errmsg6" style="color:red;font-size:12px"></span></h5>
                                                <input type="text" name="h-no" id="h-no" maxlength="4"> 
                                            </div>
                                        </div>

                                        <h5>Email*</h5>
                                        <input type="text" name="email" maxlength="255">
                                        <h5>Mobile No.* <span id="errmsg7" style="color:red;font-size:12px"></span></h5>
                                        <input type="text" name="mobile" id="mobile" maxlength="11">
                                        <button type="button" ng-click="navLoc(3,'btn'); showBill = false; showPayment = true;" ng-hide="guest" class="btn btn-warning">Skip</button>
                                        <button type="button" ng-click="navLoc(3,'btn'); showBill = false; showPayment = true;" class="btn btn-success">Next Step</button>
                                    </div>
                                    <!--==============================================
                                                PAYMENT INFORMATION FORM  
                                    ==============================================-->
                                    <div class="payment-form" ng-show="showPayment">
                                        <h5 ng-show="guest">Payment Method</h5>
                                        <select name="p-method" id="p_method" ng-show="guest" ng-click="check();">
                                            <option value="card">Credit card / Debit Card</option>
                                            <option value="cash">Cash on Delivery</option>
                                        </select>

                                        <div ng-show="cash">
                                            <h5>Bring change for? <span id="errmsg8" style="color:red;font-size:12px"></span></h5>
                                            <input type="text" name="change" id="change" maxlength="35"> <span id="errmsg"></span>

                                            <h5>Special request for your order?</h5>
                                            <textarea name="s_request" rows="3" cols="5"></textarea>
                                        </div>

                                        <div ng-hide="cash">
                                            <h5>Card Type</h5>
                                            <select name="card">
                                                <option value="MasterCard">MasterCard</option>
                                                <option value="VisaCard">Visa Card</option>
                                                <option value="PayPal">PayPal</option>
                                            </select>

                                            <div class="col-span-2">
                                                <div class="col-2">
                                                    <h5>Credit Card Number <span id="errmsg9" style="color:red;font-size:12px"></span></h5>
                                                    <input type="text" name = "c-num" id="c-num" maxlength="19">                                            </div>
                                                <div class="col-2">
                                                    <h5>Security Code <span id="errmsg10" style="color:red;font-size:12px"></span></h5>
                                                    <input type="text" name = "s-code" id="s-code" maxlength="4"> 
                                                </div>
                                            </div>

                                            <div class="col-span-2">
                                                <div class="col-2">
                                                    <h5>Expiration Date</h5>
                                                    <input type="date" name = "exp-start" id="exp-start"> 
                                                </div>
                                                <div class="col-2">
                                                    <h5 class="invi">asd</h5>
                                                    <input type="date" name = "exp-end" id="exp-end"> 
                                                </div>
                                            </div>
                                        </div>
                                        <input type="submit" ng-click="saveCustInfo()" class="save-info" value="Save Information" name="save" id="save">                            
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </center>
        </div>
    
    <div class="container-body" id="bimbi">    
        <!--Navigation Bar  -->
        <header>
            <div class="container">
                <!-- <h1>eatadakimasu<span>cafe</span></h1> -->
                <div class="logo"></div>
                <nav>
                    <ul class="basta-waitlang">
                        <strong>
                            <div class="waranai" ng-hide="transaction">
                                <li><a href="" id="nav-home" class="home">home</a></li>
                                <li><a href="#" id="nav-about" class="about">about us</a></li>
                                <li><a href="#" id="nav-menu" class="menu">menu</a></li>
                                <li><a href="#" id="nav-order" ng-hide="admin" class="order">order</a></li>
                                <li><a href="#" id="nav-contact" class="contact">contact</a></li>
                            </div>
                            <li><a href="" class="sign-in" id="sign-in" ng-click="showIn = true" ng-hide="signedIn">sign in</a>
                            <a href="" id="user" class="user dropdown-toggle" data-toggle="dropdown" ng-show="signedIn"><span class="greetings">Hello, </span>{{ user }} <span class="caret"></span></a>
                            <button class="btn btn-primary" ng-show="transaction" ng-click="transactionClick();" style="margin-top: -5px;"><span class="glyphicon glyphicon-arrow-left"></span> Back</button>
                            <ul class="dropdown-menu">
                            <li><a href="" class="o-user" ng-show="showAdmin();" ng-click="adminModes();" id="adminMode"><span class="glyphicon glyphicon-user"></span> Admin Mode</a></li><br>                            
                            <li><a href="" class="o-user" ng-show="adminMode" ng-click="adminModes();" id="adminModeoff"><span class="glyphicon glyphicon-user"></span> Admin Mode Off</a></li><br>                                                    
                            <li><a href="" class="o-user" ng-show="admin" ng-click="transactionClick();" id="transaction"><span class="glyphicon glyphicon-list-alt"></span> Manage Transactions</a></li><br>                                                    
                            <li><a href="" class="o-user" ng-hide="guest"><span class="glyphicon glyphicon-edit"></span> Edit Info</a></li><br>
                                <hr ng-hide="guest"> 
                                <li><a href="./php/logout.php" ng-click="logout()" class="o-user" style="color: #f06953;"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                            </ul>
                            </li>
                        </strong>
                    </ul>
                </nav>
            </div>
        </header>

        <!-- ==========================================================
                                ADMIN MODE TRANSACTIONS
             ==========================================================-->

        <div class="container" ng-show="transaction">
            <div class="marginTop">
                <div class="table-responsive">
                    <div class="jumbotron">
                        <center><h1 style="font-size: 3em;">ORDER TRANSACTIONS</h1></center>
                    </div>
                    <div class="form-group">
                        <label for="sel1" style="font-size: 16px;"><strong>Filter:</strong></label>
                        <select class="form-control" id="sel1">
                            <option value="pending">All</option>                        
                            <option value="pending">Pending</option>
                            <option value="orders">Orders</option>
                            <option value="delivered">Delivered</option>
                        </select>
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>BILLING NO.</th>
                                <th>CUSTOMER</th>
                                <th>ADDRESS</th>
                                <th>TOTAL PRICE</th>
                                <th>STATUS</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1002</td>
                                <td>ALDOMIN TAN</td>
                                <td>STA. MARIA BELLO DRIVE</td>
                                <td>₱1,203.00</td>
                                <td>PENDING</td>
                                <td><button class="btn btn-success"><span class="glyphicon glyphicon-ok"></span></button><button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        

        <!-- ==========================================================
                                CLIENT VIEW
             ==========================================================-->
        <div ng-hide="transaction">
            <!--Home  -->
            <section id="home"> 
                <div class="slider">
                    <img class="home-background bg" src="./img/01.jpg" ng-hide="one"></img>
                    <img class="home-background slider-1 bg" src="./img/menu/slider/slide1.jpg" ng-show="two"></img>
                    <img class="home-background slider-2 bg" src="./img/menu/slider/slide2.jpg" ng-show="three"></img>
                    <img class="home-background slider-3 bg" src="./img/menu/slider/slide3.jpg" ng-show="four"></img>
                    <article class="art-bg main-bg" ng-hide="one">
                        <h1>Every Dish is a Specialty</h1>
                        <hr>
                        <p>A unique experience in japan dining</p>
                    </article>
                    <article class="art-bg temp" ng-show="two">
                        <h1>Tempura</h1>
                        <p>
                            Seafood that have been battered and deep <br> fried.
                            Accompanied by shredded <br> cabbage and sauce.
                        </p>
                        <button data-toggle="modal" data-target="#myModal" type="button" id="temp"><span class="glyphicon glyphicon-shopping-cart icon-left"></span><span class="label-right"><strong>Order Now</strong></span></button>
                    </article>
                    <article class="art-bg pud" ng-show="three">
                        <h1>Chocolate Pudding</h1>
                        <p>
                            Chocolate puddings are a class of desserts with chocolate flavors. <br>
                            There are two main types: a boiled then chilled dessert, <br>
                            texturally a custard set with starch.
                        </p>
                        <button type="button" id="pud"><span class="glyphicon glyphicon-shopping-cart icon-left"></span><span class="label-right"><strong>Order Now</strong></span></button>                
                    </article>
                    <article class="art-bg ton" ng-show="four">
                        <h1>Tonkatsu</h1>
                        <p>
                            Breaded, deep-fried pork cutlet served in <br> bite-sized
                            pieces and accompanied by <br> shredded cabbage.
                        </p>
                        <button type="button" id="ton"><span class="glyphicon glyphicon-shopping-cart icon-left"></span><span class="label-right"><strong>Order Now</strong></span></button>                
                    </article>
                    <div class="nav-container">
                        <center>
                            <span class="circle" ng-click="slider(1,'click')"><span class="inner one" ng-hide="one"></span></span>
                            <span class="circle" ng-click="slider(2,'click')"><span class="inner two" ng-show="two"></span></span>
                            <span class="circle" ng-click="slider(3,'click')"><span class="inner three" ng-show="three"></span></span>
                            <span class="circle" ng-click="slider(4,'click')"><span class="inner four" ng-show="four"></span></span>
                        </center>
                    </div>
                </div>        
            </section>

            <!--About us  -->
            <section class="container" id="about">
                <form class="something form" method="POST" action="./php/uploadabout.php" id="about-form" name="about-form" enctype="multipart/form-data" style="position: relative;">
                    <img src="./img/menu/sushi.jpg" alt="" class="bg bg-sushi">
                    <input ng-show="adminMode" type="file" name="about-file" id="about-file" class="change-bg" style="cursor: pointer;opacity: 0; position: absolute; top: 0; left: 0; right: 0; bottom: 0; width: 100%; height: 100%;">        
                </form>
                <article class="about">
                    <h1>Our Story</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima vero, repellat quibusdam voluptas architecto consectetur, illum aliquid incidunt hic corporis soluta, reiciendis. Placeat alias, quasi tenetur quis consequatur explicabo tempora commodi quas, et fuga dolor autem, perferendis? Officia enim veritatis provident, soluta perspiciatis ratione deserunt facere aperiam aliquam ullam quae at facilis nostrum rerum eveniet! Asperiores cupiditate atque accusamus natus, sequi quae nobis dolorum incidunt, iusto ipsa nihil vero alias debitis praesentium velit aliquam excepturi eos sed voluptates enim libero voluptatem deleniti laboriosam. Architecto sunt, nihil facere aperiam! Repellendus asperiores quidem officiis esse dolorum quia laboriosam illo, necessitatibus placeat tenetur! Commodi quae magnam a provident maiores consequatur, molestiae ipsum obcaecati quidem ex aut quas saepe quis! Doloremque et repellendus earum saepe, iste numquam ducimus reiciendis laborum aut reprehenderit natus sed quos sint tempora unde ut porro labore perspiciatis ratione rem, eum velit repellat dignissimos. Nihil, quia corporis! Consequuntur quis excepturi ipsa quia voluptatum. Quis sequi dignissimos laboriosam consequatur quam perspiciatis voluptatibus sit deserunt a et maxime eaque aspernatur esse, nobis amet illo aliquam corrupti natus quia laborum dolore! Quidem vero assumenda doloribus rem labore placeat necessitatibus incidunt sit enim iste. Illum inventore minus vitae maxime id, explicabo consequatur ipsam nulla.</p>
                </article>
            </section>


            <!--Menu  -->
            <section id="menu">
                <form class="form" method="POST" action="./php/uploadmenu.php" id="menu-form" name="menu-forms" enctype="multipart/form-data">
                    <div id="menu-background" class="menu-background bg" style="position: relative;">
                    <input ng-show="adminMode" name="menu-file" id="menu-file" type="file" class="change-bg" style="cursor: pointer; opacity: 0; position: absolute; top: 0; left: 0; width: 100%; height: 100%;">            
                </div>
                <article class="art-bg">
                    <h1><span>AFFORDABLE</span> PRICING</h1>
                </article>
            </section>
            <!-- <input ng-show="adminMode" type="submit" name="insert_menu" id="insertmenu" value="Update Menu" style="width: 100px;"> -->
            </form>
            
            <section class="container">
                <article class="menu-sub-title">
                    <h1 class="menu-title">Our Menu</h1>
                    <p class="menu-sub">Have some of japan's delicacies.</p>
                    <hr>
                </article>
                <div class="box-container" id="asd">
                    {{ generate()    }}
                    <div id="asds"></div>
                    <!-- <div class="box">
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
                            <h1>Chocolate Pudding</h1>
                            <p>
                            Chocolate puddings are a class of desserts with chocolate flavors. There are two main types: 
                            a boiled then chilled dessert, texturally a custard set with starch.
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

                    

                    ============================
                                DRINKS
                    ================================-->
                    <div class="box add-menu green" ng-show="adminMode"> 
                        <div class="frame food"><center><span class="glyphicon glyphicon-plus"></span></center></div>
                        <article>
                            <h1>Add Menu</h1><br>
                            <p>
                                Add menu to database.
                            </p>
                        </article> 
                        <div class="button-cart-container">
                            <button id="donburi" ng-click="showAddMenu();" class="btn btn-success" ng-click="showOrder = true">Add Menu</button>
                        </div>
                    </div>

                    <article class="menu-sub-title" id="drinks" ng-hide="admin">
                        <br>
                        <h1 class="menu-title">Drinks</h1>
                        <hr>
                    </article>
                    <!-- <div class="box">
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
                    </div> -->
                </div>
            </section>

            <!--Order  -->
            <section id="order">
                <form class="form" method="POST" action="./php/uploadorder.php" id="order-form" name="order-form" enctype="multipart/form-data">
                    <div class="order-background bg" style="position: relative;">
                        <input ng-show="adminMode" type="file" name="order-file" id="order-file" class="change-bg" style="cursor: pointer; opacity: 0; z-index: 5; position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                    </div>
                    <article>
                        <h1><span>ORDER</span> NOW</h1>
                    </article>
                </section>
            </form>

            <section class="container order" ng-hide="admin">
                <form>                
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
                            <li>
                                <div class="alert alert-danger" ng-show="notLoggedIn">
                                    <center><strong><span class="glyphicon glyphicon-remove"></span> Cannot Order! </strong> You need to login first before ordering.</center>
                                </div>
                            </li>
                            <li class="row footer" id="add-item">
                                <span class="total">Total:</span>
                                <span class="total-price">₱{{ totalPricy }}</span>
                                <input order-Preview id="order-btn" type="submit" class="order-button" ng-click="order()" value="ORDER">
                            </li>
                            <hr>
                        </ul>
                    </strong>
                </form>
            </section>
        </div>
    </div>

    <!--Contract Us  -->
    <footer id="contact">
        <div class="container">
            <p></p>Designed by <a href="https://www.facebook.com/ZeddieSantos">ISIS</a>, Copyright &copy; 2017</p>
        </div>  
    </footer>
    
</body>
</html>