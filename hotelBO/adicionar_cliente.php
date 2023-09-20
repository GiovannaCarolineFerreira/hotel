<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Cliente - Ocean Blue Hotel</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="header">
     <h1><a href="home.php">Ocean Blue Hotel</a></h1>
    </div>
    <div class="menu">

    </div>
    <div class="content">
        <h2>Adicionar Cliente</h2>
        <form action="processar_cliente.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" required>
            <label for="cidade">Cidade:</label>
            <input type="text" name="cidade" required>
            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" required>
            <label for="email">Email:</label>
            <input type="email" name="email" required>
            <button type="submit">Salvar</button>
        </form>
    </div>
    <footer>
     <div class="footer">
      <p>© 2023 Copyright: Giovanna & Giovana</p>
     </div>
   </footer>
</body>
</html>
