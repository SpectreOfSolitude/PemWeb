<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tangent</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>

<body>
    <?php
        require "login.php";
    ?>
    <h1 id="head">Tangent</h1>

    <div id="isi">
        <h4 id="tagline">Prove your worth!</h4>
        <form class="login-wrapper" action="login.php" method="post">
            <div>
                <!-- <label for="identity">username</label> -->
                <input type="text" placeholder="username" class="input-box" name="username">
            </div>
            <div>
                <!-- <label for="chant">password</label> -->
                <input type="password" placeholder="password" class="input-box" name="password">
            </div>
            <div class="remember-forgot">
                <label class="remember-checkbox"> <input type="checkbox"> Remember me</label>
                <a href="#">Forgot Password?</a>
            </div>
            <button type="submit" class="btn" id="loginButton">Login</button>
            <label class="register-link">Don't have an account? <a id="register-here" href="#"> Register
                    here</a></label>
        </form>
    </div>

</body>

</html>