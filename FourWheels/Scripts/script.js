const navigationBar = document.getElementById("nav-wrap");
document.body.onscroll = function () { fillNavbarOnScroll() };

function fillNavbarOnScroll() {
    console.log("fafa");
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