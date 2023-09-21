<?php
include("db.php");

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $query = "DELETE FROM tipo_quarto WHERE id = $id";

    if (mysqli_query($conn, $query)) {
        header("Location: tipo_quarto.php");
    } else {
        echo "Erro ao excluir o tipo de quarto: " . mysqli_error($conn);
    }
    mysqli_close($conn);
} else {
    echo "ID do tipo de quarto não especificado.";
}
?>
