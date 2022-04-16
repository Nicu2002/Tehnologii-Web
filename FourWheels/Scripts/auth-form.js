'use strict';

const forms = document.querySelectorAll(".auth-form");
const formsBtns = document.querySelectorAll(".form-switcher");
const activeLine = document.querySelector(".activeLine");

formsBtns.forEach(btn => {
    btn.addEventListener("click", () => {
        if (!btn.classList.contains("active-btn")) {
            formsBtns.forEach(el => {
                el.classList.toggle("active-btn");
            });
            forms.forEach(form => {
                form.classList.toggle("hide");
            });
            activeLine.classList.toggle("active-line-translate");
        }
    });
});