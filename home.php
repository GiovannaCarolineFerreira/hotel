<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home</title>
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