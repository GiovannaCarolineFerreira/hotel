<?php
include("db.php");

$id = "";
$nome = "";
$cidade = "";
$telefone = "";
$email = "";

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $query = "SELECT * FROM cliente WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $nome = $row["nome"];
        $cidade = $row["cidade"];
        $telefone = $row["telefone"];
        $email = $row["email"];
    } else {
        echo "Cliente não encontrado.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $cidade = $_POST["cidade"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];

    $query = "UPDATE cliente SET nome = '$nome', cidade = '$cidade', telefone = '$telefone', email = '$email' WHERE id = $id";

    if (mysqli_query($conn, $query)) {
        header("Location: cliente.php");
    } else {
        echo "Erro ao atualizar o cliente: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Cliente - Ocean Blue Hotel</title>
    <link rel="stylesheet" href="css/altcliente.css">
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
        <h2>Alterar Cliente</h2>
        <form action="alterar_cliente.php?id=<?php echo $id; ?>" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" value="<?php echo $nome; ?>" required>
            <label for="cidade">Cidade:</label>
            <input type="text" name="cidade" value="<?php echo $cidade; ?>" required>
            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" value="<?php echo $telefone; ?>" required>
            <label for="email">Email:</label>
            <input type="email" name="email" value="<?php echo $email; ?>" required>
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