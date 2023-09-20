<?php
session_start();
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["reserva_id"])) {
        // é para atualizar uma reserva q exite
        $reserva_id = $_POST["reserva_id"];
        $tipo_quarto = $_POST["tipo_quarto"];
        $nome_cliente = $_POST["nome_cliente"];
        $data_entrada = $_POST["data_entrada"];
        $data_saida = $_POST["data_saida"];

        $sql = "UPDATE reserva SET tipo_quarto = $tipo_quarto, nome_cliente = $nome_cliente, data_entrada = '$data_entrada', data_saida = '$data_saida' WHERE id = $reserva_id";

        if (mysqli_query($conn, $sql)) {
            header("Location: reserva.php"); // redireciona
            exit();
        } else {
            echo "Erro ao atualizar a reserva: " . mysqli_error($conn);
        }
    } else {
        // é para adicionar uma nova reserva
        $tipo_quarto = $_POST["tipo_quarto"];
        $nome_cliente = $_POST["nome_cliente"];
        $data_entrada = $_POST["data_entrada"];
        $data_saida = $_POST["data_saida"];

        $sql = "INSERT INTO reserva (tipo_quarto, nome_cliente, data_entrada, data_saida) VALUES ($tipo_quarto, $nome_cliente, '$data_entrada', '$data_saida')";

        if (mysqli_query($conn, $sql)) {
            header("Location: reserva.php"); // redireciona 
            exit();
        } else {
            echo "Erro ao adicionar a reserva: " . mysqli_error($conn);
        }
    }
}
// fecha a conexão
mysqli_close($conn);
?>
