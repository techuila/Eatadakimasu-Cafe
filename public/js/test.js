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
    $('#temp').click(function(){
        body.stop().animate({scrollTop: menuLoc+ 20},800,'swing');                
    });
    $('#pud').click(function(){
        body.stop().animate({scrollTop: menuLoc+ 20},800,'swing');                
    });
    $('#ton').click(function(){
        body.stop().animate({scrollTop: menuLoc+ 20},800,'swing');        
    });

    //disregard special characters in first-name
    $('#first-name').on('keypress', function (event) {
        var regex = new RegExp("^[a-zA-Z0-9]+$");
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
            $("#errmsg").html("Characters Only").show().fadeOut("slow");
                   return false;
           event.preventDefault();
           return false;
        }
    });

    //disregard digits in first-name
    $("#first-name").keypress(function (e) {
        if (e.which > 48 && e.which < 57){
        $("#errmsg").html("Characters Only").show().fadeOut("slow");
            return false;
        e.preventDefault();
        return false;
        }
    });

    //disregard special characters in last-name
    $('#last-name').on('keypress', function (event) {
        var regex = new RegExp("^[a-zA-Z0-9]+$");
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
            $("#errmsg1").html("Characters Only").show().fadeOut("slow");
                   return false;
           event.preventDefault();
           return false;
        }
    });

    //disregard digits in last-name
    $("#last-name").keypress(function (e) {
        if (e.which > 48 && e.which < 57){
        $("#errmsg1").html("Characters Only").show().fadeOut("slow");
            return false;
        e.preventDefault();
        return false;
        }
    });

    //disregard characters and special characters in day
    $('#day').keypress(function (e) {
        //if the letter is not digit then display error and don't type anything
        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
           //display error message
           $("#errmsg2").html("Digits Only").show().fadeOut("slow");
                  return false;
          }
      });

    //disregard characters and special characters in year
    $('#year').keypress(function (e) {
        //if the letter is not digit then display error and don't type anything
        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
           //display error message
           $("#errmsg3").html("Digits Only").show().fadeOut("slow");
                  return false;
          }
      });

        //disregard special characters in barangay
    $('#barangay').on('keypress', function (event) {
        var regex = new RegExp("^[a-zA-Z0-9]+$");
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
            $("#errmsg4").html("Characters Only").show().fadeOut("slow");
                   return false;
           event.preventDefault();
           return false;
        }
    });

    //disregard digits in barangay
    $("#barangay").keypress(function (e) {
        if (e.which > 48 && e.which < 57){
        $("#errmsg4").html("Characters Only").show().fadeOut("slow");
            return false;
        e.preventDefault();
        return false;
        }
    });

    //disregard special characters but allow spaces in street
    $('#street').on('keypress', function (event) {
        var regex = new RegExp("^[0-9a-zA-Z \b]+$");
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
            $("#errmsg5").html("Characters Only").show().fadeOut("slow");
                   return false;
           event.preventDefault();
           return false;
        }
    });

     //disregard characters and special characters in house no
     $('#h-no').keypress(function (e) {
        //if the letter is not digit then display error and don't type anything
        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
           //display error message
           $("#errmsg6").html("Digits Only").show().fadeOut("slow");
                  return false;
          }
      });

      //disregard characters and special characters in mobile no
     $('#mobile').keypress(function (e) {
        //if the letter is not digit then display error and don't type anything
        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
           //display error message
           $("#errmsg7").html("Digits Only").show().fadeOut("slow");
                  return false;
          }
      });

      //disregard characters and special characters in money change
     $('#change').keypress(function (e) {
        //if the letter is not digit then display error and don't type anything
        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
           //display error message
           $("#errmsg8").html("Digits Only").show().fadeOut("slow");
                  return false;
          }
      });

      //disregard characters and special characters in credit card number
     $('#c-num').keypress(function (e) {
        //if the letter is not digit then display error and don't type anything
        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
           //display error message
           $("#errmsg9").html("Digits Only").show().fadeOut("slow");
                  return false;
          }
      });

        //disregard characters and special characters in security code
     $('#s-code').keypress(function (e) {
        //if the letter is not digit then display error and don't type anything
        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
           //display error message
           $("#errmsg10").html("Digits Only").show().fadeOut("slow");
                  return false;
          }
      });
    

    //menu-file click
    $('#menu-form').submit(function(){  
        var image_name = $('#menu-file').val();  
        if(image_name == '')  
        {  
             alert("Please Select Image");  
             return false;  
        }  
        else  
        {  
             var extension = $('#menu-file').val().split('.').pop().toLowerCase();  
             if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
             {  
                  alert('Invalid Image File');  
                  $('#menu-file').val('');  
                  return false;  
             }  
        }  
   });  

   //order-file click
   $('#order-form').submit(function(){  
    var image_name = $('#order-file').val();  
    if(image_name == '')  
    {  
         alert("Please Select Image");  
         return false;  
    }  
    else  
    {  
         var extension = $('#order-file').val().split('.').pop().toLowerCase();  
         if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
         {  
              alert('Invalid Image File');  
              $('#order-file').val('');  
              return false;  
         }  
    }  
});  

    //about-file click
    $('#about-form').submit(function(){  
        var image_name = $('#about-file').val();  
        if(image_name == '')  
        {  
            alert("Please Select Image");  
            return false;  
        }  
        else  
        {  
            var extension = $('#about-file').val().split('.').pop().toLowerCase();  
            if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
            {  
                alert('Invalid Image File');  
                $('#about-file').val('');  
                return false;  
            }  
        }  
    });  

    //navigation-file click
    $('#navigation-form').submit(function(){  
        var image_name = $('#navigation-file').val();  
        if(image_name == '')  
        {  
             alert("Please Select Image");  
             return false;  
        }  
        else  
        {  
             var extension = $('#navigation-file').val().split('.').pop().toLowerCase();  
             if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
             {  
                  alert('Invalid Image File');  
                  $('#navigation-file').val('');  
                  return false;  
             }  
        }  
   });  

    /*=============================================
                        EVENTS
    =============================================*/

    $('#menu-file').change(function(){
        $('#menu-form').submit();
    //     // var f = $('#menu-file').val();
    //     // f = f.replace(/.*[\/\\]/, '');
    //     // var file ="noriel="+f;
    //     // console.log(file);
    //     // $.ajax({
    //     //     url: './php/uploadmenu.php',
    //     //     dataType: 'json',
    //     //     type: 'post',
    //     //     data: file,
    //     //     cache: false,
    //     //     success: function(data){
    //     //         // console.log(data.message1);
    //     //         console.log(data.message);  
    //     //     },
    //     //     error: function(a,b,c){
    //     //         console.log('Error: ' + a + " " + b + " " + c);
    //     //     }
    //     // });
    });
    $('#order-file').change(function(){
        $('#order-form').submit();
    });

    $('#about-file').change(function(){
        $('#about-form').submit();
    });

    $('#navigation-file').change(function(){
        $('#navigation-form').submit();
    });

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
    
    // $("#curry").click("onclick", function(){
    //     displayFoodOrder("curry", "Curry Rice", -10);
    //     document.getElementsByClassName("container-body").item(0).style = "filter: blur(10px);opacity: 0.6;";        
    // });

    // $("#donburi").click("onclick", function(){
    //     displayFoodOrder("donburi", "Donburi", -32);
    //     document.getElementsByClassName("container-body").item(0).style = "filter: blur(10px);opacity: 0.6;";        
    // });

    // $("#cakey").click("onclick", function(){
    //     displayFoodOrder("japanesecake", "Japanese Cakey", -10);
    //     document.getElementsByClassName("container-body").item(0).style = "filter: blur(10px);opacity: 0.6;";        
    // });

    // $("#karaage").click("onclick", function(){
    //     displayFoodOrder("karaage", "Karaage", 0);
    //     document.getElementsByClassName("container-body").item(0).style = "filter: blur(10px);opacity: 0.6;";        
    // });

    // $("#omurice").click("onclick", function(){
    //     displayFoodOrder("omurice", "Omurice", -30);
    //     document.getElementsByClassName("container-body").item(0).style = "filter: blur(10px);opacity: 0.6;";        
    // });

    // $("#onigiri").click("onclick", function(){
    //     displayFoodOrder("onigiri", "Onigiri", 0);
    //     document.getElementsByClassName("container-body").item(0).style = "filter: blur(10px);opacity: 0.6;";        
    // });

    // $("#ramen").click("onclick", function(){
    //     displayFoodOrder("ramen", "Ramen", -15);
    //     document.getElementsByClassName("container-body").item(0).style = "filter: blur(10px);opacity: 0.6;";        
    // });

    // $("#pudding").click("onclick", function(){
    //     displayFoodOrder("pudding", "Chocolate Pudding", -35);
    //     document.getElementsByClassName("container-body").item(0).style = "filter: blur(10px);opacity: 0.6;";        
    // });

    // $("#tempura").click("onclick", function(){
    //     displayFoodOrder("tempura", "Tempura", -50);
    //     document.getElementsByClassName("container-body").item(0).style = "filter: blur(10px);opacity: 0.6;";    
    // });

    // $("#tonkatsu").click("onclick", function(){
    //     displayFoodOrder("tonkatsu", "Curry Rice", -33);
    //     document.getElementsByClassName("container-body").item(0).style = "filter: blur(10px);opacity: 0.6;";        
    // });

    // $("#lipton").click("onclick", function(){
    //     displayFoodOrder("lipton", "Lipton Green Tea", 0);
    //     document.getElementsByClassName("container-body").item(0).style = "filter: blur(10px);opacity: 0.6;";        
    // });

    // $("#iced").click("onclick", function(){
    //     displayFoodOrder("iced", "Iced Tea", 0);
    //     document.getElementsByClassName("container-body").item(0).style = "filter: blur(10px);opacity: 0.6;";        
    // });

    // $("#add-to-cart").click("onclick", function(){
    //     document.getElementsByClassName("container-body").item(0).style = "filter: none; opacity: none; background-color: white;";   
    // });


    // $(".minus").click(()=>{
    //     if(qty != 0){   
    //         qty -= 1;
    //         console.log(qty);
    //         document.getElementById("form-qty").innerHTML = qty;
    //     }
    // });

    // $(".plus").click(()=>{
    //     qty += 1;
    //     console.log(qty);
    //     document.getElementById("form-qty").innerHTML = qty;
    // });

    /*=============================================
                        FORM ORDER   
    =============================================*/

    $(".guest").click("onclick", function(){
        // document.getElementsByClassName('button-container').item(0).style = "display: none;";
        document.getElementsByClassName('form-container').item(0).style = "display: initial; animation: come-out 0.5s ease forwards;";
        document.getElementById('title-form').style = "display: block; animation: come-out 0.3s forwards;";
        document.getElementById('sub-title').style = "display: initial; animation: come-out 0.3s forwards;";
    });


    /*=============================================
                        FUNCTIONS   
    =============================================*/

    // function displayFoodOrder(food, foodname, x_pos){
    //     document.getElementsByClassName("food").item(0).style = "background-image: url('./img/menu/" + food + ".jpg'); background-position-x: "+ x_pos + "px;";
    //     document.getElementsByClassName("food-name").item(0).innerHTML = foodname;
    // }

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
            if($('.home').css('color') != '#00a8ff'){
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

//=======================================================
//                   ANGULAR 
//=======================================================


(function() {
    'use strict';
    var complete1 = false, complete2 = false;    
    var totalPrice = 0;
    var qty = 0;
    var counter = 1;
    var edit = false;
    var order = false;
    var expand = false;
    var dats;
    var sec;
    var c = 1;
    var b = 0;
    var items = 0;
    var app = angular.module("myApp",['ngAnimate']);
    var orders = new Array();
    var removePrice = 0;    
    app.controller('myCtrl', function($scope,$compile){
        $scope.showActions = [];
        $scope.admin = false;
        $scope.totalPricy = totalPrice;
        $scope.generate = function(){
            $.ajax({
                url: './php/loadfood.php',
                dataType: 'json',
                type: 'GET',
                cache: false,
                success: function(data){
                    getData(data);  
                },
                error: function(a,b,c){
                    console.log('Error: ' + a + " " + b + " " + c);
                }
            });
        };
        $scope.navLoc = function(loc, clicked){
            if(loc == 1 && clicked == 'top' && complete1 == false){
                expand == true? hideSign(): expand = false;
                $('.nav-1').css({'border-color': '#2ecc71', 'color' : '#2ecc71'});                
                $('.nav-2').css({'border-color': '#fff', 'color' : '#3498db'});
                $('.nav-3').css({'border-color': '#fff', 'color' : '#3498db'});
            }else if(loc == 2){
                if(clicked == 'top' && complete2 == false){
                    complete1 == false? $('.nav-1').css({'border-color': '#fff', 'color' : '#3498db'}): null;                  
                    expand == true? hideSign():expand = false;
                    $('.nav-3').css({'border-color': '#fff', 'color' : '#3498db'});                                      
                    $('.nav-2').css({'border-color': '#2ecc71', 'color' : '#2ecc71'});                  
                }else if(clicked == 'btn'){
                    $('.nav-1').css({'background-color': '#2ecc71', 'color' : '#fff'});                                      
                    $('.nav-2').css({'border-color': '#2ecc71', 'color' : '#2ecc71'});
                    complete1 = true;
                }
            }else if(loc == 3){
                if(order == true){
                    $(".s-in")[0].style = "width: 70%;";
                    $(".right-side")[0].style = "animation: right-side 1s ease forwards;";
                    setTimeout(function(){
                        $(".p-order")[0].style = "display: inline-block; visibility: visible; height: 100%; width: 45%;";
                    }, 700);
                    expand = true;
                }
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
            if($scope.qty != 0){
                $scope.empty = false;
                if(edit == false){
                    totalPrice = (parseFloat(totalPrice) + ($scope.qty * 30)).toFixed(2);
                    $scope.totalPricy = totalPrice;
                    $scope.showActions[c] = true;
                }else{
                    
                }
                $scope.showOrder = false;
                $(".container-body").css({"filter": "none", "opacity": "1", "background-color": "white"});        
                setTimeout(function(){
                    $scope.qty = 0;
                }, 500);
            } else{
                $scope.empty = true;
            }
            insert(c,$('.food-name').text(),$('#form-qty').text(),($('#form-qty').text() * 30).toFixed(2));
            qty = $scope.qty;
            items++;
            console.log(orders);
        };
        $scope.sign_guest = function(){
            localStorage.setItem('guest', 'true');
            $scope.loginGuest = true;
            $scope.loginSuccess = false;
            $scope.loginFailed = false;
            $scope.isGuest = true;
            userSignedIn();
            setTimeout(function(){
                backToMain();
                $scope.$apply();
            }, 1800);
        };
        $scope.requireLogin = function(class_name){
            if(localStorage.getItem('success') == 'true'||
            localStorage.getItem('guest') == 'true'){
                displayfood(class_name);                
                $scope.showOrder =  true; 
                }
            else{ 
                displayfood(class_name);
                $scope.showIn = true; 
            }
        };
        $scope.checkUser = function(){
            userSignedIn();
        }
        $scope.exitForm = function(){
            expand == true? hideSign(): angular.noop();
            backToMain();
            order = false;
        }
        function backToMain(){
            $('#bimbi').css({'filter': 'none', 'opacity': '1'});
            resetNavColor();            
            $scope.showIn = false; 
        }
        $scope.logout = function(){
            localStorage.clear();
        }
        
        //PHP TO JAVASCRIPT
        $scope.sign_in = function(){
            $('#form').submit(()=>{
                return false;
            });
            var contents = $("#form").serialize();
            console.log(contents);
            $.ajax({
                url: './php/loginserv.php',
                dataType: 'json',
                type: 'post',
                data: contents,
                cache: false,
                success: function(data){
                    if(data.success == true){
                        if(data.user == true){
                            localStorage.setItem('user', data.user);
                        }
                        localStorage.setItem('firstname', data.Firstname);
                        localStorage.setItem('success', data.success);
                        $scope.loginSuccess = true;
                        $scope.loginFailed = false;
                        $scope.loginGuest = false;
                        $scope.welcome = " Welcome " + data.Firstname + " " + data.Lastname + ".";

                        if (data.Usertype == "Admin"){
                             localStorage.setItem('admin',  'true');
                             $scope.admin = true;
                        } 

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
        
        // $scope.uploadPhoto = function(banner){
        //     var f = $('#menu-file').val();
        //     f = f.replace(/.*[\/\\]/, '');         
        //     console.log(JSON.stringify(f));
        //     if(banner == 'menu'){
        //         asd(f);
        //     }else if(banner == 'order'){
        //         // $('#order-form').submit();                
        //     }
        // };
        // function asd(f){
        //     $.ajax({
        //         url: './php/uploadmenu.php',
        //         dataType: 'json',
        //         type: 'post',
        //         data: JSON.stringify(f),
        //         cache: false,
        //         success: function(data){
                      
        //         },
        //         error: function(a,b,c){
        //             console.log('Error: ' + a + " " + b + " " + c);
        //         }
        //     });
        // }
        $scope.saveCustInfo = function(){
            if(localStorage.getItem('guest') != 'true'){
                $('#register').submit(()=>{
                    return false;
                });
                var contents = $('#register').serialize();
                console.log(contents);

                $.ajax({
                    url: './php/registerserv.php',
                    dataType: 'json',
                    type: 'post',
                    data: contents,
                    cache: false,
                    success: function(data){
                if(data.check){
                    alert(data.message);
                }
                else if(data.exist){
                    if(data.leng){
                        if(data.match){
                            if(data.valid){
                                alert(data.message);
                            }else{
                                alert(data.message);
                            }
                        }else{
                            alert(data.message);
                        }
                     }else{
                        alert(data.message);
                    }
                    }else{
                        alert(data.message);
                    }
                
                 },
                    error: function(a,b,c){
                        console.log('Error: ' + a + " " + b + " " + c);
                    }
            
                });

            }else{
                $('#register').submit(()=>{
                    return false;
                });
                var contents = $("#register").serialize();
                console.log(orders);         
                                              
                $.ajax({
                    url: './php/orderserv.php',
                    dataType: 'json',
                    type: 'post',
                    data: {datas:contents,data:orders},
                    cache: false,
                    success: function(data){
                        // messageBox("Empty Fields!", data.message,true);
                        if(data.check){
                            messageBox("Empty Fields!",data.message,true);
                        }else if(data.valid){
                            messageBox("Order Success!",data.message,true);
                            backToMain();
                            $scope.showLogin = false;
                            $scope.showPayment = false;
                            $scope.$apply();
                        }else{
                            messageBox("Invalid Email!",data.message,true);
                        }
                    },
                    error: function(a,b,c){
                        console.log('Error: ' + a + " " + b + " " + c);
                    }
                });
                // $scope.showIn = false;
                // backToMain();
            }
            console.log(localStorage.getItem('success'));
        };
        $scope.order = function(){
            if(localStorage.getItem('success') == 'true'){
                order = true;
            }else if(localStorage.getItem('guest') == 'true'){
                if(items != 0){
                    order = true;
                    showSignIn();
                }else{
                    messageBox("No Order", "Please order first!",true);
                }
            }else{
                $scope.notLoggedIn = true;
            }
        }
        $scope.check = function(){
            var e = document.getElementById("p_method");
            var str = e.options[e.selectedIndex].value;
            console.log(str);
            if(str == 'cash') $scope.cash = true;
            else $scope.cash = false;
        }
        $scope.removeItem = function(){
            // $("#cart").remove();
            console.log(this);
        }
        $scope.editItem = function(){
            // document.getElementsByClassName("food-name").item(0).innerHTML = ;            
            $scope.showOrder = true;
            edit = true;
        }
        $scope.minusPrice = function(id){
            totalPrice = (parseFloat(totalPrice) - (removePrice)).toFixed(2);
            console.log(id + ": " + removePrice);
            $scope.totalPricy = totalPrice;    
            orders = deleteRow(orders,id)
            console.log(orders); 
        }



        //FUNCTIONS

        function messageBox(title,message,isClose){
            $scope.modalTitle = title;
            $scope.modalText = message;
            $scope.closeOnly = isClose
            $("#myModal").modal('show');
            $scope.$apply();
        }

        function deleteRow(arr, row) {
            delete arr[row];
            return arr;
        }
        function insert(id, name, qty, price) {
            orders[id] = {
                "name" : name,
                "qty" : qty,
                "price" : price
            };
        }
        function displayfood(foodname){
            if(foodname == 'curry'){
                displayFoodOrder("curry", "Curry Rice", -10);
            }else if(foodname == 'donburi'){
                displayFoodOrder("donburi", "Donburi", -32);
            }else if(foodname == 'cakey'){
                displayFoodOrder("japanesecake", "Japanese Cakey", -10);
            }else if(foodname == 'karaage'){
                displayFoodOrder("karaage", "Karaage", 0);
            }else if(foodname == 'omurice'){
                displayFoodOrder("omurice", "Omurice", -30);
            }else if(foodname == 'onigiri'){
                displayFoodOrder("onigiri", "Onigiri", 0);
            }else if(foodname == 'ramen'){
                displayFoodOrder("ramen", "Ramen", -15);
            }else if(foodname == 'pudding'){
                displayFoodOrder("pudding", "Chocolate Pudding", -35);
            }else if(foodname == 'tempura'){
                displayFoodOrder("tempura", "Tempura", -50);
            }else if(foodname == 'tonkatsu'){
                displayFoodOrder("tonkatsu", "Tonkatsu", -33);
            }else if(foodname == 'lipton'){
                displayFoodOrder("lipton", "Lipton Green Tea", 0);
            } else if(foodname == 'iced'){
                displayFoodOrder("iced", "Iced Tea", 0);
            }
        }
        function displayFoodOrder(food, foodname, x_pos){
            document.getElementsByClassName("food").item(0).style = "background-image: url('./img/menu/" + food + ".jpg'); background-position-x: "+ x_pos + "px;";
            document.getElementsByClassName("food-name").item(0).innerHTML = foodname;
            document.getElementsByClassName("container-body").item(0).style = "filter: blur(10px);opacity: 0.6;";                    
        }
        function getData(param){
            dats = param;
            if(b == 0){
                for(var x = 0; x<dats.length; x++){
                    $("#drinks").before($compile(
                    "<div class='box'>"+
                    "<div class='frame "+ dats[x].class_name +"'></div>"+
                    "<article>"+
                        "<h1>"+ dats[x].foodName +"</h1>"+
                        "<p>"+ dats[x].foodDesc +"</p>"+
                    "</article>"+
                    "<div class='button-cart-container'>"+
                        "<h1>₱"+ dats[x].foodPrice +"</h1>"+
                        "<button id='"+ dats[x].class_name +"' ng-click=requireLogin('"+ dats[x].class_name +"') class='add-to-cart' ng-click='showOrder = true'>Add to Cart</button>"+
                    "</div>"+
                    "</div>"+
                    "<style>"+
                        "."+dats[x].class_name+"{"+
                            "background-image: url('./img/menu/"+ dats[x].foodImg +"');"+
                            "background-position-x: "+ dats[x].position_x+";"+
                        "}"+
                    "</style>")($scope));
                }
                b++;
            }
        };
        function hideSign(){
            $(".s-in")[0].style = "width: 40%;";
            $(".p-order")[0].style = "display: none;";            
            $(".right-side")[0].style = "width: 85%;";            
        }
        function resetNavColor(){
            $('.nav-form').css({'border-color': '#fff', 'background-color': '#fff', 'color' : '#3498db'});                            
            $('.nav-1').css({'border-color': '#2ecc71', 'background-color': '#fff', 'color' : '#2ecc71'});   
            complete1 = false;
            complete2 = false;                                   
        }
        function showSignIn(){
            $scope.guest = true;
            $scope.showRegister = true;
            $scope.showIn = true;          
            $scope.showBill = false;
            $scope.showBack = false;  
            $scope.showLogin = true;
            document.getElementsByClassName("container-body").item(0).style = "filter: blur(10px); opacity: 0.6;";
        }
        function userSignedIn(){
            if(localStorage.getItem('success') == 'true'){
                if(localStorage.getItem('user') == 'true'){
                    startSlider();
                    $('.bg-sushi')[0].style = "cursor: pointer;";
                    $('.menu-background')[0].style = "cursor: pointer;";
                    $('.order-background')[0].style = "cursor: pointer;";                    
                }
                if (localStorage.getItem('admin') == 'true'){
                    $scope.admin = true;
                    
                } 
                $scope.user = localStorage.getItem('firstname');
                $scope.signedIn = true;
            }else if(localStorage.getItem('guest') == 'true'){
                startSlider();
                $scope.signedIn = true;
                $scope.guest = true;
                $scope.user = 'Guest';
            }else{
                $scope.signedIn = false;
            }
        }
        function startSlider(){
            sec = 6000;
            counter > 4? counter = 1: angular.noop();
            $scope.slider(counter++,'auto');
            setTimeout(function(){
                $scope.$apply(startSlider());
            }, sec);
        }
        /*=============================================
                            SLIDER   
        =============================================*/
        $scope.slider = function slider(n,func){
            if(func == 'click') counter = n + 1;
            if(n == 1){
                $scope.one = false; 
                $scope.two = false; 
                $scope.three = false; 
                $scope.four = false;
                sec = 4000;
            } else if(n == 2){
                $scope.one = true; 
                $scope.two = true; 
                $scope.three = false; 
                $scope.four = false;
            } else if(n == 3){
                $scope.one = true; 
                $scope.two = false; 
                $scope.three = true; 
                $scope.four = false;
            } else if(n == 4){
                $scope.one = true; 
                $scope.two = false; 
                $scope.three = false; 
                $scope.four = true;
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
                    console.log(qty);
                    if(qty != 0){
                        var newItem = $compile('<li class="row items"><input type="text" name="qty[]" value="'+ $('#form-qty').text() +'" style="display:none"><input type="text" name="food[]" value="'+ $('.food-name').text() +'" style="display:none"><input type="text" name="price[]" value="'+ ($('#form-qty').text() * 30).toFixed(2) +'" style="display:none"><span class="qty">'+ $('#form-qty').text() +'</span><span class="item-name">'+ $('.food-name').text() +'</span><a href="" class="action" ng-click="clickAction(); showActions['+ c +'] = !showActions['+ c +']"></a><span class="price">₱<a class="price">' + ($('#form-qty').text() * 30).toFixed(2) +'</a></span><div class="action-item" ng-hide="showActions['+ c +']"><a href=""><span class="glyphicon glyphicon-pencil" ng-click="editItem()"></span></a><a href=""><span class="glyphicon glyphicon-remove" remove-Item ng-click="minusPrice('+ c++ +')"></span></a></div></li>')(li)
                        $("#cart").children('#add-item').prev().after(newItem);
                    }
                });
            }
        }
    });  
    app.directive('removeItem', function($compile){
        return{
            link: function(scope,element,attrs){
                element.bind('click', function(event){
                    items--;
                    event.preventDefault();
                    removePrice = parseFloat(element.parent().parent().parent().find("a").text());
                    element.parent().parent().parent().remove();
                });       
            }
        }
    });
    app.directive('orderPreview', function($compile){
        return{
            link: function(li, element){
                element.bind('click', function(){
                    $("#p-order").children(".items").remove();
                    for(var x in orders){
                        var newItem = $compile('<li class="row items"><span class="qty">'+ orders[x].qty +'</span><span class="item-name">'+ orders[x].name +'</span><span class="price">₱'+ orders[x].price +'</span></li>')(li)
                        $("#p-order").children("#add-items").prev().after(newItem);
                    }
                });
            }
        }
    });
})();
