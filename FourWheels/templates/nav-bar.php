<?php session_start(); ?>
<nav>
    <div id="nav-wrap">
        <a id="logo" class="nav-bar-links" href="index.php">4Wheels</a>
        <ul class="nav-bar">
            <li>
                <a href="cars-page.php" class="nav-bar-links">Cars</a>
            </li>
            <li>
                <a href="accesories-page.php" class="nav-bar-links">Accesories</a>
            </li>
            <li>
                <a href="wheels-page.php" class="nav-bar-links">Wheels</a>
            </li>
            <li>
                <a href="services-page.php" class="nav-bar-links">Services</a>
            </li>
            <li>
                <?php
                    if(isset($_SESSION["logged"]) && isset($_SESSION["login"])){
                        $login = $_SESSION["login"];
                        echo "
                            <a href='auth-page.php' class='log_in-button'>$login</a>
                            <a href='index.php' class='log_in-button' id='logout-btn' style='background-color: transparent'><img src='Img/logout.png' alt='loguot' style='width: 25px'></a>
                        ";
                    } 
                    else {
                        echo "<a href='auth-page.php' class='log_in-button'>Log in</a>";
                    }
                ?>
            </li>
        </ul>
    </div> 
</nav>