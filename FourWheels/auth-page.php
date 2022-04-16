<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Css/layout.css">
    <link rel="stylesheet" href="Css/pages/auth-page.css">
    <title>auth</title>
</head>
<body>
    <?php require "templates/nav-bar.php" ?>
    <div id="auth-reg-form">
        <div id="antet">
            <h2 id="sign-in-header" class="form-switcher active-btn">SIGN IN</h2>
            <h2 id="register-header" class="form-switcher">REGISTER</h2 id="sign-in-header">
            <div id="active-line"></div>
        </div>
        <form action="server.php" method="get" id="sign-in" class="auth-form" data-info="log">
            <input type="text" placeholder="login" name="login">
            <input type="password" placeholder="password" name="password">
            <button type="submit">LOG IN</button>

            <a id="forgot_pass" href="">Forgot Password?</a>
            <?php 
                if(isset($_SESSION["authSucces"]) && $_SESSION["authSucces"] == false) {
                    echo "<p style='color: red; font-size: 12px; margin-top: 10px'>Wrong login or password!</p>";
                    $_SESSION["authSucces"] = true;
                }
            ?>
        </form>

        <form action="reg-user.php" method="post" id="sign-up" class="auth-form hide" data-info="reg">
            <input type="text" placeholder="email" name="email" id="reg-email">
            <input type="text" placeholder="login" name="login" id="reg-login">
            <input type="password" placeholder="password" name="password" id="reg-pass"></input>
            <img src="Img/show.png" alt="show" class="show-pass-btn">
            <button type="submit" disabled=true style="background-color: #b36f6b" id="regBtn">REGISTER</button>
            <?php 
                if(isset($_SESSION["regSucces"]) && $_SESSION["regSucces"] == false) {
                    echo "<p style='color: red; font-size: 12px; margin-top: 10px'>User already exist!</p>";
                    $_SESSION["regSucces"] = true;
                }
            ?>
        </form>

    </div>

    <?php require "templates/footer.php" ?>
    <script src="Scripts/auth-form.js"></script>
</body>
</html>
