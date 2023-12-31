<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Quarto - Ocean Blue Hotel</title>
    <link rel="stylesheet" href="css/tipo_quarto.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="header">
        <h1><a href="home.php">Ocean Blue Hotel</a></h1>
        <p></p>
    </div>
    <div class="menu">
    <a href="/hotelbo/home.php">Go Back</a>

    </div>
    <div class="content">
        <h2>Tipos de Quarto</h2>
        <a href="adicionar_tipo_quarto.php" class="add-button">Adicionar Tipo de Quarto</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Descrição</th>
                    <th>Código</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("db.php");

                $query = "SELECT * FROM tipo_quarto";
                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["descricao"] . "</td>";
                        echo "<td>" . $row["codigo"] . "</td>";
                        echo "<td>
                                <a href='alterar_tipo_quarto.php?id=" . $row["id"] . "'>Alterar</a>
                                <a href='excluir_tipo_quarto.php?id=" . $row["id"] . "'>Excluir</a>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Nenhum tipo de quarto encontrado.</td></tr>";
                }

                mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </div>
    <footer>
        <div class="footer">
        <p>© 2023 Copyright Ocean Blue</p>
        </div>
    </footer>
</body>

</html>