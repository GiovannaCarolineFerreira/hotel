<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Ocean Blue Hotel</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="login-container">
        <h2 text-align="center"><img src="img/hotel.png" width=45 height=45>Login</h2>
        <form action="processar_login.php" method="POST">
            <label for="username">Usuário:</label>
            <input type="text" name="username" required>
            <label for="password">Senha:</label>
            <input type="password" name="password" required>
            <button type="submit">Entrar</button>
        </form>
    </div>
    <footer>
        <div class="footer">
        <p>© 2023 Copyright Ocean Blue</p>
        </div>
    </footer>
</body>

</html>