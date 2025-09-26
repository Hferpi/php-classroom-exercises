<?php
//crea dos arrays asociativos 

$articulos = [
    "patata" => 0.8,
    "espinacas" => 0.34,
    "manzana" => 1.3,
    "platanos" => 1.6,
    "aguacate" => 4.6,

];

$listaCompra = [
    "patata" => 1.2,
    "manzana" => 0.8,
    "aguacate" => 0.4,
    "espinacas" => 3
];


echo "PRODUCTO - Precio/KG - Peso - PRECIO"."<br>";
foreach($listaCompra as $nombre => $peso){
    $precioKG = $articulos[$nombre];
    
    echo $nombre."   -   ".$precioKG."   -   ".$peso."   -   ".($precioKG * $peso)."<br>";
}

?>