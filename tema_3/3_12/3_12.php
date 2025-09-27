<?php 
include ("cripto.php");

$frase = "Nos vemos a las 12:00 en el supermercado.";
$lugares = 10;
$fraseCodificada = codificar($frase, $lugares);

$fraseDecodificada = decodificar($fraseCodificada, $lugares);

echo "Frase codificada: ".$fraseCodificada."<br>";
echo "Frase decodificada: ".$fraseDecodificada."<br>";

?>