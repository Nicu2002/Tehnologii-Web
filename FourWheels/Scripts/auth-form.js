'use strict';

const forms = document.querySelectorAll(".auth-form");
const formsBtns = document.querySelectorAll(".form-switcher");
const activeLine = document.querySelector("#active-line");
const showPassBtn = document.querySelector(".show-pass-btn");
const regBtn = document.querySelector("#regBtn");

const passInput = document.querySelector("#reg-pass");
const emailInput = document.querySelector("#reg-email");
const loginInput = document.querySelector("#reg-login");


formsBtns.forEach(btn => {
    btn.addEventListener("click", () => {
        if (!btn.classList.contains("active-btn")) {
            formsBtns.forEach(el => {
                el.classList.toggle("active-btn");
            });
            forms.forEach(form => {
                form.classList.toggle("hide");
            });
            activeLine.classList.toggle("active");
        }
        emailInput.focus();
    });
});

showPassBtn.addEventListener("click", () => {
    if (passInput.type == "password") {
        passInput.type = "text";
    }
    else {
        passInput.type = "password";
    }
    passInput.focus();
});

emailInput.addEventListener("blur", () => validateInput(emailInput, /\S+@\S+\.\S+/));
loginInput.addEventListener("blur", () => validateInput(loginInput, /\S+_\S+/));
passInput.addEventListener("input", () => {
    console.log(passInput.value.length);
    if (/^[A-Za-z]\w{7,14}$/.test(passInput.value)) {
        regBtn.style.backgroundColor = "#a83931";
        regBtn.disabled = false;
    }
    else {
        regBtn.style.backgroundColor = "#b36f6b";
        regBtn.disabled = true;
    }
});
    
function validateInput(inputField, re) {
    if (!re.test(inputField.value)) {
        inputField.style.border = "2px red solid";
        inputField.focus();
    }
    else {
        inputField.style.border = "none";
    }
}
