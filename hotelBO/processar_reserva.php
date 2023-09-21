<?php
include("db.php");
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo_quarto = $_POST["tipo_quarto"];
    $nome_cliente = $_POST["nome_cliente"];
    $preco = $_POST["preco"];
    $forma_pagamento = $_POST["forma_pagamento"];
    $data_entrada = $_POST["data_entrada"];
    $data_saida = $_POST["data_saida"];
    $query = "INSERT INTO reserva (tipo_quarto, nome_cliente, preco, forma_pagamento, data_entrada, data_saida)
              VALUES ($tipo_quarto, $nome_cliente, $preco, '$forma_pagamento', '$data_entrada', '$data_saida')";

    if (mysqli_query($conn, $query)) {
        header("Location: reserva.php");
    } else {
        echo "Erro ao adicionar a reserva: " . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>
