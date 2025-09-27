<?php
//funciones para codificar y decodificar

function codificar($cadena, $lugares)
{
    $fraseCodificada = "";

    for ($i = 0; $i < strlen($cadena); $i++) {
        $char = $cadena[$i];
        if (ctype_alpha($char)) {
            $ascii = ord($char);
            if (ctype_upper($char)) {
                $nuevoAscii = (65 + ($ascii - 65 + $lugares) % 26);
            } else {
                $nuevoAscii = (97 + ($ascii - 97 + $lugares) % 26);
            }
            $fraseCodificada .= chr($nuevoAscii);
        } else {
            $fraseCodificada .= $char;
        }
    }
    return $fraseCodificada;
}

function decodificar($fraseCodificada, $lugares)
{
    $fraseDecodificada = "";

    for ($i = 0; $i < strlen($fraseCodificada); $i++) {
        $char = $fraseCodificada[$i];

        if (ctype_alpha($char)) {
            $ascii = ord($char);
            if (ctype_upper($char)) {
                $nuevoAscii = (65 + ($ascii - 65 - $lugares + 26) % 26);
            } else {
                $nuevoAscii = (97 + ($ascii - 97 - $lugares + 26) % 26);
            }
            $fraseDecodificada .= chr($nuevoAscii);
        } else {
            $fraseDecodificada .= $char;
        }
    }
    return $fraseDecodificada;
}
