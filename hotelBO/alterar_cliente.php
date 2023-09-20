<?php
// Inclua o arquivo de configuração do banco de dados (db.php)
include("db.php");

// Inicialize variáveis
$id = "";
$nome = "";
$cidade = "";
$telefone = "";
$email = "";

// Verifique se o ID do cliente foi fornecido na URL
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Consulta para obter os dados do cliente com o ID especificado
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

// Processamento do formulário de alteração
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $cidade = $_POST["cidade"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    
    // Consulta para atualizar os dados do cliente
    $query = "UPDATE cliente SET nome = '$nome', cidade = '$cidade', telefone = '$telefone', email = '$email' WHERE id = $id";

    if (mysqli_query($conn, $query)) {
        // Redirecionar para a página de clientes após a alteração bem-sucedida
        header("Location: cliente.php");
    } else {
        echo "Erro ao atualizar o cliente: " . mysqli_error($conn);
    }
}

// Feche a conexão com o banco de dados
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Cliente - Ocean Blue Hotel</title>
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
      <p>© 2023 Copyright: Giovanna & Giovana</p>
     </div>
   </footer>
</body>
</html>
