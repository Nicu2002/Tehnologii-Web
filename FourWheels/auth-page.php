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
        <div>
            <h2 id="sign-in-header">SIGN IN</h2>
            <h2 id="register-header">REGISTER</h2id=sign-in-header>
            <div></div>
        </div>
        <form action="" id="sign-in">
            <input type="text" placeholder="login" name="login">
            <input type="text" placeholder="password" name="password">
            <button>LOG IN</button>

            <a id="forgot_pass" href="">Forgot Password?</a>
        </form>
    </div>

    <?php require "templates/footer.php" ?>
</body>
</html>
