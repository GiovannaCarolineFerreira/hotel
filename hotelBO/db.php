<?php
// Aq ta as configurações do banco de dados
$db_server = "127.0.0.1";
$db_username = "root";
$db_password = "";
$db_name = "hotel";

// criando a conexão com o banco de dados
$conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);

// verificando essa conexão
if (!$conn) {
    die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
}
?>
