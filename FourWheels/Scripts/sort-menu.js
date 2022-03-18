"use strict";

const sortOptions = document.querySelector("#sort-menu").querySelectorAll("li");
const cardsWrap = document.querySelector(".cards-grid");
    
let menuStatus = false;

const options = ["name ascendent", "name descendent",
    "price ascendent", "price descendent",
    "date ascendent", "date descendent"];

class Card{
    constructor(el, title, price) {
        this.el = el;
        this.title = title;
        this.price = price;
    }
}

const carCards = document.querySelectorAll(".car-card");
const cardsObj = [];
carCards.forEach((el, i) => {
    cardsObj[i]= new Card(el, el.querySelector(".card-title").textContent, el.querySelector(".card-price").textContent.slice(0, -1)); 
});

console.log(cardsObj);


sortOptions.forEach((el, i) => {
    el.innerHTML = options[i];
    el.addEventListener("click", (event) => {
        if (menuStatus == true) {
            [options[i], options[5]] = [options[5], options[i]];

            sortCards(event.target.textContent);
            closeMenu();
            sortOptions.forEach((el, i) => {
                el.innerHTML = options[i];
            });
        }
        else {
            openMenu();
        }
    });
});

function openMenu() {
    for (let i = 0; i < 5; i++) { 
        sortOptions[i].style.transitionDuration = `${(5 - i)/10}s`; 
        sortOptions[i].style.transform = `translateY(${33 * (5 - i)}px)`;
    }
    menuStatus = true;
}

function closeMenu() {
    for (let i = 0; i < 5; i++) { 
        sortOptions[i].style.transitionDuration = "0.2s";
        sortOptions[i].style.transform = `translateY(0)`;
    }
    menuStatus = false;
}

function sortCards(option) {
    console.log(option);
    carCards.forEach(el => {
        el.remove();
    });
    switch (option) {
        case "price ascendent":
            cardsObj.sort((a, b) => (a.price - b.price));
            console.log(cardsObj);
            break;
        case "price descendent":
            cardsObj.sort((a, b) => (b.price - a.price));
            console.log(cardsObj);
            break;
        case "name ascendent":
            cardsObj.sort((a, b) => {
                if (a.title > b.title) {
                    return 1;
                }
                if (a.title < b.title) {
                    return -1;
                }
                return 0;
            });
            break;
        case "name descendent":
            cardsObj.sort((a, b) => {
                if (a.title < b.title) {
                    return 1;
                }
                if (a.title > b.title) {
                    return -1;
                }
                return 0;
            });
            break;
    }
    
    cardsObj.forEach(obj => {
        cardsWrap.appendChild(obj.el);
    });
}



