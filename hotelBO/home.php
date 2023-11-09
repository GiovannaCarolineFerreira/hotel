<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Ocean Blue Hotel</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="header">
        <h1><img src="img/hotel.png" width=45 height=45>Ocean Blue Hotel</h1>
        <p>Bem Vindo!</p>

        <form action="logout.php" method="post">
            <input type="submit" value="Logout">
        </form>

    </div>
    <div class="menu">
        <a href="quarto.php">
            <div class="icon"><img src="img/quarto.png" width=35 height=35>Quarto</div>
        </a>
        <a href="tipo_quarto.php">
            <div class="icon"><img src="img/beds.png" width=35 height=35>Tipo de Quarto</div>
        </a>
        <a href="reserva.php">
            <div class="icon"><img src="img/key.png" width=35 height=35>Reserva</div>
        </a>
        <a href="cliente.php">
            <div class="icon"><img src="img/client.png" width=45 height=45>Cliente</div>
        </a>
        <a href="funcionario.php">
            <div class="icon"><img src="img/employees.png" width=35 height=35>Funcionário</div>
        </a>
    </div>
    <footer>
        <div class="footer">
        <p>© 2023 Copyright Ocean Blue</p>
        </div>
    </footer>
</body>

</html>