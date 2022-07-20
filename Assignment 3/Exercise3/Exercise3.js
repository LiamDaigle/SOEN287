function getUserInfo(){
    const container = document.getElementById("content");

    const nameText = document.createElement("text");
    nameText.innerText = "What is your full name? ";

    container.appendChild(nameText);

    const fullName = document.createElement("input");
    fullName.setAttribute("type","text");
    fullName.setAttribute("id","full-name");
    fullName.setAttribute("placeholder","Enter your name");

    container.appendChild(fullName);

    const lineBreak = document.createElement("br");

    container.appendChild(lineBreak);

    const ageText = document.createElement("text");
    ageText.innerText = "How old are you? ";

    container.appendChild(ageText);

    const age = document.createElement("input");
    age.setAttribute("type", "text");
    age.setAttribute("id","age");
    age.setAttribute("placeholder","Enter your age");

    container.appendChild(age);

    const lineBreak2 = document.createElement("br");

    container.appendChild(lineBreak2);

    const submit = document.createElement("button");
    submit.setAttribute("class","submit-button");
    submit.innerText = "Submit";

    container.appendChild(submit);

    const lineBreak3 = document.createElement("br");

    container.appendChild(lineBreak3);

    submit.addEventListener("click", function(e){
        e.preventDefault();

        const userName = fullName.value;
        const userAge = age.value;

        const result = document.createElement("text");
        result.setAttribute("id","result");
        result.innerText = "Hi, my name is " + userName + " and im " + userAge + " years old.";

        container.appendChild(result);
    });
}

getUserInfo();