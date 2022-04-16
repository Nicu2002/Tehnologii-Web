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
            <li style="display: flex">
                <?php
                    if(isset($_SESSION["logged"]) && isset($_SESSION["login"]) && $_SESSION["logged"] == true){
                        $login = $_SESSION["login"];
                        echo "
                            <a href='#' class='log_in-button' style='height: max-content'>$login</a>
                            <form action='logout.php'>
                                <button class='logoutBtn' type='submit' style='background: transparent; outline: none; border: none; margin: 2px 20px'><img src='Img/logout.png' alt='loguot' style='width: 25px;cursor: pointer'></button>
                            </form>  
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