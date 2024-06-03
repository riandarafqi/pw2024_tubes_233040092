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
    <link rel="stylesheet" href="login-style.css">
</head>
<body>
    <h3>Form Login</h3>
    <?php if(isset($login['error'])) : ?>
        <p style="color:red; font-style:italic"><?= $login['pesan']; ?></p>
    <?php endif; ?>
    <form action="" method="POST">

    <ul>
        <li>
            <label>
                Username :
                <Input type="text" name="username" autofocus autocomplete="off" required>
            </label>
        </li>
        <li>
            <label>
                Password :
                <Input type="password" name="password" required>
            </label>
        </li>
        <li>
            <button type="submit" name="login">Login</button>
        </li>
        <li>
            <a href="registrasi.php">Daftar</a>
        </li>
    </ul>

    </form>
</body>
</html>