<?php
include("db.php");

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $query = "DELETE FROM reserva WHERE id = $id";

    if (mysqli_query($conn, $query)) {
        header("Location: reserva.php");
    } else {
        echo "Erro ao excluir a reserva: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo "ID da reserva não especificado.";
}
?>