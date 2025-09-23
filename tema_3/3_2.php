<?php
//contar palabras y letras
$frase = "El perro de San Roque no tiene rabo";
echo "La frase es: ".$frase."<br>";

//nº caracteres
$caracteres = 0;

for ($i=0; $i < strlen($frase); $i++){
if(ctype_alpha($frase[$i])){
    $caracteres++;
}
}
echo "El numero total de caracteres es: ".$caracteres."<br>";


//nº palabras
$palabrasFrase = explode(" ", $frase);

echo "Numero de palabras: ".count($palabrasFrase)."<br>";


//linea con palabra y cantidad
    foreach ($palabrasFrase as $palabra) {
echo $palabra." tiene: ".strlen($palabra)." caracteres"."<br>";
}


?>