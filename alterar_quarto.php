<?php
include("db.php");
$numero = "";
$nome = "";
$preco = "";

if (isset($_GET["numero"])) {
    $numero = $_GET["numero"];
    $query = "SELECT * FROM quarto WHERE numero = $numero";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $nome = $row["nome"];
        $preco = $row["preco"];
    } else {
        echo "Quarto não encontrado.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $query = "UPDATE quarto SET nome = '$nome', preco = '$preco' WHERE numero = $numero";

    if (mysqli_query($conn, $query)) {
        header("Location: quarto.php");
    } else {
        echo "Erro ao atualizar o quarto: " . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Quarto - Ocean Blue Hotel</title>
    <link rel="stylesheet" href="css/altquarto.css">
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
        <h2>Alterar Quarto</h2>
        <form action="alterar_quarto.php?numero=<?php echo $numero; ?>" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" value="<?php echo $nome; ?>" required>
            <label for="preco">Preço:</label>
            <input type="text" name="preco" value="<?php echo $preco; ?>" required>
            <label for="tipo_quarto">Tipo de Quarto:</label>
            <select name="tipo_quarto" required>
                <?php
                include("db.php");
                $query = "SELECT * FROM tipo_quarto";
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $selected = ($row["id"] == $quarto["tipo_quarto"]) ? "selected" : "";
                        echo "<option value='" . $row["id"] . "' " . $selected . ">" . $row["descricao"] . "</option>";
                    }
                }
                mysqli_close($conn);
                ?>
            </select>
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