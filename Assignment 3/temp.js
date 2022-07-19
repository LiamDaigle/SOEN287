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
var array = [1,2,3];
console.log(addNumbers(array));

function getCurrentDate(){
    var temp = new Date();
    return temp.toLocaleString();
}

console.log(getCurrentDate());

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

var strArray = ["hello","world","!"];
var str = arrayToString(strArray);
console.log(str);
console.log(typeof str == 'string');

function test(/**/){
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

console.log(test(1,2,3,4,9,6,7));

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

console.log(getDigits("fkdl;asjkdl1kl;agjkldsgjkl5kl;jasdfk3kas;dfjk;2kjl;dasjkf9"));

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

console.log(reverseString("hello"));