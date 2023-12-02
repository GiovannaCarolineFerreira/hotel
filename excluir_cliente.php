<?php
include("db.php");

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $query = "DELETE FROM cliente WHERE id = $id";

    if (mysqli_query($conn, $query)) {
        header("Location: cliente.php");
    } else {
        echo "Erro ao excluir o cliente: " . mysqli_error($conn);
    }
    mysqli_close($conn);
} else {
    echo "ID do cliente não especificado.";
}
?>