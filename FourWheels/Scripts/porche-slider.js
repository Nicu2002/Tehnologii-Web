"use strict";

const sliderWrap = document.querySelector(".slider-carrousel");
const sliderImgs = sliderWrap.querySelectorAll("img");

const leftBtn = document.querySelector(".slider-arrows img");
const rightBtn = document.querySelector(".slider-arrows img:last-child");

const imgLengh = window.getComputedStyle(sliderImgs[0]).width.slice(0, -2);

const sliderPoints = document.querySelectorAll("#slider-points div");

let counter = 0;

sliderPoints[counter].style.opacity = "100%";

rightBtn.addEventListener("click", () => {
    if (counter != sliderImgs.length - 1) {
        counter++;
        sliderWrap.style.transform = `translateX(-${(counter - 1) * imgLengh}px)`;
    }
    else {
        counter = 0;
        sliderWrap.style.transform = `translateX(${(counter + 1) * imgLengh}px)`;
    }

    sliderPoints.forEach(point => {
        point.style.opacity = "20%";
    });

    sliderPoints[counter].style.opacity = "100%";
});

leftBtn.addEventListener("click", () => {
    if (counter != 0) {
        counter--;
        sliderWrap.style.transform = `translateX(${-(counter - 1) * imgLengh}px)`;
    }
    else {
        counter = sliderImgs.length - 1;
        sliderWrap.style.transform = `translateX(-${(counter - 1) * imgLengh}px)`;
    }

    sliderPoints.forEach(point => {
        point.style.opacity = "20%";
    });

    sliderPoints[counter].style.opacity = "100%";
});
