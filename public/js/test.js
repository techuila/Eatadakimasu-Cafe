$(document).ready(()=>{
    
    var qty = 0;
    scrollNavFunction(true);

    /*=============================================
                        EVENTS
    =============================================*/

    $(window).on("scroll", ()=>{
        scrollNavFunction(false);
    });

    //SIGN IN FORM
    $("#sign-in").click("onclick", function(){
        document.getElementsByClassName("container-body").item(0).style = "filter: blur(10px);opacity: 0.6;background-color: black;";
    });

    // ORDER FORM 
    
    $("#curry").click("onclick", function(){
        displayFoodOrder("curry", "Curry Rice", -10);
        document.getElementsByClassName("container-body").item(0).style = "filter: blur(10px);opacity: 0.6;background-color: black;";        
    });

    $("#donburi").click("onclick", function(){
        displayFoodOrder("donburi", "Donburi", -32);
        document.getElementsByClassName("container-body").item(0).style = "filter: blur(10px);opacity: 0.6;background-color: black;";        
    });

    $("#cakey").click("onclick", function(){
        displayFoodOrder("japanesecake", "Japanese Cakey", -10);
        document.getElementsByClassName("container-body").item(0).style = "filter: blur(10px);opacity: 0.6;background-color: black;";        
    });

    $("#karaage").click("onclick", function(){
        displayFoodOrder("karaage", "Karaage", 0);
        document.getElementsByClassName("container-body").item(0).style = "filter: blur(10px);opacity: 0.6;background-color: black;";        
    });

    $("#omurice").click("onclick", function(){
        displayFoodOrder("omurice", "Omurice", -30);
        document.getElementsByClassName("container-body").item(0).style = "filter: blur(10px);opacity: 0.6;background-color: black;";        
    });

    $("#onigiri").click("onclick", function(){
        displayFoodOrder("onigiri", "Onigiri", 0);
        document.getElementsByClassName("container-body").item(0).style = "filter: blur(10px);opacity: 0.6;background-color: black;";        
    });

    $("#ramen").click("onclick", function(){
        displayFoodOrder("ramen", "Ramen", -15);
        document.getElementsByClassName("container-body").item(0).style = "filter: blur(10px);opacity: 0.6;background-color: black;";        
    });

    $("#pudding").click("onclick", function(){
        displayFoodOrder("sushi", "Pudding", 0);
        document.getElementsByClassName("container-body").item(0).style = "filter: blur(10px);opacity: 0.6;background-color: black;";        
    });

    $("#tempura").click("onclick", function(){
        displayFoodOrder("tempura", "Tempura", -50);
        document.getElementsByClassName("container-body").item(0).style = "filter: blur(10px);opacity: 0.6;background-color: black;";    
    });

    $("#tonkatsu").click("onclick", function(){
        displayFoodOrder("tonkatsu", "Curry Rice", -33);
        document.getElementsByClassName("container-body").item(0).style = "filter: blur(10px);opacity: 0.6;background-color: black;";        
    });

    $("#lipton").click("onclick", function(){
        displayFoodOrder("lipton", "Lipton Green Tea", 0);
        document.getElementsByClassName("container-body").item(0).style = "filter: blur(10px);opacity: 0.6;background-color: black;";        
    });

    $("#iced").click("onclick", function(){
        displayFoodOrder("iced", "Iced Tea", 0);
        document.getElementsByClassName("container-body").item(0).style = "filter: blur(10px);opacity: 0.6;background-color: black;";        
    });

    $("#exit-order").click("onclick", function(){
        document.getElementsByClassName("container-body").item(0).style = "filter: none; opacity: none; background-color: white;";
    });

    $("#s-exit").click("onclick", function(){
        document.getElementsByClassName("container-body").item(0).style = "filter: none; opacity: none; background-color: white;";
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
    //     document.getElementsByClassName("container-body").item(0).style = "filter: blur(10px);opacity: 0.6;background-color: black;";
    // }

    // function cancelFood($element){
    //     console.log('asda');
    //     document.getElementById($element).style = "display: none;";            
    //     document.getElementsByClassName("container-body").item(0).style = "filter: none; opacity: none; background-color: white;";
    // }

    function scrollNavFunction(onload){
        var aboutLoc = $('#about').offset().top;
        var menuLoc = $('#menu').offset().top;
        var orderLoc = $('#order').offset().top;
        var contactLoc = $('#contact').offset().top;
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
});
(function() {
    'use strict';
    var totalPrice = 0;
    var c = 0;
    var app = angular.module("myApp",['ngAnimate']);
    app.controller('myCtrl', function($scope){
        $scope.showActions = [];
        $scope.totalPricy = totalPrice;
        $scope.addPrice = function(){
            totalPrice = ( parseFloat(totalPrice) + (parseFloat($('#form-qty').text() * 30))).toFixed(2);
            $scope.totalPricy = totalPrice;
            $scope.showActions[c] = true;
        };
        $scope.clickAction = function(){
            // $scope.showActions = true;
        };
    });
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
