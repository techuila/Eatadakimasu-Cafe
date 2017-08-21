$(document).ready(function(){
    scrollNavFunction(true);
    var order = false;
    $(window).on("scroll", function(){
        scrollNavFunction(false);
    });

    function scrollNavFunction(onload){
        var navbar = document.getElementById("navBar");
        if(document.body.scrollTop > 30 || document.documentElement.scrollTop > 30){
            navbar.className = "on-top" + " on-scroll"+ " animate-scroll-top";
        } else{ 
            if(onload)
                navbar.className = "on-top";
            else
                navbar.className = "animate-scroll-bottom" + " on-top" ;
        }
    }

    $("#curry, #add-curry").click("onclick", function(){
        displayFoodOrder("curry", "Curry Rice");
    });

    $("#donburi, #add-donburi").click("onclick", function(){
        displayFoodOrder("donburi", "Donburi");
    });

    $("#japanese, #add-japanese").click("onclick", function(){
        displayFoodOrder("japanesecake", "Japanese Cakey");
    });

    $("#karaage, #add-karaage").click("onclick", function(){
        displayFoodOrder("karaage", "Karaage");
    });

    $("#omurice, #add-omurice").click("onclick", function(){
        displayFoodOrder("omurice", "Omurice");
    });

    $("#onigiri, #add-onigiri").click("onclick", function(){
        displayFoodOrder("onigiri", "Onigiri");
    });

    $("#ramen, #add-ramen").click("onclick", function(){
        displayFoodOrder("ramen", "Ramen");
    });

    $("#sushi, #add-sushi").click("onclick", function(){
        displayFoodOrder("sushi", "Sushi");
    });

    $("#tempura, #add-tempura").click("onclick", function(){
        displayFoodOrder("tempura", "Tempura");
    });

    $("#tonkatsu, #add-tonkatsu").click("onclick", function(){
        displayFoodOrder("tonkatsu", "Curry Rice");
    });

    $("#exit-order").click("onclick", function(){
        cancelFood();
    });

    $("#container-body").click("onclick", function(){
        cancelFood();
    });

    //BACK TO TOP BUTTON PRESSED
    $("#back-to-top").click("onclick", function(){
        document.body.scrollTop = 0;
    });

    //ORDER FOOD FORM AKI SAKA MGA VALUES STABA CART!!!!!!
    $("#addtocart").click("onclick", function(){
        cancelFood();
    });

    //CHECK OUT EVENT HANDLER
    $("#checkout").click("onclick", function(){
        // alert("BUSTY LATINA");
        
    });


    function displayFoodOrder(food, foodname){
        console.log("display food order clicked");
        order = true;
        document.getElementById("food-order").style = "display: initial;";
        document.getElementsByClassName("container").item(0).style = "filter: blur(10px);opacity: 0.6;";
        document.getElementsByClassName("food-name").item(0).innerHTML = foodname;
        document.getElementsByClassName("foods").item(0).style.backgroundImage = "url('./img/menu/" + food + ".jpg')";
    }

    function cancelFood(){
        if (order == true){
            console.log('if');
            order = false;
        } else{
            console.log('else');
            document.getElementById("food-order").style = "display: none;";            
            document.getElementsByClassName("container").item(0).style = "filter: none; opacity: none";
        }
    }

    
});
