<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/menu.css">
</head>
<body>
    <div class="bg-blur"></div>
    <div class="form">
        <form action="cek_login.php" method="POST" class="sub-form">
            <div class="upper-form">
                <h2>Login</h2>
                <label>Username</label><br>
                <input type="text" name="username"><br>
                <label>Password</label>
                <input type="password" name="password"><br>
                <div class="btn">
                    <button type="submit">login</button>
                </div>
            </div>
            <div class="button-form">
                <div style="margin-top: 2cm;">don't have an account?</div>
                <a href="signup.php" class="signup">sign up</a>
            </div>
        </form>
    </div>
</body>
</html>