$(document).ready(function(){
    var order = false;

    $("#curry").click("onclick", function(){
        displayFoodOrder("curry", "Curry Rice")
    });

    $("#donburi").click("onclick", function(){
        displayFoodOrder("donburi", "Donburi")
    });

    $("#japanese").click("onclick", function(){
        displayFoodOrder("japanesecake", "Japanese Cakey")
    });

    $("#karaage").click("onclick", function(){
        displayFoodOrder("karaage", "Karaage")
    });

    $("#omurice").click("onclick", function(){
        displayFoodOrder("omurice", "Omurice")
    });

    $("#onigiri").click("onclick", function(){
        displayFoodOrder("onigiri", "Onigiri")
    });

    $("#ramen").click("onclick", function(){
        displayFoodOrder("ramen", "Ramen")
    });

    $("#sushi").click("onclick", function(){
        displayFoodOrder("sushi", "Sushi")
    });

    $("#tempura").click("onclick", function(){
        displayFoodOrder("tempura", "Tempura")
    });

    $("#tonkatsu").click("onclick", function(){
        displayFoodOrder("tonkatsu", "Curry Rice")
    });

    $("#exit-order").click("onclick", function(){
        cancelFood();
    });

    $("#container-body").click("onclick", function(){
        cancelFood();
    });


    function displayFoodOrder(food, foodname){
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
