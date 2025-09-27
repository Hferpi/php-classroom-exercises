<?php 
// para rutas fuera -> include ("../3_12/cripto.php");

include("cripto.php");

$arrayPaises = ["Monaco", "Berlin", "Chile", "Australia", "Italia"];
$arrayPaisesCodificados = [];
$arrayPaisesDecodificados = [];
$lugares = 4;

foreach ($arrayPaises as $pais){
    array_push($arrayPaisesCodificados, codificar($pais, $lugares));
}
foreach ($arrayPaisesCodificados as $pais){
    array_push($arrayPaisesDecodificados, decodificar($pais, $lugares));
}

echo "Paises Codificados --> ";
foreach($arrayPaisesCodificados as $pais){
    echo $pais." ,";
}
echo "<br>";

echo "Paises Decodificados --> ";
foreach($arrayPaisesDecodificados as $pais){
    echo $pais." ,";
}
echo "<br>";
?>