<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo de Quarto - Ocean Blue Hotel</title>
    <link rel="stylesheet" href="css/reserva.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body style="background: rgb(228,233,241);
background: linear-gradient(90deg, rgba(228,233,241,1) 35%, rgba(231,234,236,1) 88%, rgba(240,244,246,1) 100%);">
    <nav class="bg-white p-4 flex items-center justify-between">
        <div class="flex items-center">
            <a href="home.php" class="text-lg text-xl">Blue Ocean Hotel</a>
        </div>

        <div class="md:hidden">
            <button id="menu-toggle" class="text-blue-500 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>

        <div class="hidden md:flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-4 text-lg">
            <a href="quarto.php">Quarto</a>
            <a href="tipo_quarto.php">Tipo de Quarto</a>
            <a href="reserva.php">Reserva</a>
            <a href="cliente.php">Cliente</a>
            <a href="funcionario.php">Funcionário</a>
        </div>

        <button id="logoutButton" class="hidden md:block bg-blue-500 text-white px-4 py-2 rounded-full text-lg" type="button">Logout</button>

        <div id="mobile-menu" class="hidden md:hidden absolute top-16 right-0 bg-white shadow-md mt-2 py-2 px-4">
            <a href="quarto.php" class="block py-1 text-lg">Quarto</a>
            <a href="tipo_quarto.php" class="block py-1 text-lg">Tipo de Quarto</a>
            <a href="reserva.php" class="block py-1 text-lg">Reserva</a>
            <a href="cliente.php" class="block py-1 text-lg">Cliente</a>
            <a href="funcionario.php" class="block py-1 text-lg">Funcionário</a>
            <button class="block bg-blue-500 text-white px-4 py-2 rounded-full mt-2 text-lg">Logout</button>
        </div>
    </nav>

    <div class="content mt-64 shadow-lg">
        <h2 class="text-2xl font-bold mb-4">Tipos de Quarto</h2>
        <div class="overflow-x-auto mx-auto">
            <table class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">ID</th>
                        <th class="py-2 px-4 border-b">Descrição</th>
                        <th class="py-2 px-4 border-b">Código</th>
                        <th class="py-2 px-4 border-b">Ações</th>
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
                            echo "<td class='py-2 px-4 border-b'>" . $row["id"] . "</td>";
                            echo "<td class='py-2 px-4 border-b'>" . $row["descricao"] . "</td>";
                            echo "<td class='py-2 px-4 border-b'>" . $row["codigo"] . "</td>";
                            echo "<td class='py-2 px-4 border-b'>
                                    <a href='alterar_tipo_quarto.php?id=" . $row["id"] . "' class='text-blue-500 mr-2'>Alterar</a>
                                    <a href='excluir_tipo_quarto.php?id=" . $row["id"] . "' class='text-red-500'>Excluir</a>
                                  </td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4' class='py-2 px-4 border-b'>Nenhum tipo de quarto encontrado.</td></tr>";
                    }
                    echo "<tr><td colspan='4' class='py-2 px-4 border-b'><a href='adicionar_tipo_quarto.php' class='text-green-500'>Adicionar Quarto</a></td></tr>";
                    mysqli_close($conn);
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <footer class="fixed bottom-0 left-0 right-0 bg-white p-4 text-center">
        <p class="text-gray-500 text-sm">Hotel Blue Ocean - Todos os direitos reservados.</p>
    </footer>

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