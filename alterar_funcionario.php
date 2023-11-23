<?php
include("db.php");
$id = "";
$nome_completo = "";
$login = "";

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $query = "SELECT * FROM funcionario WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $nome_completo = $row["nome_completo"];
        $login = $row["login"];
    } else {
        echo "Funcionário não foi encontrado.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_completo = $_POST["nome_completo"];
    $login = $_POST["login"];
    $query = "UPDATE funcionario SET nome_completo = '$nome_completo', login = '$login' WHERE id = $id";

    if (mysqli_query($conn, $query)) {
        header("Location: funcionario.php");
    } else {
        echo "Erro ao atualizar o funcionário: " . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Funcionário - Ocean Blue Hotel</title>
    <link rel="stylesheet" href="css/altfun.css">
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
        <h2>Alterar Funcionário</h2>
        <form action="alterar_funcionario.php?id=<?php echo $id; ?>" method="POST">
            <label for="nome_completo">Nome Completo:</label>
            <input type="text" name="nome_completo" value="<?php echo $nome_completo; ?>" required>
            <label for="login">Login:</label>
            <input type="text" name="login" value="<?php echo $login; ?>" required>
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