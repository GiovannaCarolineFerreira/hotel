<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionários - Ocean Blue Hotel</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="header">
    <h1><a href="home.php">Ocean Blue Hotel</a></h1>
    </div>
    <div class="menu">     
    </div>
    <div class="content">
        <h2>Funcionários</h2>
        <a href="adicionar_funcionario.php" class="add-button">Adicionar Funcionário</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome Completo</th>
                    <th>Login</th>
                    <th>Senha</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("db.php");

                $query = "SELECT * FROM funcionario";
                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["nome_completo"] . "</td>";
                        echo "<td>" . $row["login"] . "</td>";
                        echo "<td>" . $row["senha"] . "</td>";
                        echo "<td>
                                <a href='alterar_funcionario.php?id=" . $row["id"] . "'>Alterar</a>
                                <a href='excluir_funcionario.php?id=" . $row["id"] . "'>Excluir</a>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Nenhum funcionário encontrado.</td></tr>";
                }

                mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </div>
    <footer>
     <div class="footer">
      <p>© 2023 Copyright: Giovanna & Giovana</p>
     </div>
   </footer>
</body>
</html>

