<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body style="background: rgb(228,233,241);
background: linear-gradient(90deg, rgba(228,233,241,1) 35%, rgba(231,234,236,1) 88%, rgba(240,244,246,1) 100%);">

<div class="flex items-center justify-center flex-col h-screen">
  <h1 class="mb-8 text-3xl">
    <i class="fas fa-hotel text-blue-500"></i> Ocean Blue Hotel
  </h1>
  <div class="w-full max-w-xs">
    <form action="processar_login.php" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST">
      <div class="mb-4">
        <label class="block text-gray-700 text-sm mb-2" for="usuario">
          <i class="fas fa-user text-gray-500"></i> Usuário
        </label>
        <input class="shadow-md appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" name="username" placeholder="Usuário:">
      </div>
      <div class="mb-6">
        <label class="block text-gray-700 text-sm mb-2" for="password">
          <i class="fas fa-lock text-gray-500"></i> Senha
        </label>
        <input class="shadow-md appearance-none rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" placeholder="******************">
      </div>
      <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline ml-20" type="submit">
          <i class="fas fa-sign-in-alt"></i> Login
        </button>
      </div>
    </form>
    
    <p class="text-center text-black text-xs">
      &copy;2023 - Ocean Blue Hotel.
    </p>
  </div>
</div>


</body>

</html>



