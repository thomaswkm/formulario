<?php

function validarFormulario($arq, $li, $def1, $def2, $ld, $mc1, $mcd, $mc2, $ei, $dc, $ed) {
    if (empty($arq) || empty($li) || empty($def1) || empty($def2) || empty($ld) || empty($mc1) || empty($mcd) || empty($mc2) || empty($ei) || empty($dc) || empty($ed)) {
        return "Error: Debes seleccionar un jugador para cada posición.";
    }

    $jugadores = array($arq, $li, $def1, $def2, $ld, $mc1, $mcd, $mc2, $ei, $dc, $ed);
    $jugadores_uniq = array_unique($jugadores);
    if (count($jugadores) !== count($jugadores_uniq)) {
        return "Error: Se ha seleccionado al mismo jugador para múltiples posiciones.";
    }

    return ""; // No hay errores
}

?>
