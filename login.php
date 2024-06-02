<?php
require 'functions.php';
if(isset($_POST['login'])){
    login($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h3>Form Login</h3>
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
    </ul>

    </form>
</body>
</html>