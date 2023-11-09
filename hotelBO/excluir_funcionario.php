<?php
include("db.php");

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $query = "DELETE FROM funcionario WHERE id = $id";

    if (mysqli_query($conn, $query)) {
        header("Location: funcionario.php");
    } else {
        echo "Erro ao excluir o funcionário: " . mysqli_error($conn);
    }
    mysqli_close($conn);
} else {
    echo "ID do funcionário não especificado.";
}
?>