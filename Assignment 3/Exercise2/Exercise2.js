
const orderButton = document.querySelector(".order-button");

orderButton.addEventListener("click", function(e){
    e.preventDefault();

    const previous = document.getElementById("order-result");
    if(previous != null)
        previous.remove();

    const xhtmlPrice = 19.99;
    const phpPrice = 86.00;
    const jqueryPrice = 55.00;

    const container = document.querySelector("body");

    var xhtmlQuantity = Number.parseInt(document.getElementById("xhtml-quantity").value);
    var phpQuantity = Number.parseInt(document.getElementById("php-quantity").value);
    var jqueryQuantity = Number.parseInt(document.getElementById("jquery-quantity").value);


    console.log(typeof xhtmlQuantity + " " + typeof phpQuantity + " " + typeof jqueryQuantity);
    if(xhtmlQuantity != "" || phpQuantity != "" || jqueryQuantity != ""){

        if(typeof xhtmlQuantity != "number" || typeof phpQuantity !="number"&& typeof jqueryQuantity !="number" || isNaN(xhtmlQuantity) || isNaN(phpQuantity) || isNaN(jqueryQuantity)){
            alert("Enter only number values.")
        }
        else{
            console.log(xhtmlQuantity);
            const xhtmlTotal = xhtmlQuantity * xhtmlPrice;
            console.log(xhtmlTotal);
            
            console.log(phpQuantity);
            const phpTotal = phpQuantity * phpPrice;
            console.log(phpTotal);

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
        }
    }
    
})