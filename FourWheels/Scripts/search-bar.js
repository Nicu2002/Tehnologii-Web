'use strict';

// const carsCards = document.querySelectorAll(".car-card");
// const carsTitles = carsCards.querySelectorAll(".card-title");

const inputField = document.querySelector("#search-bar");
const cards = document.querySelectorAll(".car-card");

let inputValue;

inputField.addEventListener("keypress", (event) => {
    if (event.keyCode === 13) {
        event.preventDefault();
        inputValue = inputField.value;
        // filterCards();
    }
});

function filterCards(inputValue) {
    
}

