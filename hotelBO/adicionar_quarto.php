<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Quarto - Ocean Blue Hotel</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="header">
<h1><a href="home.php">Ocean Blue Hotel</a></h1>
    </div>
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
