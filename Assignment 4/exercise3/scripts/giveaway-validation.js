const submitButton = document.getElementById("submit-button");

submitButton.addEventListener("click",function(e){

    var dogType = document.getElementById("dog");
    var catType = document.getElementById("cat");

    var breedText = document.getElementById("breed-text").value;

    var maleType = document.getElementById("gender-male");
    var femaleType = document.getElementById("gender-female");

    var aboutText = document.getElementById("about-pet").value;

    var firstName = document.getElementById("name-first").value;
    var lastName = document.getElementById("name-last").value;
    var email = document.getElementById("email-owner").value;

    var petValid = dogType.checked || catType.checked;

    if(!petValid){
        e.preventDefault();
        alert("Please enter valid Pet Type");
    }

    if(breedText == ""){
        e.preventDefault();
        alert("Please enter valid Pet Breed");
    }

    var genderType = maleType.checked || femaleType.checked;

    if(!genderType){
        e.preventDefault();
        alert("Please enter valid Gender Type");
    }

    if(aboutText == ""){
        e.preventDefault();
        alert("Please enter valid About Dog");
    }

    if(firstName == ""){
        e.preventDefault();
        alert("Please enter valid First Name");
    }

    if(lastName == ""){
        e.preventDefault();
        alert("Please enter valid Last Name");
    }
    if(email == ""){
        e.preventDefault();
        alert("Please enter valid Email");
    }
});