<?php
session_start();
if(isset($_SESSION['login'])){
    header("Location: latihan.php");
    exit;
}
require 'functions.php';
if(isset($_POST['login'])){
    $login = login($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login-style.css">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h1>Login</h1>
                    <?php if(isset($login['error'])) : ?>
                        <p style="color:red; font-style:italic"><?= $login['pesan']; ?></p>
                    <?php endif; ?>
        <form action="" method="POST">
        
        <div class="input-group">
            <label>Username</label>
            <Input type="text" name="username" autofocus autocomplete="off" required>
        </div>
        <div class="input-group">
            <label>Password</label>
            <Input type="password" name="password" required>
        </div>
        <div class="button-group">
            <button type="submit" name="login">Login</button>
            <button><a href="registrasi.php">Daftar</a></button>
        </div>

            </form>
        </div>
    </div>
</body>
</html>