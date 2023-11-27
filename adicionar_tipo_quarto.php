<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Quarto - Ocean Blue Hotel</title>
    <link rel="stylesheet" href="css/add_funcionario.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="overflow-hidden" style="background: rgb(228,233,241);
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

    <div class="flex items-center justify-center flex-col h-screen">
        <h1 class="mb-6 text-3xl font-bold">Adicionar Tipo de Quarto:</h1>
        <div class="w-full max-w-md">
            <form action="processar_tipo_quarto.php" class="bg-white shadow-md rounded px-10 pt-8 pb-6 mb-32" method="POST">

                <div class="mb-6">
                    <label class="block text-gray-700 text-sm mb-2" for="descricao">
                        Descrição:
                    </label>
                    <input class="shadow-md appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="descricao" type="text" name="descricao" required>
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 text-sm mb-2" for="codigo">
                        Código:
                    </label>
                    <input class="shadow-md appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="codigo" type="text" name="codigo" required>
                </div>

                <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Salvar
                </button>
            </form>
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