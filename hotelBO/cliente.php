<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes - Ocean Blue Hotel</title>
    <link rel="stylesheet" href="css/cliente.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
       <form action="logout.php" method="post">
            <input type="submit" value="Logout">
        </form>
    <div class="header">
        <h1><a href="home.php"><img src="img/hotel.png" width=45 height=45>Ocean Blue Hotel</a></h1>
        <p></p>
    </div>
    <div class="menu">

    </div>
    <div class="content">
        <h2>Clientes</h2>
        <a href="adicionar_cliente.php" class="add-button">Adicionar Cliente</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Cidade</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("db.php");

                $query = "SELECT * FROM cliente";
                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["nome"] . "</td>";
                        echo "<td>" . $row["cidade"] . "</td>";
                        echo "<td>" . $row["telefone"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>
                                <a href='alterar_cliente.php?id=" . $row["id"] . "'>Alterar</a>
                                <a href='excluir_cliente.php?id=" . $row["id"] . "'>Excluir</a>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>Nenhum cliente foi encontrado.</td></tr>";
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