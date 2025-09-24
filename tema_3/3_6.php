<?php
//codifica por la siguiente letra

$frase = "Perro ladrador poco mordedor";


function codificarFrase($frase){
    $fraseCodificada = "";

    for ($i = 0; $i < strlen($frase); $i++) {
        $char = $frase[$i];

        if (ctype_alpha($char)) {
            $ascii = ord($char);
            if (ctype_upper($char)) {
                $nuevoAscii = ($ascii == 90) ? 65 : $ascii + 1;
            } else {
                $nuevoAscii = ($ascii == 122) ? 97 : $ascii + 1;
            }
            $fraseCodificada .= chr($nuevoAscii);
        } else{
            $fraseCodificada .= $char;
    }}

    return $fraseCodificada;
}

echo codificarFrase($frase);

?>