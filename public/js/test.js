$(document).ready(()=>{
    var aboutLoc = $('#about').offset().top;
    var menuLoc = $('#menu').offset().top;
    var orderLoc = $('#order').offset().top;
    var contactLoc = $('#contact').offset().top;
    var body = $('html,body');
    var qty = 0;

    scrollNavFunction(true);
    // getCustomer();

    /*=============================================
                NAVIGATION ANIMATION
    =============================================*/
    $('#nav-home').click(function(){
        body.stop().animate({scrollTop:0},800,'swing');
    });
    $('#nav-about').click(function(){
        body.stop().animate({scrollTop: aboutLoc + 20},800,'swing');
    });
    $('#nav-menu').click(function(){
        body.stop().animate({scrollTop: menuLoc+ 20},800,'swing');
    });
    $('#nav-order').click(function(){
        body.stop().animate({scrollTop: orderLoc+ 20},900,'swing');
    });
    $('#nav-contact').click(function(){
        body.stop().animate({scrollTop: contactLoc+ 20},1000,'swing');
    });

    /*=============================================
                        EVENTS
    =============================================*/


    $(window).on("scroll", ()=>{
        scrollNavFunction(false);
    });

    //SIGN IN FORM
    $("#sign-in").click("onclick", function(){
        document.getElementsByClassName("container-body").item(0).style = "filter: blur(10px);opacity: 0.6;";
    });

    // $("#login").on('click',()=>{
    //     var contents = $("#form").serialize();
    //     alert(contents);
    //     getCustomer(contents);
    // });

    // ORDER FORM 
    
    $("#curry").click("onclick", function(){
        displayFoodOrder("curry", "Curry Rice", -10);
        document.getElementsByClassName("container-body").item(0).style = "filter: blur(10px);opacity: 0.6;";        
    });

    $("#donburi").click("onclick", function(){
        displayFoodOrder("donburi", "Donburi", -32);
        document.getElementsByClassName("container-body").item(0).style = "filter: blur(10px);opacity: 0.6;";        
    });

    $("#cakey").click("onclick", function(){
        displayFoodOrder("japanesecake", "Japanese Cakey", -10);
        document.getElementsByClassName("container-body").item(0).style = "filter: blur(10px);opacity: 0.6;";        
    });

    $("#karaage").click("onclick", function(){
        displayFoodOrder("karaage", "Karaage", 0);
        document.getElementsByClassName("container-body").item(0).style = "filter: blur(10px);opacity: 0.6;";        
    });

    $("#omurice").click("onclick", function(){
        displayFoodOrder("omurice", "Omurice", -30);
        document.getElementsByClassName("container-body").item(0).style = "filter: blur(10px);opacity: 0.6;";        
    });

    $("#onigiri").click("onclick", function(){
        displayFoodOrder("onigiri", "Onigiri", 0);
        document.getElementsByClassName("container-body").item(0).style = "filter: blur(10px);opacity: 0.6;";        
    });

    $("#ramen").click("onclick", function(){
        displayFoodOrder("ramen", "Ramen", -15);
        document.getElementsByClassName("container-body").item(0).style = "filter: blur(10px);opacity: 0.6;";        
    });

    $("#pudding").click("onclick", function(){
        displayFoodOrder("sushi", "Pudding", 0);
        document.getElementsByClassName("container-body").item(0).style = "filter: blur(10px);opacity: 0.6;";        
    });

    $("#tempura").click("onclick", function(){
        displayFoodOrder("tempura", "Tempura", -50);
        document.getElementsByClassName("container-body").item(0).style = "filter: blur(10px);opacity: 0.6;";    
    });

    $("#tonkatsu").click("onclick", function(){
        displayFoodOrder("tonkatsu", "Curry Rice", -33);
        document.getElementsByClassName("container-body").item(0).style = "filter: blur(10px);opacity: 0.6;";        
    });

    $("#lipton").click("onclick", function(){
        displayFoodOrder("lipton", "Lipton Green Tea", 0);
        document.getElementsByClassName("container-body").item(0).style = "filter: blur(10px);opacity: 0.6;";        
    });

    $("#iced").click("onclick", function(){
        displayFoodOrder("iced", "Iced Tea", 0);
        document.getElementsByClassName("container-body").item(0).style = "filter: blur(10px);opacity: 0.6;";        
    });

    $("#add-to-cart").click("onclick", function(){
        document.getElementsByClassName("container-body").item(0).style = "filter: none; opacity: none; background-color: white;";   
    });


    $(".minus").click(()=>{
        if(qty != 0){   
            qty -= 1;
            console.log(qty);
            document.getElementById("form-qty").innerHTML = qty;
        }
    });

    $(".plus").click(()=>{
        qty += 1;
        console.log(qty);
        document.getElementById("form-qty").innerHTML = qty;
    });

    /*=============================================
                        FORM ORDER   
    =============================================*/

    $(".guest").click("onclick", function(){
        document.getElementsByClassName('button-container').item(0).style = "display: none;";
        document.getElementsByClassName('form-container').item(0).style = "display: initial; animation: come-out 0.5s ease forwards;";
        document.getElementById('title-form').style = "display: block; animation: come-out 0.3s forwards;";
        document.getElementById('sub-title').style = "display: initial; animation: come-out 0.3s forwards;";
    });


    /*=============================================
                        FUNCTIONS   
    =============================================*/

    function displayFoodOrder(food, foodname, x_pos){
        document.getElementsByClassName("food").item(0).style = "background-image: url('./img/menu/" + food + ".jpg'); background-position-x: "+ x_pos + "px;";
        document.getElementsByClassName("food-name").item(0).innerHTML = foodname;
    }

    // function blur_bg($element){
    //     document.getElementById($element).style = "display: initial;";
    //     document.getElementsByClassName("container-body").item(0).style = "filter: blur(10px);opacity: 0.6;";
    // }

    // function cancelFood($element){
    //     console.log('asda');
    //     document.getElementById($element).style = "display: none;";            
    //     document.getElementsByClassName("container-body").item(0).style = "filter: none; opacity: none; background-color: white;";
    // }

    function scrollNavFunction(onload){
        var navbar = document.getElementsByTagName('header').item(0);

        /*=============================================
             NAVIGATION BAR CHANGE STYLE ON SCROLL  
        =============================================*/
        if(document.body.scrollTop > 30 || document.documentElement.scrollTop > 30){
            navbar.className = "animate-scroll-bottom";
        } else{ 
            if(onload)
                navbar.className = "";
            else
                navbar.className = "animate-scroll-top";
        }

        /*=============================================
                NAVIGATION ON HOME FADE IN COLOR   
        =============================================*/

        if((document.body.scrollTop > 0 && document.body.scrollTop < aboutLoc) || 
        document.documentElement.scrollTop > 0 && document.documentElement.scrollTop < aboutLoc ||
            document.body.scrollTop == 0 && document.documentElement.scrollTop == 0){
            if($('.Hhome').css('color') != '#00a8ff'){
                document.getElementsByClassName('home').item(0).style = "color: #00a8ff; animation: in-loc-nav 0.5s forwards;";
                
            }
        }else{
            document.getElementsByClassName('home').item(0).style = "animation: out-loc-nav 0.5s forwards;";
        }

        /*=============================================
                NAVIGATION ON ABOUT FADE IN COLOR   
        =============================================*/
        if((document.body.scrollTop > aboutLoc && document.body.scrollTop < menuLoc) || 
        document.documentElement.scrollTop > aboutLoc && document.documentElement.scrollTop < menuLoc){
            if($('.about').css('color') != '#00a8ff'){
                document.getElementsByClassName('about').item(0).style = "color: #00a8ff; animation: in-loc-nav 0.5s forwards;";
                
            }
        }else{
                document.getElementsByClassName('about').item(0).style = "animation: out-loc-nav 0.5s forwards;";
        }

        /*=============================================
                NAVIGATION ON MENU FADE IN COLOR   
        =============================================*/
        if((document.body.scrollTop > menuLoc && document.body.scrollTop < orderLoc) || 
        document.documentElement.scrollTop > menuLoc && document.documentElement.scrollTop < orderLoc){
            if($('.about').css('color') != '#00a8ff'){
                document.getElementsByClassName('menu').item(0).style = "color: #00a8ff; animation: in-loc-nav 0.5s forwards;";
                
            }
        }else{
                document.getElementsByClassName('menu').item(0).style = "animation: out-loc-nav 0.5s forwards;";
        }

       /*=============================================
                NAVIGATION ON ORDER FADE IN COLOR   
        =============================================*/
        if((document.body.scrollTop > orderLoc && document.body.scrollTop < contactLoc) || 
        document.documentElement.scrollTop > orderLoc && document.documentElement.scrollTop < contactLoc){
            if($('.about').css('color') != '#00a8ff'){
                document.getElementsByClassName('order').item(0).style = "color: #00a8ff; animation: in-loc-nav 0.5s forwards;";
                
            }
        }else{
                document.getElementsByClassName('order').item(0).style = "animation: out-loc-nav 0.5s forwards;";
        }

        /*=============================================
                NAVIGATION ON CONTACT FADE IN CVOLOR   
        =============================================*/
        if((document.body.scrollTop > contactLoc) || 
        document.documentElement.scrollTop > contactLoc ){
            if($('.about').css('color') != '#00a8ff'){
                document.getElementsByClassName('contact').item(0).style = "color: #00a8ff; animation: in-loc-nav 0.5s forwards;";
                
            }
        }else{
                document.getElementsByClassName('contact').item(0).style = "animation: out-loc-nav 0.5s forwards;";
        }
    }

    /*=============================================
                PHP TO JAVASCRIPT
    =============================================*/
    // function getCustomer(contents){
    //     $.ajax({
    //         url: './php/loginserv.php',
    //         dataType: 'json',
    //         type: 'post',
    //         data: contents,
    //         cache: true,
    //         success: function(data){
    //             user = data.username;
    //             alert("data: " + data.username);
    //         }
    //     });
    // }
});

