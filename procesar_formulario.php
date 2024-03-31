<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


include("validacion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $arq = $_POST["arq"];
    $li = $_POST["li"];
    $def1 = $_POST["def1"];
    $def2 = $_POST["def2"];
    $ld = $_POST["ld"];
    $mc1 = $_POST["mc1"];
    $mcd = $_POST["mcd"];
    $mc2 = $_POST["mc2"];
    $ei = $_POST["ei"];
    $dc = $_POST["dc"];
    $ed = $_POST["ed"];


    $error = validarFormulario($arq, $li, $def1, $def2, $ld, $mc1, $mcd, $mc2, $ei, $dc, $ed);
    if ($error != "") {
        echo $error;
        exit; // Sale del script si hay errores
    }

    $conexionBD = ConexionBD::obtenerInstancia();
    $conn = $conexionBD->obtenerConexion();

    $sql = "INSERT INTO equipo (arq, li, def1, def2, ld, mc1, mcd, mc2, ei, dc, ed) VALUES ('$arq', '$li', '$def1', '$def2', '$ld', '$mc1', '$mcd', '$mc2', '$ei', '$dc', '$ed')";
    if ($conn->query($sql) === TRUE) {
        echo "Formulario enviado correctamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>


