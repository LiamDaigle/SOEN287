
var index = 0;

const imageArray = document.getElementsByClassName("image");

const nextLink = document.getElementById("next");

nextLink.addEventListener("click",function(e){
    
    index++;
    console.log(index);
    if(index == imageArray.length){
        index = 0;
    }
    for(var i = 0; i < imageArray.length; i++){
        if(i == index){
            imageArray[i].style.display = "block";
            continue;
        }
        imageArray[i].style.display = "none";
    }
    
});

const prevLink = document.getElementById("previous");
console.log(prevLink);

prevLink.addEventListener("click",function(e){

    index--;
    if(index == -1)
        index = imageArray.length - 1;
    for(var i = 0; i < imageArray.length; i++){
        if(i == index){
            imageArray[i].style.display = "block";
            continue;
        }
        imageArray[i].style.display = "none";
    }
})