function addNumbers(a){
    if(Array.isArray(a)){
        var sum = 0;
        for(var i in a){
            //If element is a number add it to the sum
            if (typeof a[i] == 'number'){
                sum += a[i];
            }
            //If element is not a number return false since it is not an array of only numbers
            else 
                return false;
        }
        return sum;
    }
    else{
        return false;
    }
}

function getCurrentDate(){
    var temp = new Date();
    return temp.toLocaleString();
}

function arrayToString(a){
    if(Array.isArray(a)){
        var concat = "";
        for(var i in a){
            if(typeof a[i] =='string'){
                if(i == a.length - 1)
                    concat += a[i];
                else{
                    concat += a[i] + " ";
                }
            }
            else{
                return false;
            }
        }
        return concat;
    }
    else{
        return false;
    }
}

function findMaxNumber(/**/){
    var args = Array.prototype.slice.call(arguments);

    var max = args[0];
    if(typeof max != 'number')
        return false;
    for(var i in args){
        if(typeof args[i] =='number'){
            if(args[i] > max)
                max = args[i];
        }
        else{
            return false;
        }
    }
    return max;
}

function getDigits(a){
    if(typeof a =='string'){
        var concat ="";
        for(var i in a){
            if(a[i] == 0 || a[i] == 1 || a[i] == 2 || a[i] == 3 || a[i] == 4 || a[i] == 5 || a[i] == 6 || a[i] == 7 || a[i] == 8 || a[i] == 9){
                if(i == a.length-1)
                    concat += a[i];
                else
                    concat += a[i] + " ";
            }
        }
        return concat;
    }
    else{
        return false;
    }
}

function reverseString(a){
    if(typeof a == 'string'){
        var reversed = "";
        for(var i = a.length-1; i >= 0; i--){
            reversed += a[i];
        }
        return reversed;
    }
    else{
        return false;
    }
}

var sumButton = document.getElementById("add-numbers-button");


sumButton.addEventListener("click",function(e){
    e.preventDefault();
    const container = document.querySelector(".add-numbers");
    const previous = document.getElementById("add-numbers-result");
    if(previous != null){
        previous.remove();
    }

    var text = document.getElementById("add-numbers-array").value;
    var array = new Array();

    for(var i in text){
        if(text[i] == ',')
            continue;
        array.push(Number.parseInt(text[i]));
    }
    var result = addNumbers(array);

    const newElement = document.createElement("text");
    newElement.setAttribute("id","add-numbers-result");
    newElement.innerText = "Sum: " + result;
    container.appendChild(newElement);
});

const dateButton = document.querySelector(".current-date-button");

dateButton.addEventListener("click", function(e){
    e.preventDefault;
    const container = document.querySelector(".current-date");
    const previous = document.getElementById("current-date-result");
    if(previous != null)
        previous.remove();

    const result = getCurrentDate();
    
    const newElement = document.createElement("text");
    newElement.setAttribute("id","current-date-result");
    newElement.innerText = "Current Date: " + result;
    container.appendChild(newElement);
});

const arrayToStringButton = document.querySelector(".array-to-string-button");
arrayToStringButton.addEventListener("click", function(e){
    //Allows Result to Stay on Screen
    e.preventDefault();

    //Removes Previous Result
    const previous = document.getElementById("array-to-string-result");
    if(previous != null)
        previous.remove();

    const container = document.querySelector(".array-to-string");
    
    var text = String(document.getElementById("array-to-string-array").value);
    var array = text.split(",");
    var result = arrayToString(array);

    //Turn into an element with an id.
    var newElement = document.createElement("text");
    newElement.setAttribute("id","array-to-string-result");
    newElement.innerText = "Array converted to: " + result;

    container.appendChild(newElement);

});

const findMaxNumberButton = document.querySelector(".find-max-number-button");
findMaxNumberButton.addEventListener("click", function(e){
    e.preventDefault();

    const previous = document.getElementById("find-max-number-result");
    if(previous != null){
        previous.remove();
    }

    const container = document.querySelector(".find-max-number");

    var array = new Array();

    for(var i = 0; i < 5; i++){
        array[i] = Number.parseInt(Math.random() * 100);
        console.log(array[i]);
    }
    
    const result = findMaxNumber(array[0],array[1],array[2],array[3],array[4]);

    document.getElementById("find-max-number-numbers").innerText = "Random Numbers: " + array.toString() + ". Max: " + result;
});

const findDigitsButton = document.querySelector(".get-digits-button");
findDigitsButton.addEventListener("click",function(e){
    e.preventDefault();
    const previous = document.getElementById("get-digits-result");
    if(previous != null){
        previous.remove();
    }

    const container = document.querySelector(".get-digits");

    var text = document.getElementById("get-digits-array").value;

    const result = getDigits(text);

    var newElement = document.createElement("text");
    newElement.setAttribute("id","get-digits-result");
    newElement.innerText = "Digits in String: "+ result;

    container.appendChild(newElement);
});

const reverseStringButton = document.querySelector(".reverse-string-button");
reverseStringButton.addEventListener("click",function(e){
    e.preventDefault();

    const previous = document.getElementById("reverse-string-result");
    if(previous != null){
        previous.remove();
    }

    const container = document.querySelector(".reverse-string");

    const text = document.getElementById("reverse-string-array").value;

    const result = reverseString(text);

    var newElement = document.createElement("text");
    newElement.setAttribute("id","reverse-string-result");
    newElement.innerText = "Reversed String: " + result;

    container.appendChild(newElement);
});

