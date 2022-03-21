'use strict';

const carsCards = document.querySelectorAll(".car-card");
const carsTitles = document.querySelectorAll(".card-title");

const inputField = document.querySelector("#search-bar");

let inputValue;
let resultsCounter;

const numberOfResults = document.querySelector("#sort-menu p");

inputField.addEventListener("input", (event) => {
    inputValue = inputField.value;
    filterCards(inputValue);

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
    else {
        carsCards.forEach((el, i) => {
            carsCards[i].style.display = "block";
        });
    }
}
