<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo_quarto = $_POST["tipo_quarto"];
    $nome_cliente = $_POST["nome_cliente"];
    $data_entrada = $_POST["data_entrada"];
    $data_saida = $_POST["data_saida"];
    $forma_pagamento = $_POST["forma_pagamento"];
    $preco = $_POST["preco"];

    $query = "INSERT INTO reserva (tipo_quarto, nome_cliente, data_entrada, data_saida, forma_pagamento, preco)
              VALUES ($tipo_quarto, $nome_cliente, '$data_entrada', '$data_saida', '$forma_pagamento', '$preco')";

    if (mysqli_query($conn, $query)) {
        header("Location: reserva.php");
    } else {
        echo "Erro ao adicionar a reserva: " . mysqli_error($conn);
    }
}
$query_tipos_quarto = "SELECT id, descricao FROM tipo_quarto";
$result_tipos_quarto = mysqli_query($conn, $query_tipos_quarto);

$query_clientes = "SELECT id, nome FROM cliente";
$result_clientes = mysqli_query($conn, $query_clientes);

$query_quartos = "SELECT numero, preco FROM quarto";
$result_quartos = mysqli_query($conn, $query_quartos);

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Tipo de Quarto - Ocean Blue Hotel</title>
    <link rel="stylesheet" href="css/tpquarto.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="header">
        <h1><a href="home.php">Ocean Blue Hotel</a></h1>
    </div>
    <a href="/hotelbo/home.php">Go Back</a>
    <div class="menu">
        <div class="content">
            <h2>Adicionar Reserva</h2>
            <form action="adicionar_reserva.php" method="POST">
                <label for="tipo_quarto">Tipo de Quarto:</label>
                <select name="tipo_quarto" required>
                    <?php
                    while ($row = mysqli_fetch_assoc($result_tipos_quarto)) {
                        echo "<option value='" . $row["id"] . "'>" . $row["descricao"] . "</option>";
                    }
                    ?>
                </select>

                <label for="nome_cliente">Nome do Cliente:</label>
                <select name="nome_cliente" required>
                    <?php
                    while ($row = mysqli_fetch_assoc($result_clientes)) {
                        echo "<option value='" . $row["id"] . "'>" . $row["nome"] . "</option>";
                    }
                    ?>
                </select>

                <label for="forma_pagamento">Forma de Pagamento:</label>
                <input type="text" name="forma_pagamento" required>

                <label for="data_entrada">Data de Entrada:</label>
                <input type="date" name="data_entrada" required>

                <label for="data_saida">Data de Saída:</label>
                <input type="date" name="data_saida" required>

                <label for="preco">Preço:</label>
                <select name="preco" required>
                    <?php
                    while ($row = mysqli_fetch_assoc($result_quartos)) {
                        echo "<option value='" . $row["numero"] . "'>" . $row["preco"] . "</option>";
                    }
                    ?>
                </select>

                <button type="submit">Adicionar Reserva</button>
            </form>
        </div>
        <footer>
            <div class="footer">
            <p>© 2023 Copyright Ocean Blue</p>
            </div>
        </footer>
</body>

</html>