const container = document.querySelector("header");
console.log(container);

const currentDate = new Date();
const dateString = currentDate.toLocaleString();
console.log(dateString);

const date = document.createElement("text");
date.innerText = dateString;
date.setAttribute("id","date-and-time");
container.appendChild(date);
