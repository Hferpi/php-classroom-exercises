<?php
//codificar con numero varibale

$frase = "a, b, c, d, e, f, g, h, i, j, k, l, m, n, ñ, o, p, q, r, s, t, u, v, w, x, y, z";
$movimientos = 5;
function codificarConMovimientos($frase, $movimientos)
{
    $fraseCodificada = "";
    for ($i = 0; $i < strlen($frase); $i++) {
        $char = $frase[$i];
        if (ctype_alpha($char)) {
            $ascii = ord($char);
             
            if (ctype_upper($char)) {
                $nuevoAscii = 65 + (($ascii - 65 + $movimientos) % 26);
            } else {
                $nuevoAscii = 97 + (($ascii - 97 + $movimientos) % 26);
            }
            $fraseCodificada .= chr($nuevoAscii);
        } else {
            $fraseCodificada .= $char;
        }
    }

    return $fraseCodificada;
}

echo codificarConMovimientos($frase, $movimientos);
