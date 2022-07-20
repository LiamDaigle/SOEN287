
const orderButton = document.querySelector(".order-button");

orderButton.addEventListener("click", function(e){
    e.preventDefault();

    const xhtmlPrice = 19.99;
    const phpPrice = 86.00;
    const jqueryPrice = 55.00;

    const container = document.querySelector("body");

    const xhtmlQuantity = document.getElementById("xhtml-quantity").value;
    console.log(xhtmlQuantity);
    const xhtmlTotal = xhtmlQuantity * xhtmlPrice;
    console.log(xhtmlTotal);
    

    const phpQuantity = document.getElementById("php-quantity").value;
    console.log(phpQuantity);
    const phpTotal = phpQuantity * phpPrice;
    console.log(phpTotal);

    const jqueryQuantity = document.getElementById("jquery-quantity").value;
    console.log(jqueryQuantity);
    const jqueryTotal = jqueryQuantity * jqueryPrice;
    console.log(jqueryTotal);

    const total = xhtmlTotal + phpTotal + jqueryTotal;

    var result = document.createElement("text");
    result.setAttribute("id","order-result");
    result.innerText = 
    "Basic XHTML (Quantity = " + xhtmlQuantity + "): $" + xhtmlPrice + "\n"
    + "Intro to PHP (Quantity = " + phpQuantity + "): $" + phpPrice + "\n"
    + "Advanced JQuery (Quantity = " + jqueryQuantity + "): $" + jqueryPrice + "\n\n"
    + "Final Total : $" + total;

    container.appendChild(result);

    
})