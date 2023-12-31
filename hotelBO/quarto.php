<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quartos - Ocean Blue Hotel</title>
    <link rel="stylesheet" href="css/quarto.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
       <form action="logout.php" method="post">
            <input type="submit" value="Logout">
        </form>
    <div class="header">
        <h1><a href="home.php">Ocean Blue Hotel</a></h1>
        <p></p>
    </div>
    <a href="/hotelbo/home.php">Go Back</a>

    <div class="menu">
    </div>
    <div class="content">
        <h2>Quartos</h2>
        <a href="adicionar_quarto.php" class="add-button">Adicionar Quarto</a>
        <table>
            <thead>
                <tr>
                    <th>Número</th>
                    <th>Nome</th>
                    <th>Preço (diária)</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("db.php");

                $query = "SELECT * FROM quarto";
                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row["numero"] . "</td>";
                        echo "<td>" . $row["nome"] . "</td>";
                        echo "<td>" . $row["preco"] . "</td>";
                        echo "<td>
                                <a href='alterar_quarto.php?numero=" . $row["numero"] . "'>Alterar</a>
                                <a href='excluir_quarto.php?numero=" . $row["numero"] . "'>Excluir</a>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Nenhum quarto foi encontrado.</td></tr>";
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