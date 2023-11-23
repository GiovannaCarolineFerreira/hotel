<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Funcionário - Ocean Blue Hotel</title>
    <link rel="stylesheet" href="css/add_funcionario.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="header">
        <h1><a href="home.php">Ocean Blue Hotel</a></h1>
    </div>
    <a href="/hotelbo/home.php">Go Back</a>
    <div class="menu">
    </div>
    <div class="content">
        <h2>Adicionar Funcionário</h2>
        <form action="processar_funcionario.php" method="POST">
            <label for="nome_completo">Nome Completo:</label>
            <input type="text" name="nome_completo" required>
            <label for="login">Login:</label>
            <input type="text" name="login" required>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" required>
            <button type="submit">Salvar</button>
        </form>
    </div>
    <footer>
        <div class="footer">
        <p>© 2023 Copyright Ocean Blue</p>
        </div>
    </footer>
</body>

</html>