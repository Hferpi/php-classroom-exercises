<?php 
//Verificar un DNI

$dniFalso = "40102030";
$dniVerdadero = "40102030N";

// tiene 8 numeros
// tiene lertra

function comprobarDni ($dni){
   if(isset($dni[8]) && (ctype_alpha($dni[8]))){
      echo $dni." es valido"."<br>";
   }else{
      echo $dni." es FALSO"."<br>";
   }
    
}

echo comprobarDni($dniFalso);
echo comprobarDni($dniVerdadero);
?>