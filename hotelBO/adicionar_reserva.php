<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Reserva - Ocean Blue Hotel</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="header">
<h1><a href="home.php">Ocean Blue Hotel</a></h1>
    </div>
    <div class="menu">
         

    <div class="content">
        <h2>Adicionar Reserva</h2>
        <form action="processar_reserva.php" method="POST">
            <label for="tipo_quarto">Tipo de Quarto:</label>
            <label for="nome_cliente">Nome do Cliente:</label>
            <label for="data_entrada">Data de Entrada:</label>
            <input type="date" name="data_entrada" required>
            <label for="data_saida">Data de Saída:</label>
            <input type="date" name="data_saida" required>
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
