"use strict";

const sortOptions = document.querySelector("#sort-menu").querySelectorAll("li");

let menuStatus = false;

const options = ["name ascendent", "name descendent",
    "date ascendent", "date descendent",
    "price ascendent", "price descendent"];

sortOptions.forEach((el, i) => {
    el.innerHTML = options[i];
    el.addEventListener("click", () => {
        if (menuStatus == true) {
            [options[i], options[5]] = [options[5], options[i]];
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
        sortOptions[i].style.transform = `translateY(${34 * (5 - i)}px)`;
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
