<?php
session_start();
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["cliente_id"])) {
        // isso é tipo é um pedido para atualizar um cliente existente
        $cliente_id = $_POST["cliente_id"];
        $nome = $_POST["nome"];
        $cidade = $_POST["cidade"];
        $telefone = $_POST["telefone"];
        $email = $_POST["email"];
        $sql = "UPDATE cliente SET nome = '$nome', cidade = '$cidade', telefone = '$telefone', email = '$email' WHERE id = $cliente_id";

        if (mysqli_query($conn, $sql)) {
            header("Location: cliente.php");
            exit();
        } else {
            echo "Erro ao atualizar o cliente: " . mysqli_error($conn);
        }
    } else {
        $nome = $_POST["nome"];
        $cidade = $_POST["cidade"];
        $telefone = $_POST["telefone"];
        $email = $_POST["email"];

        $sql = "INSERT INTO cliente (nome, cidade, telefone, email) VALUES ('$nome', '$cidade', '$telefone', '$email')";

        if (mysqli_query($conn, $sql)) {
            header("Location: cliente.php");
            exit();
        } else {
            echo "Erro ao adicionar o cliente: " . mysqli_error($conn);
        }
    }
}
mysqli_close($conn);
?>