<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas - Ocean Blue Hotel</title>
    <link rel="stylesheet" href="css/reserva.css">
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
        <h2>Reservas</h2>
        <a href="adicionar_reserva.php" class="add-button">Adicionar Reserva</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tipo de Quarto</th>
                    <th>Nome do Cliente</th>
                    <th>Forma de Pagamento</th>
                    <th>Data de Entrada</th>
                    <th>Data de Saída</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("db.php");

                $query = "SELECT reserva.id, tipo_quarto.descricao AS tipo_quarto, cliente.nome AS nome_cliente, DATE_FORMAT(reserva.data_entrada, '%d/%m/%Y') AS data_entrada, "
                         ."DATE_FORMAT(reserva.data_saida, '%d/%m/%Y') AS data_saida, reserva.forma_pagamento, reserva.preco AS preco_quarto FROM reserva "
                         ."INNER JOIN tipo_quarto ON reserva.tipo_quarto = tipo_quarto.id "
                         ." INNER JOIN cliente ON reserva.nome_cliente = cliente.id";

                $result = mysqli_query($conn, $query);

                if ($result) {
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $row["id"] . "</td>";
                            echo "<td>" . $row["tipo_quarto"] . "</td>";
                            echo "<td>" . $row["nome_cliente"] . "</td>";
                            echo "<td>" . $row["forma_pagamento"] . "</td>";
                            echo "<td>" . $row["data_entrada"] . "</td>";
                            echo "<td>" . $row["data_saida"] . "</td>";
                            echo "<td>" . $row["preco_quarto"] . "</td>";
                            echo "<td>

                    <a href='alterar_reserva.php?id=" . $row["id"] . "'>Alterar</a>
                    <a href='excluir_reserva.php?id=" . $row["id"] . "'>Excluir</a>
                  </td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='8'>Nenhuma reserva foi encontrada.</td></tr>";
                    }
                } else {
                    echo "Erro na consulta: " . mysqli_error($conn);
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