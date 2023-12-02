<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo_quarto = $_POST["tipo_quarto"];
    $nome_cliente = $_POST["nome_cliente"];
    $data_entrada = $_POST["data_entrada"];
    $data_saida = $_POST["data_saida"];
    $forma_pagamento = $_POST["forma_pagamento"];
    $preco = $_POST["preco"];

    $query = "INSERT INTO reserva (tipo_quarto, nome_cliente, data_entrada, data_saida, forma_pagamento, preco)
              VALUES ($tipo_quarto, $nome_cliente, '$data_entrada', '$data_saida', '$forma_pagamento', '$preco')";

    if (mysqli_query($conn, $query)) {
        header("Location: reserva.php");
    } else {
        echo "Erro ao adicionar a reserva: " . mysqli_error($conn);
    }
}
$query_tipos_quarto = "SELECT id, descricao FROM tipo_quarto";
$result_tipos_quarto = mysqli_query($conn, $query_tipos_quarto);

$query_clientes = "SELECT id, nome FROM cliente";
$result_clientes = mysqli_query($conn, $query_clientes);

//$query_quartos = "SELECT id, preco FROM quarto";
//$result_quartos = mysqli_query($conn, $query_quartos);

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Reserva - Ocean Blue Hotel</title>
    <link rel="stylesheet" href="css/add_funcionario.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="overflow-hidden" style="background: rgb(228,233,241);
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

    <div class="flex items-center justify-center flex-col h-screen">
        <h1 class="mb-6 text-3xl font-bold">Adicionar Reserva:</h1>
        <div class="w-full max-w-md">
            <form action="adicionar_reserva.php" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-32" method="POST">

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="tipo_quarto">
                        Tipo de Quarto:
                    </label>
                    <select name="tipo_quarto" class="w-full p-2 border rounded" required>
                        <?php
                        while ($row = mysqli_fetch_assoc($result_tipos_quarto)) {
                            echo "<option value='" . $row["id"] . "'>" . $row["descricao"] . "</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="nome_cliente">
                        Nome do Cliente:
                    </label>
                    <select name="nome_cliente" class="w-full p-2 border rounded" required>
                        <?php
                        while ($row = mysqli_fetch_assoc($result_clientes)) {
                            echo "<option value='" . $row["id"] . "'>" . $row["nome"] . "</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="forma_pagamento">
                        Forma de Pagamento:
                    </label>
                    <input type="text" name="forma_pagamento" class="w-full p-2 border rounded" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="data_entrada">
                        Data de Entrada:
                    </label>
                    <input type="date" name="data_entrada" class="w-full p-2 border rounded" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="data_saida">
                        Data de Saída:
                    </label>
                    <input type="date" name="data_saida" class="w-full p-2 border rounded" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="preco">
                        Preço:
                    </label>
                    <input type="text" name="preco" class="w-full p-2 border rounded" required>
                </div>

                <div class="flex items-center justify-center mt-6">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        Adicionar Reserva
                    </button>
                </div>
            </form>
        </div>
    </div>

    <footer class="fixed bottom-0 left-0 right-0 bg-white p-4 text-center">
  <p class="text-gray-500 text-sm font-bold">
    <i class="fas fa-hotel text-blue-500"></i> Hotel Blue Ocean - Todos os direitos reservados.
  </p>
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