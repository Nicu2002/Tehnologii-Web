<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/layout.css">
    <link rel="stylesheet" href="Css/pages/main-page.css">
    <link rel="stylesheet" href="Css/components/cards/car-cards.css">
    <link rel="stylesheet" href="Css/components/cards/accesories-card.css">
    <title>4Wheels</title>
</head>
<body>
    
    <?php require "templates/nav-bar.php" ?>

    <section id="porche-slider">
        <div class="slider-carrousel">
            <img src="Img/porche-slider/porche-992.jpg" alt="">
            <img src="Img/porche-slider/porche-turbo-gt.jpg" alt="">
            <img src="Img/porche-slider/porsche-911-gt3.png" alt="">
        </div>
        <div class="slider-arrows">
            <img src="Img/porche-slider/white-arrow-png-41963.png" alt="">
            <img src="Img/porche-slider/white-arrow-png-41963.png" alt="">
        </div>
        <div id="slider-points">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </section> 
    <section id="top-offers-section">
        <h2 class="section-title">Top offers</h2>
        <div class="top-offer-cards">
            <div class="car-card">
                <a href=""><img src="Img/cars/car1.jpg" alt="" class="card-img"></a>
                <h3 class="card-title">Mercedes GLC 250</h3>
                <div class="card-details">
                    <p>Year :</p>
                    <p>Power :</p>
                    <p>Fuel :</p>
                    <p>Transmission: </p>
                </div>
                <p class="card-price">56.000€</p>
            </div>
            <div class="car-card">
                <a href=""><img src="Img/cars/car1.jpg" alt="" class="card-img"></a>
                <h3 class="card-title">Mercedes GLC 250</h3>
                <div class="card-details">
                    <p>Year :</p>
                    <p>Power :</p>
                    <p>Fuel :</p>
                    <p>Transmission: </p>
                </div>
                <p class="card-price">56.000€</p>
            </div>
            <div class="car-card">
                <a href=""><img src="Img/cars/car1.jpg" alt="" class="card-img"></a>
                <h3 class="card-title">Mercedes GLC 250</h3>
                <div class="card-details">
                    <p>Year :</p>
                    <p>Power :</p>
                    <p>Fuel :</p>
                    <p>Transmission: </p>
                </div>
                <p class="card-price">56.000€</p>
            </div>
            <div class="car-card">
                <a href=""><img src="Img/cars/car1.jpg" alt="" class="card-img"></a>
                <h3 class="card-title">Mercedes GLC 250</h3>
                <div class="card-details">
                    <p>Year :</p>
                    <p>Power :</p>
                    <p>Fuel :</p>
                    <p>Transmission: </p>
                </div>
                <p class="card-price">56.000€</p>
            </div>    
        </div>
    </section>
    <section id="accessories-section">
        <h2 class="section-title">Accessories</h2>
        <div class="top-offer-cards">
            <div class="accessories-card">
                <a href=""><img src="Img/accesories/car-accessories-vacuum.jpg" alt="" class="card-img"></a>
                <h3 class="card-title">Vacuum cleaner</h3>
                <p class="card-price">75€</p>
            </div>
            <div class="accessories-card">
                <a href=""><img src="Img/accesories/car-accessories-vacuum.jpg" alt="" class="card-img"></a>
                <h3 class="card-title">Vacuum cleaner</h3>
                <p class="card-price">75€</p>
            </div>
            <div class="accessories-card">
                <a href=""><img src="Img/accesories/car-accessories-vacuum.jpg" alt="" class="card-img"></a>
                <h3 class="card-title">Vacuum cleaner</h3>
                <p class="card-price">75€</p>
            </div>
            <div class="accessories-card">
                <a href=""><img src="Img/accesories/car-accessories-vacuum.jpg" alt="" class="card-img"></a>
                <h3 class="card-title">Vacuum cleaner</h3>
                <p class="card-price">75€</p>
            </div>
        </div>
    </section>
    <section id="parteners-section">
        <h2 class="section-title">Our parteners</h2>
        <div id="parteners-wrap">
            <img src="Img/partners/parteners-toyota.png" alt="" class="parteners-logo">
            <img src="Img/partners/parteners-toyota.png" alt="" class="parteners-logo">
            <img src="Img/partners/parteners-toyota.png" alt="" class="parteners-logo">
            <img src="Img/partners/parteners-toyota.png" alt="" class="parteners-logo">
            <img src="Img/partners/parteners-toyota.png" alt="" class="parteners-logo">
            <img src="Img/partners/parteners-toyota.png" alt="" class="parteners-logo">
            <img src="Img/partners/parteners-toyota.png" alt="" class="parteners-logo">
            <img src="Img/partners/parteners-toyota.png" alt="" class="parteners-logo">
        </div>
    </section>
    
    <?php require "templates/footer.php" ?>

    <script src="Scripts/script.js"></script>
    <script src="Scripts/porche-slider.js"></script>
</body>
</html>