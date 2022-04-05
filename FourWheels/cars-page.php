<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/layout.css">
    <link rel="stylesheet" href="Css/components/cards/car-cards.css">
    <link rel="stylesheet" href="Css/components/search-sort-bar.css">
    <link rel="stylesheet" href="Css/pages/cars-page.css">
    <title>Cars</title>
</head>
<body>
    <?php require "templates/nav-bar.php" ?>
    <div id="search-box">
        <form action="">
            <input id="search-bar" type="text" placeholder="Search car">
        </form>
        <div id="sort-menu">
            <p>(9)</p>
            <p>Sort by :</p>
            <ul id="sort-options">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>
    <section id="cars-cards">
        <aside id="cars-filter">
        
        </aside> 
        <div class="cards-grid"></div>
    </section>
    <?php require "templates/footer.php" ?>

    <script src="Scripts/car-cards.js"></script>
    <script src="Scripts/script.js"></script>
</body>
</html>