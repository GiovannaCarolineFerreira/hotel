<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Quarto - Ocean Blue Hotel</title>
    <link rel="stylesheet" href="css/add_quarto.css">
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
        <h2>Adicionar Quarto</h2>
        <form action="processar_quarto.php" method="POST">
            <label for="numero">Número:</label>
            <input type="number" name="numero" required>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" required>
            <label for="preco">Preço:</label>
            <input type="text" name="preco" required>
            <label for="tipo_quarto">Tipo de Quarto:</label>
            <select name="tipo_quarto" required>
                <?php
                include("db.php");
                $query = "SELECT * FROM tipo_quarto";
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value='" . $row["id"] . "'>" . $row["descricao"] . "</option>";
                    }
                }
                mysqli_close($conn);
                ?>
            </select>
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