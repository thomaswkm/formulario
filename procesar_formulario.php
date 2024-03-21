<?php

include("conexionBD.php");

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

    $sql = "INSERT INTO equipo (arq, li, def1, def2, ld, mc1, mcd, mc2, ei, dc, ed) VALUES ('$arq', '$li', '$def1', '$def2', '$ld', '$mc1', '$mcd', '$mc2', '$ei', '$dc', '$ed')";
    if ($conn->query($sql) === TRUE) {
        echo "Datos insertados correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>


