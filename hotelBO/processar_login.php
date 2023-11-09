<?php
session_start();
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // verificando se o usuário logado é "admin" e a senha é "admin123"
    if ($username === "admin" && $password === "admin123") {
        $_SESSION["username"] = $username;
        header("Location: home.php");
        exit();
    } else {
        // se não é inválidado
        $_SESSION["login_error"] = "Credenciais inválidas. Tente novamente.";
        header("Location: login.php");
        exit();
    }
}
mysqli_close($conn);
?>
