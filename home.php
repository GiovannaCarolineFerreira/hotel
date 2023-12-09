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
<body>
   
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


<div class="bg-white dark:bg-gray-800 overflow-hidden relative lg:flex lg:items-center">
    <div class="w-full py-12 px-4 sm:px-6 lg:py-16 lg:px-8 z-20">
        <h2 class="text-3xl font-extrabold text-black dark:text-white sm:text-4xl">
            <span class="block">
                Descubra o conforto no
            </span>
            <span class="block text-blue-500">
                Blue Ocean Hotel
            </span>
        </h2>
        <p class="text-md mt-4 text-gray-400">
        "Descubra o refúgio à beira-mar no Blue Ocean Hotel, onde o conforto encontra a serenidade para uma experiência única em hospitalidade."
        </p>
        <div class="lg:mt-0 lg:flex-shrink-0">
            <div class="mt-12 inline-flex rounded-md shadow">
                <a href="cliente.php" class="py-2 px-4 bg-blue-500 hover:bg-blue-700 focus:ring-blue-500 focus:ring-offset-blue-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg">
                    Começar!
                </a>
            </div>
        </div>
    </div>
    <div class="flex items-center gap-8 p-8 lg:p-24">
        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/22/25/ce/ea/kingsford-hotel-manila.jpg?w=1200&h=-1&s=1" class="w-1/2 rounded-lg" alt="Hotel Exterior"/>
        <div>
            <img src="https://content.skyscnr.com/m/3ab0280870892b59/original/Hotel-Metropolitan-Nagano.jpg?crop=1224px:647px&quality=100&position=attention" class="mb-8 rounded-lg" alt="Hotel Interior"/>
            <img src="https://media-cdn.tripadvisor.com/media/photo-s/16/1a/ea/54/hotel-presidente-4s.jpg" class="rounded-lg" alt="Hotel Room"/>
        </div>
    </div>
</div>


<footer class="fixed bottom-0 left-0 right-0 bg-blue-500 p-4 text-center">
    <p class="text-white text-sm font-bold">
      <i class="fas fa-hotel"></i> Hotel Blue Ocean - Todos os direitos reservados.
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