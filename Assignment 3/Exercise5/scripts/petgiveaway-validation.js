

const submitButton = document.getElementById("submit-button");

submitButton.addEventListener("click",function(e){
    e.preventDefault();

    var dogType = document.getElementById("dog");
    var catType = document.getElementById("cat");

    var breedText = document.getElementById("breed-text").value;

    var maleType = document.getElementById("gender-male");
    var femaleType = document.getElementById("gender-female");

    var aboutText = document.getElementById("about-pet").value;

    var firstName = document.getElementById("name-first").value;
    var lastName = document.getElementById("name-last").value;
    var email = document.getElementById("email-owner").value;

    const petValid = dogType.checked || catType.checked;
    
    if(!petValid){
        alert("Please enter valid Pet Type");
    }

    console.log(breedText);

    if(breedText == ""){
        alert("Please enter valid Pet Breed");
    }

    const genderType = maleType.checked || femaleType.checked;

    if(!genderType){
        alert("Please enter valid Gender Type");
    }

    if(aboutText == ""){
        alert("Please enter valid About Dog");
    }

    if(firstName == ""){
        alert("Please enter valid First Name");
    }

    if(lastName == ""){
        alert("Please enter valid Last Name");
    }

    if(email == ""){
        alert("Please enter valid Email");
    } 
});