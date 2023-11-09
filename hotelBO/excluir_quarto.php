<?php
include("db.php");

if (isset($_GET["numero"])) {
    $numero = $_GET["numero"];
    $query = "DELETE FROM quarto WHERE numero = $numero";

    if (mysqli_query($conn, $query)) {
        header("Location: quarto.php");
    } else {
        echo "Erro ao excluir o quarto: " . mysqli_error($conn);
    }
    mysqli_close($conn);
} else {
    echo "Número do quarto não especificado.";
}
?>