var app = angular.module('myApp', []);
app.controller('myController', function($scope){
    $scope.name = 'sadad';
});

console.log(app);

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
        blur_bg('s-in');
    });

    // ORDER FORM   

    $("#curry").click("onclick", function(){
        displayFoodOrder("curry", "Curry Rice");
    });

    $("#donburi").click("onclick", function(){
        displayFoodOrder("donburi", "Donburi");
    });

    $("#cakey").click("onclick", function(){
        displayFoodOrder("japanesecake", "Japanese Cakey");
    });

    $("#karaage").click("onclick", function(){
        displayFoodOrder("karaage", "Karaage");
    });

    $("#omurice").click("onclick", function(){
        displayFoodOrder("omurice", "Omurice");
    });

    $("#onigiri").click("onclick", function(){
        displayFoodOrder("onigiri", "Onigiri");
    });

    $("#ramen").click("onclick", function(){
        displayFoodOrder("ramen", "Ramen");
    });

    $("#pudding").click("onclick", function(){
        displayFoodOrder("sushi", "Pudding");
    });

    $("#tempura").click("onclick", function(){
        displayFoodOrder("tempura", "Tempura");
    });

    $("#tonkatsu").click("onclick", function(){
        displayFoodOrder("tonkatsu", "Curry Rice");
    });

    $("#lipton").click("onclick", function(){
        displayFoodOrder("lipton", "Lipton Green Tea");
    });

    $("#iced").click("onclick", function(){
        displayFoodOrder("iced", "Iced Tea");
    });

    $("#exit-order").click("onclick", function(){
        cancelFood("food-order","s-in");
    });

    $(".exit").click("onclick", function(){
        cancelFood("food-order","s-in");
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

    function displayFoodOrder(food, foodname){
        console.log("display food order clicked");
        document.getElementsByClassName("food").item(0).style.backgroundImage = "url('./img/menu/" + food + ".jpg')";
        document.getElementsByClassName("food-name").item(0).innerHTML = foodname;
        blur_bg("food-order");
    }

    function blur_bg($element){
        document.getElementById($element).style = "display: initial;";
        document.getElementsByClassName("container-body").item(0).style = "filter: blur(10px);opacity: 0.6;background-color: black;";
    }

    function cancelFood($element,$element2){
        console.log('asda');
        document.getElementById($element).style = "display: none;";            
        document.getElementById($element2).style = "display: none;";
        document.getElementsByClassName("container-body").item(0).style = "filter: none; opacity: none; background-color: white;";
    }

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