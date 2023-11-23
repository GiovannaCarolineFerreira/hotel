<?php
session_start();
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["funcionario_id"])) {
        $funcionario_id = $_POST["funcionario_id"];
        $nome_completo = $_POST["nome_completo"];
        $login = $_POST["login"];
        $senha = $_POST["senha"];
        $sql = "UPDATE funcionario SET nome_completo = '$nome_completo', login = '$login', senha = '$senha' WHERE id = $funcionario_id";

        if (mysqli_query($conn, $sql)) {
            header("Location: funcionario.php");
            exit();
        } else {
            echo "Erro ao atualizar o funcionário: " . mysqli_error($conn);
        }
    } else {
        $nome_completo = $_POST["nome_completo"];
        $login = $_POST["login"];
        $senha = $_POST["senha"];

        $sql = "INSERT INTO funcionario (nome_completo, login, senha) VALUES ('$nome_completo', '$login', '$senha')";

        if (mysqli_query($conn, $sql)) {
            header("Location: funcionario.php");
            exit();
        } else {
            echo "Erro ao adicionar o funcionário: " . mysqli_error($conn);
        }
    }
}
mysqli_close($conn);
?>