const navigationBar = document.getElementById("nav-wrap");
document.body.onscroll = function () { fillNavbarOnScroll() };

function fillNavbarOnScroll() {
    if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
        navigationBar.style.backgroundColor = "black";
        navigationBar.addEventListener("mouseover", function (event) {
            event.target.style.color = "#868e96";
        });
        navigationBar.addEventListener("mouseout", function (event) {
            event.target.style.color = "white";
        });
    }
    else {
        navigationBar.style.backgroundColor = "transparent";
        navigationBar.addEventListener("mouseover", function (event) {
            event.target.style.color = "black";
        });
        navigationBar.addEventListener("mouseout", function (event) {
            event.target.style.color = "white";
        });
    }
}

let sound = new Audio('Img/soundPopUp.mp3');
sound.volume = 0.1;

const openPopAppNode = document.createElement('div');

openPopAppNode.classList.add("openPopAppBtn");
openPopAppNode.innerHTML = `Subscribe`;
document.body.appendChild(openPopAppNode);

openPopAppNode.addEventListener("click", showPopUp);

function showPopUp() {
    const popUp = document.createElement('div');
    popUp.classList.add("popUpWindow");
    popUp.innerHTML = `
    <div class="closeX"><img src="Img/close.ico" alt="close" /></div>
    <h3>News Subscribe</h3>
    <form action="subscribe.php" method="post">
        <input id="name_popUp" type="text" placeholder="name" name="name"/>
        <input id="email_popUp" type="text" placeholder="email" name="email"/>
        <button id="popUpSubmit" type="submit" disabled=true>Subscribe</button>
    </form>
    `;
    document.body.appendChild(popUp);

    sound.play();

    document.querySelector(".closeX").addEventListener("click", () => {
        popUp.remove();
        sound.play();
    });

    const popUpInputName = document.querySelector("#name_popUp");
    const popUpInputEmail = document.querySelector("#email_popUp");
    const popUpSubmit = document.querySelector("#popUpSubmit");
    popUpInputName.focus();
    popUpInputName.addEventListener("blur", () => validateInput(popUpInputName, /^\S*$/));

    popUpInputEmail.addEventListener("input", () => validateInput(popUpInputEmail, /\S+@\S+\.\S+/));

    function validateInput(inputField, re) {
        if (!re.test(inputField.value)) {
            inputField.style.border = "2px red solid";
            inputField.focus();
            if (inputField == popUpInputEmail) {
                popUpSubmit.style.backgroundColor = "";
                popUpSubmit.disabled = true;
            }
        }
        else {
            inputField.style.border = "none";
            if (inputField == popUpInputEmail) {
                popUpSubmit.style.backgroundColor = "white";
                popUpSubmit.disabled = false;
            }
        }
    }
}








