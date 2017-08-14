$(document).ready(function(){
    var order = false;


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
        var foodname = document.getElementsByClassName("food-name").item(0).innerHTML;        

        //ADD TO TABLES
        var new_row = document.createElement("tr");
        var fooditem = document.createElement("th");
        var qty = document.createElement("td");
        var price = document.createElement("td");
        

        //ADD INPUT BUT HIDDEN
        var input_fooditem = document.createElement("input");
        var input_qty = document.createElement("input");
        var input_price = document.createElement("input");
        

        //ADD ATTRIBUTES OF INPUT
        //ADD ATTRIBUTE TYPE
        var type_food = document.createAttribute("type");
        var type_qty = document.createAttribute("type");
        var type_price = document.createAttribute("type");

        //SET TYPE TO HIDDEN
        type_food.value = "hidden";
        type_qty.value = "hidden";
        type_price.value = "hidden";

        //SET ATTRIBUTE TYPE TO INPUT
        input_fooditem.setAttributeNode(type_food);
        input_qty.setAttributeNode(type_qty);
        input_price.setAttributeNode(type_price);

        //ADD ATTRIBUTE NAME OF INPUT
        var name_food = document.createAttribute("name");
        var name_qty = document.createAttribute("name");
        var name_price = document.createAttribute("name");

        //SET ATTRIBUTE NAME OF INPUT
        name_food.value = "fname[]";
        name_qty.value = "qty[]";
        name_price.value = "price[]";

        input_fooditem.setAttributeNode(name_food);
        input_qty.setAttributeNode(name_qty);
        input_price.setAttributeNode(name_price);

        //CREATE ATTRIBUTE VALUES OF INPUT
        var food_val = document.createAttribute("value");
        var qty_val = document.createAttribute("value");
        var price_val = document.createAttribute("value");

        //SET ATTRIBUTE VALUES OF INPUT
        food_val.value = foodname;
        qty_val.value = document.getElementById("qty").value;
        price_val.value = document.getElementById("qty").value * 70;

        //SET ATTRIBUTE NODE OF INPUT
        input_fooditem.setAttributeNode(food_val);
        input_qty.setAttributeNode(qty_val);
        input_price.setAttributeNode(price_val);

        //SHOW VALUES TO TABLES
        fooditem.appendChild(document.createTextNode(foodname));        
        qty.appendChild(document.createTextNode(document.getElementById("qty").value));
        price.appendChild(document.createTextNode(document.getElementById("qty").value * 70));

        //APPEND HIDDEN INPUT TO TABLES
        fooditem.appendChild(input_fooditem);
        qty.appendChild(input_qty);
        price.appendChild(input_price);

        //APPEND NEW ROW TO TABLE
        new_row.appendChild(fooditem);
        new_row.appendChild(qty);
        new_row.appendChild(price)

        tbody.appendChild(new_row);

        
        cancelFood();
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
