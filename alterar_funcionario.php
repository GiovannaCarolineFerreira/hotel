<?php
include("db.php");
$id = "";
$nome_completo = "";
$login = "";

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $query = "SELECT * FROM funcionario WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $nome_completo = $row["nome_completo"];
        $login = $row["login"];
    } else {
        echo "Funcionário não foi encontrado.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_completo = $_POST["nome_completo"];
    $login = $_POST["login"];
    $query = "UPDATE funcionario SET nome_completo = '$nome_completo', login = '$login' WHERE id = $id";

    if (mysqli_query($conn, $query)) {
        header("Location: funcionario.php");
    } else {
        echo "Erro ao atualizar o funcionário: " . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Funcionário - Ocean Blue Hotel</title>
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
    <h1 class="mb-6 text-3xl font-bold"><i class="fas fa-user-edit"></i> Alterar Funcionário:</h1>
    <div class="w-full max-w-md">
        <form action="alterar_funcionario.php?id=<?php echo $id; ?>" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-32" method="POST">

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nome_completo">
                    <i class="fas fa-user"></i> Nome Completo:
                </label>
                <input class="w-full p-2 border rounded" id="nome_completo" type="text" name="nome_completo" value="<?php echo $nome_completo; ?>" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="login">
                    <i class="fas fa-sign-in-alt"></i> Login:
                </label>
                <input class="w-full p-2 border rounded" id="login" type="text" name="login" value="<?php echo $login; ?>" required>
            </div>

            <div class="flex items-center justify-center mt-6">
                <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    <i class="fas fa-save"></i> Salvar Alterações
                </button>
            </div>
        </form>
    </div>
</div>


 

</body>

</html>