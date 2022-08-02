
const dogType = document.getElementById("dog");
const catType = document.getElementById("cat");

const maleType = document.getElementById("gender-male");
const femaleType = document.getElementById("gender-female");
const otherType = document.getElementById("gender-other");

const submitButton = document.getElementById("submit-button");

submitButton.addEventListener("click",function(e){
    e.preventDefault();

    console.log()

    var petValid = dogType.checked || catType.checked;
    var genderValid = maleType.checked || femaleType.checked || otherType.checked;

    if(!petValid){
        alert("Set a valid input for the Pet Type.");
    }
    if(!genderValid){
        alert("Set a valid input for the Gender Type");
    }
    console.log(valid);
})