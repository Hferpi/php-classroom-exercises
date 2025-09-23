<?php 
//array de letras

$arrayLetras = [];

for($i=65; $i<91; $i++) {
    array_push($arrayLetras, $i);
}
echo count($arrayLetras)."<br>";

foreach ($arrayLetras as $letra){
    echo chr($letra)." ".chr($letra+32).", ";
}
?>