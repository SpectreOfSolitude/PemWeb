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
        <h4 id="tagline">ACCOUNT REGISTRATION</h4>
        <form class="login-wrapper" action="{{ route('register.user') }}" method="post">
            @csrf
            <div>
                <!-- <label for="identity">username</label> -->
                <input type="text" placeholder="username" class="input-box" id ="name" name="name"
                @error('name') is invalid @enderror
                >
                @error('name')
                <small>{{$message}}</small>
            @enderror 
            </div>
            <div>
                <!-- <label for="identity">username</label> -->
                <input type="text" placeholder="email" class="input-box" id ="email" name="email">
            </div>
            <div>
                <!-- <label for="chant">password</label> -->
                <input type="password" placeholder="password" class="input-box" id ="password" name="password">
            </div>
            <div>
                <!-- <label for="chant">password</label> -->
                <input type="password" placeholder="confirm password" class="input-box" name="confirmPassword">
            </div>
            <div class="remember-forgot">
                <label class="remember-checkbox"> <input type="checkbox"> Remember me</label>
                <a href="#">Forgot Password?</a>
            </div>
            <button type="submit" class="btn" id="loginButton">Register Now</button>
            <label class="register-link">Already have an account? <a id="login-here" href="{{ asset('/login') }}"> 
                Log in here</a></label>
               
        </form>
    </div>

</body>

</html>