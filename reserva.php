<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas - Ocean Blue Hotel</title>
    <link rel="stylesheet" href="css/reserva.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body style="background: rgb(228,233,241);
background: linear-gradient(90deg, rgba(228,233,241,1) 35%, rgba(231,234,236,1) 88%, rgba(240,244,246,1) 100%);">

    <nav class="bg-white p-4 flex items-center justify-between">
        <div class="flex items-center">
            <a href="home.php" class="text-lg text-xl">
                <i class="fas fa-hotel text-blue-500 text-black"></i> Blue Ocean Hotel
            </a>
        </div>

        <div class="md:hidden">
            <button id="menu-toggle" class="text-black focus:outline-none">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        <div class="hidden md:flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-4 text-lg">
            <a href="quarto.php"><i class="fas fa-bed text-black"></i> Quarto</a>
            <a href="tipo_quarto.php"><i class="fas fa-door-open text-black"></i> Tipo de Quarto</a>
            <a href="reserva.php"><i class="fas fa-calendar-alt text-black"></i> Reserva</a>
            <a href="cliente.php"><i class="fas fa-user text-black"></i> Cliente</a>
            <a href="funcionario.php"><i class="fas fa-users text-black"></i> Funcionário</a>
        </div>

        <button id="logoutButton" class="hidden md:block bg-blue-500 text-white px-4 py-2 rounded-full text-lg" type="button">
            <i class="fas fa-sign-out-alt"></i> Logout
        </button>

        <div id="mobile-menu" class="hidden md:hidden absolute top-16 right-0 bg-white shadow-md mt-2 py-2 px-4">
            <a href="quarto.php" class="block py-1 text-lg"><i class="fas fa-bed text-black"></i> Quarto</a>
            <a href="tipo_quarto.php" class="block py-1 text-lg"><i class="fas fa-door-open text-black"></i> Tipo de Quarto</a>
            <a href="reserva.php" class="block py-1 text-lg"><i class="fas fa-calendar-alt text-black"></i> Reserva</a>
            <a href="cliente.php" class="block py-1 text-lg"><i class="fas fa-user text-black"></i> Cliente</a>
            <a href="funcionario.php" class="block py-1 text-lg"><i class="fas fa-users text-black"></i> Funcionário</a>
            <button class="block bg-blue-500 text-white px-4 py-2 rounded-full mt-2 text-lg">
                <i class="fas fa-sign-out-alt"></i> Logout
            </button>
        </div>
    </nav>

    <div class="content mt-24 shadow-lg">
        <h2 class="text-2xl font-bold mb-4">Reservas:</h2>
        <div class="overflow-x-auto mx-auto">
            <table class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">ID</th>
                        <th class="py-2 px-4 border-b">Tipo de Quarto</th>
                        <th class="py-2 px-4 border-b">Nome do Cliente</th>
                        <th class="py-2 px-4 border-b">Forma de Pagamento</th>
                        <th class="py-2 px-4 border-b">Data de Entrada</th>
                        <th class="py-2 px-4 border-b">Data de Saída</th>
                        <th class="py-2 px-4 border-b">Preço</th>
                        <th class="py-2 px-4 border-b">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("db.php");
                    $query = "SELECT reserva.id, tipo_quarto.descricao AS tipo_quarto, cliente.nome AS nome_cliente, DATE_FORMAT(reserva.data_entrada, '%d/%m/%Y') AS data_entrada, "
                        . "DATE_FORMAT(reserva.data_saida, '%d/%m/%Y') AS data_saida, reserva.forma_pagamento, reserva.preco AS preco_quarto FROM reserva "
                        . "INNER JOIN tipo_quarto ON reserva.tipo_quarto = tipo_quarto.id "
                        . "INNER JOIN cliente ON reserva.nome_cliente = cliente.id";

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
                                echo "<td>$" . number_format($row["preco_quarto"], 2) . "</td>"; // Adicionando o símbolo $ e formatando o preço
                                echo "<td>
                <a href='alterar_reserva.php?id=" . $row["id"] . "' class='text-blue-500 flex flex-row items-center'><i class='fas fa-edit'></i> Alterar</a>
                <a href='excluir_reserva.php?id=" . $row["id"] . "' class='text-red-500 flex flex-row items-center'><i class='fas fa-trash-alt'></i> Excluir</a>
                                 </td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='8'>Nenhuma reserva foi encontrada.</td></tr>";
                        }
                    } else {
                        echo "Erro na consulta: " . mysqli_error($conn);
                    }

                    echo "<tr><td colspan='8' class='py-2 px-4 border-b text-center'><a href='adicionar_reserva.php' class='text-green-500'><i class='fas fa-plus'></i> Adicionar Reserva</a></td></tr>";

                    mysqli_close($conn);
                    ?>
                </tbody>
            </table>
        </div>
    </div>



    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>

    <script>
        document.getElementById('logoutButton').addEventListener('click', function() {
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'logout.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {
                window.location.href = 'login.php';
            };

            xhr.send();
        });
    </script>

</body>

</html>