(function() {
    'use strict';
    var totalPrice = 0;
    var c = 0;
    var guest = false;
    var complete1 = false, complete2 = false;    
    var app = angular.module("myApp",['ngAnimate']);
    app.controller('myCtrl', function($scope){
        $scope.showActions = [];
        $scope.totalPricy = totalPrice;
        $scope.navLoc = function(loc, clicked){
            if(loc == 1 && clicked == 'top' && complete1 == false){
                $('.nav-1').css({'border-color': '#2ecc71', 'color' : '#2ecc71'});                
                $('.nav-2').css({'border-color': '#fff', 'color' : '#3498db'});
                $('.nav-3').css({'border-color': '#fff', 'color' : '#3498db'});
            }else if(loc == 2){
                if(clicked == 'top' && complete2 == false){
                    complete1 == false? $('.nav-1').css({'border-color': '#fff', 'color' : '#3498db'}): null;                  
                    $('.nav-3').css({'border-color': '#fff', 'color' : '#3498db'});                                      
                    $('.nav-2').css({'border-color': '#2ecc71', 'color' : '#2ecc71'});                  
                }else if(clicked == 'btn'){
                    $('.nav-1').css({'background-color': '#2ecc71', 'color' : '#fff'});                                      
                    $('.nav-2').css({'border-color': '#2ecc71', 'color' : '#2ecc71'});
                    complete1 = true;
                }
            }else if(loc == 3){
                if(clicked == 'top'){
                    complete1 == false? $('.nav-1').css({'border-color': '#fff', 'color' : '#3498db'}): null;                  
                    complete2 == false? $('.nav-2').css({'border-color': '#fff', 'color' : '#3498db'}): null;  
                    $('.nav-3').css({'border-color': '#2ecc71', 'color' : '#2ecc71'});                  
                }else{
                    $('.nav-2').css({'background-color': '#2ecc71', 'color' : '#fff'});                                      
                    $('.nav-3').css({'border-color': '#2ecc71', 'color' : '#2ecc71'});                                      
                    complete2 = true;
                }
            }
        };
        $scope.addPrice = function(){
            totalPrice = ( parseFloat(totalPrice) + (parseFloat($('#form-qty').text() * 30))).toFixed(2);
            $scope.totalPricy = totalPrice;
            $scope.showActions[c] = true;
        };
        $scope.sign_guest = function(){
            $scope.loginGuest = true;
            $scope.loginSuccess = false;
            $scope.loginFailed = false;
            $scope.isGuest = true;
            guest = true;
            userSignedIn();
            setTimeout(function(){
                backToMain();
                $scope.$apply();
            }, 1800);
        };
        $scope.requireLogin = function(){
            if(localStorage.getItem('success') == 'true'||
            guest == true){ $scope.showOrder =  true; }
            else{ $scope.showIn = true; }
        };
        $scope.checkUser = function(){
            userSignedIn();
        }
        $scope.exitForm = function(){
            backToMain();
            resetNavColor();
        }
        function backToMain(){
            $('#bimbi').css({'filter': 'none', 'opacity': '1'});
            $scope.showIn = false;
        }
        $scope.logout = function(){
            guest = false;
            localStorage.clear();
        }
        
        //PHP TO JAVASCRIPT
        $scope.sign_in = function(){
            $('#form').submit(()=>{
                return false;
            });
            var contents = $("#form").serialize();
            $.ajax({
                url: './php/loginserv.php',
                dataType: 'json',
                type: 'post',
                data: contents,
                cache: false,
                success: function(data){
                    if(data.success == true){
                        localStorage.setItem('success', data.success);
                        localStorage.setItem('firstname', data.Firstname);
                        $scope.loginSuccess = true;
                        $scope.loginFailed = false;
                        $scope.loginGuest = false;
                        $scope.welcome = " Welcome " + data.Firstname + " " + data.Lastname + ".";
                        userSignedIn();  
                        $scope.$apply();
                        setTimeout(function(){
                            backToMain();
                            $scope.$apply();
                        }, 1800);
                    }else{
                        $scope.loginSuccess = false;
                        $scope.loginFailed = true;
                        $scope.loginGuest = false;
                        $scope.$apply();
                    }
                },
                error: function(a,b,c){
                    console.log("Error: " + a + " " + b + " " + c);
                }
            }); 
        };
        $scope.saveCustInfo = function(){
            var contents = $('#register').serialize();
            $.ajax({
                url: './php.registerserv.php',
                dataType: 'json',
                type: 'post',
                data: contents,
                cache: false,
                success: function(data){
                    console.log(data);
                },
                error: function(a,b,c){
                    console.log('Error: ' + a + " " + b + " " + c);
                }
            });
        };
        $scope.order = function(){
            if(localStorage.getItem('success') == true){
                
            }else if(guest == true){
                showSignIn();
            }else{

            }
        };
        

        //FUNCTIONS
        function resetNavColor(){
            $('.nav-form').css({'border-color': '#fff', 'background-color': '#fff', 'color' : '#3498db'});                            
            $('.nav-1').css({'border-color': '#2ecc71', 'background-color': '#fff', 'color' : '#2ecc71'});   
            complete1 = false;
            complete2 = false;                                   
        }
        function showSignIn(){
            $scope.showRegister = true;
            $scope.showIn = true;          
            $scope.showBill = false;
            $scope.showBack = false;  
            $scope.showLogin = true;
            document.getElementsByClassName("container-body").item(0).style = "filter: blur(10px);opacity: 0.6;";        
        }
        function userSignedIn(){
            if(localStorage.getItem('success') == 'true'){
                $scope.user = localStorage.getItem('firstname');
                $scope.signedIn = true;
            }else if(guest == true){
                $scope.signedIn = true;                
                $scope.user = 'Guest';
            }else{
                $scope.signedIn = false;
            }
        }
    });

    /*=============================================
                    APP DIRECTIVES   
    =============================================*/
    app.directive('addToCart', function($compile){
        return{
            link: function(li, element){
                element.bind('click', function(){
                    var newItem = $compile('<li class="row items"><span class="qty">'+ $('#form-qty').text() +'</span><span class="item-name">'+ $('.food-name').text() +'</span><a href="" class="action" ng-click="clickAction(); showActions['+ ++c +'] = !showActions['+ c +']"></a><span class="price">₱'+ ($('#form-qty').text() * 30).toFixed(2) +'</span><div class="action-item" ng-hide="showActions['+ c +']"><a href=""><span class="glyphicon glyphicon-pencil"></span></a><a href=""><span class="glyphicon glyphicon-remove"></span></a></div></li>')(li)
                    $("#cart").children('#add-item').prev().after(newItem);
                });
            }
        }
    });  
})();
