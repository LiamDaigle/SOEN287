
const dogType = document.getElementById("dog");
const catType = document.getElementById("cat");
const dmType = document.getElementById("other");

const maleType = document.getElementById("gender-male");
const femaleType = document.getElementById("gender-female");
const otherType = document.getElementById("gender-other");

const submitButton = document.getElementById("submit-button");

submitButton.addEventListener("click",function(e){

    var petValid = dogType.checked || catType.checked || dmType.checked;
    var genderValid = maleType.checked || femaleType.checked || otherType.checked;

    if(!petValid){
        e.preventDefault();
        alert("Set a valid input for the Pet Type.");
    }
    if(!genderValid){
        e.preventDefault();
        alert("Set a valid input for the Gender Type");
    }
})