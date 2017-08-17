<!DOCTYPE>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.min.css">
    <script src="./node_modules/jquery/dist/jquery.js"></script>
    <script src="./node_modules/angular/angular.min.js"></script>
    <script src="./js/test.js"></script>
    <script src="./js/app.js"></script>
    <title>Eatadakimasu Cafe | Welcome</title>

    <script>
        var app = angular.module('app', []);


        app.directive('addToCart', function($compile){
            return{
                link: function(li, element){
                    element.bind("click", function(){
                        var foodname = document.getElementsByClassName("food-name").item(0).innerHTML;        
                        var qty = document.getElementById("qty").value;
                        var price = document.getElementById("qty").value * 70;
                        var bod = angular.element('#add-to-cart');
                        var childNode = $compile('<tr><th colspan="2"><input type="hidden" name="' + 'fname[]' + '" value="' + foodname + '">'+ foodname + '</th>'+
                                    '<td><input type="hidden" name="' + 'qty[]' + '" value="' + qty + '">'+ qty + '</td>' + 
                                    '<td><input type="hidden" name="' + 'price[]' + '" value="' + price + '">'+ price + '</td></tr>')(li)
                        bod.parent().append(childNode);
                    });
                }
            }
        });
    </script>
</head>

<body ng-app="app">
    <div class="containers" id="food-order">
        <div class="exit" id="exit-order"></div>
        <center>
            <div class="frame-foods">
                <div class="foods"></div>
            </div>
            <p class="food-name">Donburi</p>
            <p class="qty-label">Quantity</p>
            <input type="number" ng-model="boom" name="quantity" value="" class="qty" id="qty"><br> 
            <p>Special instructions:</p>
            <textarea rows="8" cols="40" name="instructions"></textarea><br><br>
            <input type="file"><br><br>
            <input type="submit" class="okay" value="Add to Cart" id="addtocart" add-To-Cart>
        </center>
    </div>
   
    <div class="container" id="container-body">
        <header>
            <span class="title">Eatadakimasu! Cafe</span>
            <nav>
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">MENU</a></li>
                    <li><a href="#">ORDER</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
            </nav>
        </header>

        <div class="pimg1 bg">
            <div class="mainCapbg">
                <p class="main Cap">Every Dish is a Specialty</p>
                <p class="mainan Cap">A UNIQUE EXPERIENCE IN JAPAN DINING</p>
            </div>
        </div>

        <div class="pimg2 bg">
            <div class="container-story">
                <p class="sub Cap">Our Story</p>
                <p class="subnan Cap">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam ducimus tenetur praesentium suscipit asperiores quisquam beatae architecto modi voluptate, totam omnis illo sequi rem. Nostrum possimus, sed minima illum assumenda voluptate accusamus eum quia
                    veritatis optio facere voluptatem, itaque esse quo accusantium eius nulla blanditiis? Repudiandae adipisci, asperiores voluptatem perspiciatis ex sit rerum aut eaque! Consectetur repellendus voluptas nisi corporis corrupti quis accusantium
                    architecto odit, enim deleniti, cum cumque iusto autem doloribus natus officiis eos saepe earum temporibus omnis explicabo quisquam voluptates soluta quia. Harum nam sit repellat cupiditate eos minima nulla cum obcaecati consectetur
                    temporibus iure, minus repellendus exercitationem dolorum ducimus ratione tempore praesentium, consequatur ipsum similique facere corporis. Fuga assumenda adipisci harum voluptatem molestiae, non ad rerum cumque quia, modi asperiores
                    dicta blanditiis saepe! Obcaecati ad quia, delectus, earum velit fugit laudantium. Dolorem iste sint deserunt numquam suscipit modi dolore repudiandae, at obcaecati consequuntur eum temporibus eligendi ut, neque rem nihil, sit quasi
                    id aliquam necessitatibus autem? Beatae, expedita, eum. Nihil, laudantium. Reiciendis aspernatur natus, magnam voluptas nisi error dolores quidem fugiat placeat, repudiandae voluptatum! Perferendis quo dolorum magni alias. Vitae similique
                    libero optio ipsam, minima labore sapiente molestiae, quidem, natus cumque doloremque nobis deserunt vero maiores ipsa.
                </p>
            </div>
        </div>

        <div class="pimg3 bg">
            <p class="sub cap">Menu</p>
            <div class="container-menu">

                <!--1 CURRY RICE  -->

                <div class="container-food">
                    <div class="frame foods">
                        <div class="food curry"></div>
                        <center>
                            <span class="food-desc">
                                Curry sauce is served on top of cooked rice to make
                                curry rice.
                            </span>
                            <div class="click-food" id="curry">
                                <span>CLICK TO ORDER</span>
                            </div>
                        </center>
                    </div>
                    <center>
                        <p>Curry Rice</p>
                    </center>
                </div>

                <!--2 DONBURI  -->

                <div class="container-food">
                    <div class="frame foods">
                        <div class="food donburi"></div>
                        <center>
                            <span class="food-desc">
                                Fish, meat, vegetables or other ingredients simmered together and served over rice.
                            </span>
                            <div class="click-food" id="donburi">
                                <span>CLICK TO ORDER</span>
                            </div>
                        </center>
                    </div>
                    <center>
                        <p>Donburi</p>
                    </center>
                </div>


                <!--3 JAPANESE CAKEY  -->

                <div class="container-food">
                    <div class="frame foods">
                        <div class="food cakey"></div>
                        <center>
                            <span class="food-desc">
                                Japanese sponge cake made of sugar, flour, eggs, and starch syrup. 
                            </span>
                            <div class="click-food" id="japanese">
                                <span>CLICK TO ORDER</span>
                            </div>
                        </center>
                    </div>
                    <center>
                        <p>Japanese Cakey</p>
                    </center>
                </div>

                <!--4 KARAAGEEEEE  -->

                <div class="container-food">
                    <div class="frame foods">
                        <div class="food karaage"></div>
                        <center>
                            <span class="food-desc">
                                Seasoned with garlic and ginger along with soy sauce, 
                                coated lightly with flour, and deep fried.
                            </span>
                            <div class="click-food" id="karaage">
                                <span>CLICK TO ORDER</span>
                            </div>
                        </center>
                    </div>
                    <center>
                        <p>Karaage</p>
                    </center>
                </div>

                <!--5 OMURICEUUUUUUU!  -->

                <div class="container-food">
                    <div class="frame foods">
                        <div class="food omurice"></div>
                        <center>
                            <span class="food-desc">
                                Omelette made with fried 
                                rice and usually topped with ketchup.
                            </span>
                            <div class="click-food" id="omurice">
                                <span>CLICK TO ORDER</span>
                            </div>
                        </center>
                    </div>
                    <center>
                        <p>Omurice</p>
                    </center>
                </div>

                <!--6 RAMEEEEEN OR LAAAMEEEEEN!  -->

                <div class="container-food">
                    <div class="frame foods">
                        <div class="food ramen"></div>
                        <center>
                            <span class="food-desc">
                                Yellowish broth made with plenty of 
                                salt and any combination of chicken, vegetables, and seaweed.
                            </span>
                            <div class="click-food" id="ramen">
                                <span>CLICK TO ORDER</span>
                            </div>
                        </center>
                    </div>
                    <center>
                        <p>Ramen</p>
                    </center>
                </div>

                <!--7 SUSHIIII  -->

                <div class="container-food">
                    <div class="frame foods">
                        <div class="food sushi"></div>
                        <center>
                            <span class="food-desc">
                                Cold cooked rice shaped in small cakes and topped with 
                                strips of raw fish, and sliced into pieces.
                            </span>
                            <div class="click-food" id="sushi">
                                <span>CLICK TO ORDER</span>
                            </div>
                        </center>
                    </div>
                    <center>
                        <p>Sushi</p>
                    </center>
                </div>

                <!--8 TONKATSU NO JUTSU!  -->

                <div class="container-food">
                    <div class="frame foods">
                        <div class="food tonkatsu"></div>
                        <center>
                            <span class="food-desc">
                                Breaded, deep-fried pork cutlet served in bite-sized 
                                pieces and accompanied by shredded cabbage.
                            </span>
                            <div class="click-food" id="tonkatsu">
                                <span>CLICK TO ORDER</span>
                            </div>
                        </center>
                    </div>
                    <center>
                        <p>Tonkatsu</p>
                    </center>
                </div>

                <!--9 TEMPURA MASARAP MALINAMNAN!!  -->

                <div class="container-food">
                    <div class="frame foods">
                        <div class="food tempura"></div>
                        <center>
                            <span class="food-desc">
                                Seafood that have been battered and deep fried.
                                Accompanied by shredded cabbage and sauce.
                            </span>
                            <div class="click-food" id="tempura">
                                <span>CLICK TO ORDER</span>
                            </div>
                        </center>
                    </div>
                    <center>
                        <p>Tempura</p>
                    </center>
                </div>

                <!--10 ONIGIRI (ZORO SKILL)  -->

                <div class="container-food">
                    <div class="frame foods">
                        <div class="food onigiri"></div>
                        <center>
                            <span class="food-desc">
                                Rice formed into triangular or oval shapes and usually wrapped in nori (seaweed).
                            </span>
                            <div class="click-food" id="onigiri">
                                <span>CLICK TO ORDER</span>
                            </div>
                        </center>
                    </div>
                    <center>
                        <p>Onigiri</p>
                    </center>
                </div>

            </div>
        </div>

    <!--ORDER SECTION  -->
        <div class="pimg4 bg">
            <p class="sub cap">Order</p>
            <div class="container-order">


                <div class="left">

                    <div class="container-food">

                        <!--1 CURRY RRICE  -->
                        <div class="foodspan">
                            <div class="frame order">
                                <div class="food add" id="add-curry"></div>
                            </div>
                            <span>Curry Rice  • • • • • • • • • • • • • • </span><span class="price">P80</span>
                        </div>

                        <!--2 DONBURI  -->
                        <div class="foodspan">
                            <div class="frame order">
                                <div class="food add" id="add-donburi"></div>
                            </div>
                            <span>Donburi  • • • • • • • • • • • • • • • </span><span class="price">P70</span>
                        </div>

                        <!--3 JAPANESE CAKEY -->
                        <div class="foodspan">
                            <div class="frame order">
                                <div class="food add" id="add-japanese"></div>
                            </div>
                            <span>Japanese Cakey  • • • • • • • • • • P30</span>
                        </div>

                        <!--4 KARAAGE -->
                        <div class="foodspan">
                            <div class="frame order">
                                <div class="food add" id="add-karaage"></div>
                            </div>
                            <span>Karaage  • • • • • • • • • • • • • P70</span>
                        </div>

                        <!--5 OMURICE -->
                        <div class="foodspan">
                            <div class="frame order">
                                <div class="food add" id="add-omurice"></div>
                            </div>
                            <span>Omurice  • • • • • • • • • • • • • P40</span>
                        </div>

                        <!--6 RAMEN -->
                        <div class="foodspan">
                            <div class="frame order">
                                <div class="food add" id="add-ramen"></div>
                            </div>
                            <span>Ramen  • • • • • • • • • • • • • P80</span>
                        </div>

                        <!--7 SUSHII -->
                        <div class="foodspan">
                            <div class="frame order">
                                <div class="food add" id="add-sushi"></div>
                            </div>
                            <span>Sushi  • • • • • • • • • • • • • P200</span>
                        </div>

                        <!--8 TONKATSU -->
                        <div class="foodspan">
                            <div class="frame order">
                                <div class="food add" id="add-tonkatsu"></div>
                            </div>
                            <span>Tonkatsu  • • • • • • • • • • • • • P100</span>
                        </div>

                        <!--9 TEMPURA -->
                        <div class="foodspan">
                            <div class="frame order">
                                <div class="food add" id="add-tempura"></div>
                            </div>
                            <span>Tempura  • • • • • • • • • • • • • P50</span>
                        </div>

                        <!--10 ONIGIRI -->
                        <div class="foodspan">
                            <div class="frame order">
                                <div class="food add" id="add-onigiri"></div>
                            </div>
                            <span>Onigiri  • • • • • • • • • • • • • P30</span>
                        </div>

                    </div>
                </div>

                <div class="right">
                    <center>
                        <!-- <form action="test.php" target="_blank" method="post"> -->
                        <table id="cart-table" border="2">
                            <thead >
                                <th colspan="2">Food Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                            </thead>
                            <tbody id="add-to-cart">
                            </tbody>
                        </table>
                        <div class="actions-container">
                            <input type="submit" class="okay" id="checkout" value="Checkout"> </div>
                        <!-- </form> -->
                    </center>
                </div>

            </div>
        </div>

        <footer>
        </footer>
</body>

</html>