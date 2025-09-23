<?php

//mostrar letras impares de una frase

$frase = "A quien madruga Dios le ayuda";


function mostrarContarCaracteres ($frase){
$letras = "";

for ($i=1; $i <= strlen($frase); $i++){
   if($i % 2 != 0) {
    $letras .= $frase[$i];
   }
  
}
return $letras;
}

echo mostrarContarCaracteres($frase);

?>