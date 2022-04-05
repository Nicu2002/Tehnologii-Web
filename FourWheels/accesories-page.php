<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/layout.css">
    <link rel="stylesheet" href="Css/components/cards/accesories-card.css">
    <link rel="stylesheet" href="Css/components/search-sort-bar.css">
    <link rel="stylesheet" href="Css/pages/accesories-page.css">
    <title>Accesories</title>
</head>
<body>
    
    <?php require "templates/nav-bar.php" ?>

    <div id="search-box">
        <form action="">
            <input type="text" placeholder="Search accesories">
        </form>
        <div id="sort-menu">
            <p>(9)</p>
            <p>Sort by :</p>
            <ul>
                <li>price ascendent</li>
                <li>price descendent</li>
                <li>date ascendent</li>
                <li>date descendent</li>
                <li>name descendent</li>
                <li>name ascendent</li>
            </ul>
        </div>
    </div>
    <section id="accessories-cards">
        <aside id="cars-filter">
        
        </aside> 
        <div class="cards-grid">
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
    
    <?php require "templates/footer.php" ?>

    <script src="Scripts/script.js"></script>
</body>
</html>