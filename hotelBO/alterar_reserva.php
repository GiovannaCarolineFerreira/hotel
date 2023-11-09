<?php
include("db.php");
$id = "";
$tipo_quarto = "";
$nome_cliente = "";
$data_entrada = "";
$data_saida = "";
$preco = "";

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $query = "SELECT * FROM reserva WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $tipo_quarto = $row["tipo_quarto"];
        $nome_cliente = $row["nome_cliente"];
        $data_entrada = $row["data_entrada"];
        $data_saida = $row["data_saida"];
        $preco = $row["preco"];

    } else {
        echo "Reserva não encontrada.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo_quarto = $_POST["tipo_quarto"];
    $nome_cliente = $_POST["nome_cliente"];
    $data_entrada = $_POST["data_entrada"];
    $data_saida = $_POST["data_saida"];
    $preco = $_POST["preco"];


    $query = "UPDATE reserva SET tipo_quarto = '$tipo_quarto', nome_cliente = '$nome_cliente', 
              data_entrada = '$data_entrada', data_saida = '$data_saida', preco = '$preco' WHERE id = $id";

    if (mysqli_query($conn, $query)) {
        header("Location: reserva.php");
    } else {
        echo "Erro ao atualizar a reserva: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Reserva - Ocean Blue Hotel</title>
    <link rel="stylesheet" href="css/altreserva.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="header">
        <h1><a href="home.php">Ocean Blue Hotel</a></h1>
        <p></p>
    </div>
    <a href="/hotelbo/home.php">Go Back</a>

    <div class="menu">
    </div>
    <div class="content">
        <h2>Alterar Reserva</h2>
        <form action="alterar_reserva.php?id=<?php echo $id; ?>" method="POST">
            <label for="tipo_quarto">Tipo de Quarto:</label>
            <input type="text" name="tipo_quarto" value="<?php echo $tipo_quarto; ?>" required>
            <label for="nome_cliente">Nome do Cliente:</label>
            <input type="text" name="nome_cliente" value="<?php echo $nome_cliente; ?>" required>
            <label for="data_entrada">Data de Entrada:</label>
            <input type="date" name="data_entrada" value="<?php echo $data_entrada; ?>" required>
            <label for="data_saida">Data de Saída:</label>
            <input type="date" name="data_saida" value="<?php echo $data_saida; ?>" required>
            <label for="preco">Preço:</label>
            <input type="text" name="preco" value="<?php echo $preco; ?>" required>
            <button type="submit">Salvar Alterações</button>
        </form>
    </div>
    <footer>
        <div class="footer">
        <p>© 2023 Copyright Ocean Blue</p>
        </div>
    </footer>
</body>

</html>