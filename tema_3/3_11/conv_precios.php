<?php 
//codigo para pasar de pesetas a euros 

function pesetasAeuros ($cantidad){
echo $cantidad." de pesetas son: ".number_format(($cantidad/166.368),2)."<b>€</b>"."<br>";
}


function eurosApesetas ($cantidad){
    echo $cantidad."€ son: ".number_format(($cantidad*166.368),2)."<b> psts</b>"."<br>";
}


?>