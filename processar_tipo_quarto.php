<?php
session_start();
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["tipo_quarto_id"])) {
        $tipo_quarto_id = $_POST["tipo_quarto_id"];
        $descricao = $_POST["descricao"];
        $codigo = $_POST["codigo"];
        $sql = "UPDATE tipo_quarto SET descricao = '$descricao', codigo = '$codigo' WHERE id = $tipo_quarto_id";

        if (mysqli_query($conn, $sql)) {
            header("Location: tipo_quarto.php");
            exit();
        } else {
            echo "Erro ao atualizar o tipo de quarto: " . mysqli_error($conn);
        }
    } else {

        $descricao = $_POST["descricao"];
        $codigo = $_POST["codigo"];

        $sql = "INSERT INTO tipo_quarto (descricao, codigo) VALUES ('$descricao', '$codigo')";

        if (mysqli_query($conn, $sql)) {
            header("Location: tipo_quarto.php");
            exit();
        } else {
            echo "Erro ao adicionar o tipo de quarto: " . mysqli_error($conn);
        }
    }
}
mysqli_close($conn);
?>