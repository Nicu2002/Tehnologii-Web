'use strict';

const cardsContainer = document.querySelector(".cards-grid");
let card;

fetch("http://localhost:3000/cars")
    .then(data => data.json())
    .then(result => {
        for (let i = 0; i < result.length; i++) {
            card = document.createElement("div");
            card.classList.add("car-card");
            cardsContainer.appendChild(card);

            card.innerHTML = `
            <a href=""><img src=${result[i].images[0]} alt="" class="card-img"></a>
            <h3 class="card-title">${result[i].name}</h3>
            <div class="card-details">
                <p>Year : ${result[i].Year}</p>
                <p>Power : ${result[i].Power}</p>
                <p>Fuel : ${result[i].Fuel}</p>
                <p>Transmission: ${result[i].Transmision}</p>
            </div>
            <p class="card-price">${result[i].price}€</p>`;
        }
    }).then(() => {
        const sortScript = document.createElement("script");
        sortScript.src = "../Scripts/sort-menu.js";
        document.body.appendChild(sortScript);

        const searchScript = document.createElement("script");
        searchScript.src = "../Scripts/search-bar.js";
        document.body.appendChild(searchScript);
    });
 