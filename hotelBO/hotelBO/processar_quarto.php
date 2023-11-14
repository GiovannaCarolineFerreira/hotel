<?php
session_start();
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["quarto_id"])) {
        $quarto_id = $_POST["quarto_id"];
        $numero = $_POST["numero"];
        $nome = $_POST["nome"];
        $preco = $_POST["preco"];
        $sql = "UPDATE quarto SET numero = '$numero', nome = '$nome', preco = '$preco' WHERE numero = $quarto_id";

        if (mysqli_query($conn, $sql)) {
            header("Location: quarto.php");
            exit();
        } else {
            echo "Erro ao atualizar o quarto: " . mysqli_error($conn);
        }
    } else {
        $numero = $_POST["numero"];
        $nome = $_POST["nome"];
        $preco = $_POST["preco"];

        $sql = "INSERT INTO quarto (numero, nome, preco) VALUES ('$numero', '$nome', '$preco')";

        if (mysqli_query($conn, $sql)) {
            header("Location: quarto.php");
            exit();
        } else {
            echo "Erro ao adicionar o quarto: " . mysqli_error($conn);
        }
    }
}
mysqli_close($conn);
?>