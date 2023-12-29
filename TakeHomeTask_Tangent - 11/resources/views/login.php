<?php
    
session_start();

// VERIFY
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if($user === 'akascupu' && $pass === '123'){
        $_SESSION['username'] = $user;
        header("location: Home/index.php");
        exit();
    }
    else{
        echo "Username atau password salah.";
    }
}
?>