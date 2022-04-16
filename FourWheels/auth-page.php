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
            <div class="active-line activeLine"></div>
        </div>
        <form action="server.php" method="get" id="sign-in" class="auth-form" data-info="log">
            <input type="text" placeholder="login" name="login">
            <input type="text" placeholder="password" name="password">
            <button type="submit">LOG IN</button>

            <a id="forgot_pass" href="">Forgot Password?</a>
            <?php 
                if(isset($_SESSION["succes"]) && $_SESSION["succes"] == false) {
                    echo "<p style='color: red; font-size: 12px; margin-top: 10px'>Wrong login or password!</p>";
                    $_SESSION["succes"] = true;
                }
            ?>
        </form>

        <form action="post-data.php" method="post" id="sign-up" class="auth-form hide" data-info="reg">
            <input type="text" placeholder="email" name="email">
            <input type="text" placeholder="login" name="login">
            <input type="text" placeholder="password" name="password">
            <button type="submit">REGISTER</button>
        </form>

    </div>

    <?php require "templates/footer.php" ?>
    <script src="Scripts/auth-form.js"></script>
</body>
</html>
