<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Home</title>
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
