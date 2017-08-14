$(document).ready(function(){

    var order = false;
    //ARRAY VARIABLES AKI SAKA!!!
    var food_names = new Array();
    var food_qty = new Array();
    var food_price = new Array();

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
        var tbody = document.getElementById("add-to-cart");
        var tr = document.createElement("tr");
        var fooditem = document.createElement("th");
        var qty = document.createElement("td");
        console.log(qty);
        var price = document.createElement("td");
        var foodname = document.getElementsByClassName("food-name").item(0).innerHTML;
        qty.appendChild(document.createTextNode(document.getElementById("qty").value));
        fooditem.appendChild(document.createTextNode(foodname));
        price.appendChild(document.createTextNode(document.getElementById("qty").value * 70));
        tr.appendChild(fooditem);
        tr.appendChild(qty);
        tr.appendChild(price)
        tbody.appendChild(tr);

        //ADD VALUES TO ARRAY
        food_names.push(foodname);
        food_qty.push(document.getElementById("qty").value);
        food_price.push(document.getElementById("qty").value * 70);
        console.log("food names: " + food_names + "\n food qty: " + food_qty + "\n food price: " + food_price);
        
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
