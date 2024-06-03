<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login-styles.css">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h1>Login</h1>
            <form>
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="button-group">
                    <button type="submit">Login</button>
                    <button type="button" onclick="daftar()">Daftar</button>
                </div>
            </form>
        </div>
    </div>
    <script src="login-script.js"></script>
</body>
</html>
