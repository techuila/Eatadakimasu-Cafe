function loadHtml() {
    console.log("loadHtml called");    
    document.getElementById("food-order").style = "display: initial;";
    document.getElementsByClassName("container").item(0).style = "filter: blur(10px);opacity: 0.6;";
}

function cancelFood(){
    console.log('inside');
    document.getElementsByClassName("container").item(0).style = "filter: none; opacity: none";
    document.getElementById("food-order").style = "display: none";
}