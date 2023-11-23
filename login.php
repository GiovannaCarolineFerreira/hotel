<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body style="background: rgb(228,233,241);
background: linear-gradient(90deg, rgba(228,233,241,1) 35%, rgba(231,234,236,1) 88%, rgba(240,244,246,1) 100%);">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body style="background: rgb(228,233,241);
background: linear-gradient(90deg, rgba(228,233,241,1) 35%, rgba(231,234,236,1) 88%, rgba(240,244,246,1) 100%);">

<div class="flex items-center justify-center flex-col h-screen">
  <h1 class="mb-8 text-3xl">Blue Ocean Hotel</h1>
  <div class="w-full max-w-xs">
    <form action="processar_login.php" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST">
      <div class="mb-4">
        <label class="block text-gray-700 text-sm mb-2" for="username">
          Usuário
        </label>
        <input class="shadow-md appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" name="username" placeholder="Username">
      </div>
      <div class="mb-6">
        <label class="block text-gray-700 text-sm mb-2" for="password">
          Senha
        </label>
        <input class="shadow-md appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" placeholder="******************">
      </div>
      <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline ml-20" type="submit">
          Login
        </button>
      </div>
    </form>
    <p class="text-center text-black text-xs">
      &copy;2023 - Blue Ocean Hotel.
    </p>
  </div>
</div>

</body>

</html>


</body>

</html>
