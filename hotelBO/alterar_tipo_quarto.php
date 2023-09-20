<?php
include("db.php");
$id = "";
$descricao = "";
$codigo = "";

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $query = "SELECT * FROM tipo_quarto WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $descricao = $row["descricao"];
        $codigo = $row["codigo"];
    } else {
        echo "Tipo de Quarto não encontrado.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $descricao = $_POST["descricao"];
    $codigo = $_POST["codigo"];   
    $query = "UPDATE tipo_quarto SET descricao = '$descricao', codigo = '$codigo' WHERE id = $id";

    if (mysqli_query($conn, $query)) {
        header("Location: tipo_quarto.php");
    } else {
        echo "Erro ao atualizar o tipo de quarto: " . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Tipo de Quarto - Ocean Blue Hotel</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="header">
    <h1><a href="home.php">Ocean Blue Hotel</a></h1>
        <p></p>
    </div>
    <div class="menu">
    </div>
    <div class="content">
        <h2>Alterar Tipo de Quarto</h2>
        <form action="alterar_tipo_quarto.php?id=<?php echo $id; ?>" method="POST">
            <label for="descricao">Descrição:</label>
            <input type="text" name="descricao" value="<?php echo $descricao; ?>" required>
            <label for="codigo">Código:</label>
            <input type="text" name="codigo" value="<?php echo $codigo; ?>" required>
            <button type="submit">Salvar Alterações</button>
        </form>
    </div>
    <footer>
     <div class="footer">
      <p>© 2023 Copyright: Giovanna & Giovana</p>
     </div>
   </footer>
</body>
</html>
