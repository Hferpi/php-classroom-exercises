<?php 
//array asociativo y recorrerlo

$arrayPersonas = [
    [
        "nombre" => "maria",
        "altura" => 1.74],
    [
        "nombre" => "roberto",
        "altura" => 1.98,
    ],
    [
        "nombre" => "luisa",
        "altura" => 1.2
    ]
    ];

foreach($arrayPersonas as $persona) {
    echo "Nombre: ".$persona["nombre"]." mido ".$persona["altura"]."<br>";
   
}


?>