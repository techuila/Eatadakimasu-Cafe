var order = false;

function loadHtml() {
    order = true;
    console.log(order); 

    document.getElementById("food-order").style = "display: initial;";
    document.getElementsByClassName("container").item(0).style = "filter: blur(10px);opacity: 0.6;";
}

function cancelFood(){
    if (order == true){
        console.log('if');
        order = false;
    } else{
        console.log('else');
        document.getElementsByClassName("container").item(0).style = "filter: none; opacity: none";
        document.getElementById("food-order").style = "display: none";
    }
}