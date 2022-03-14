'use strict';

const carsCards = document.querySelectorAll(".car-card");
const carsTitles = document.querySelectorAll(".card-title");

const inputField = document.querySelector("#search-bar");
const cards = document.querySelectorAll(".car-card");

let inputValue;
let resultsCounter;

const numberOfResults = document.querySelector("#sort-menu p");

inputField.addEventListener("keypress", (event) => {
    if (event.keyCode === 13) {
        inputValue = inputField.value;
        event.preventDefault();
        filterCards(inputValue);
    }
});

function filterCards(inputValue) {
    if (inputValue != "") {
        resultsCounter = 0;
        carsCards.forEach((el, i) => {
            carsCards[i].style.display = "none";
            if (el.children[1] && el.children[1].textContent.toLowerCase().includes(inputValue.toLowerCase()) == true) {
                carsCards[i].style.display = "block";
                resultsCounter++;
            }
        });
        numberOfResults.innerHTML = `(${resultsCounter})`;
    }
}
