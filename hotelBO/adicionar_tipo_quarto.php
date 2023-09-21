<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Tipo de Quarto - Ocean Blue Hotel</title>
    <link rel="stylesheet" href="css/tpquarto.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="header">
<h1><a href="home.php">Ocean Blue Hotel</a></h1>
    </div>
    <div class="menu">
    <div class="content">
        <h2>Adicionar Tipo de Quarto</h2>
        <form action="processar_tipo_quarto.php" method="POST">
            <label for="descricao">Descrição:</label>
            <input type="text" name="descricao" required>
            <label for="codigo">Código:</label>
            <input type="text" name="codigo" required>
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
