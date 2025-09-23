<?php 
//comprobar que una direccion de correo no tiene espacios en blanco

$direccionValida = "prueba@gmail.com";
$direccionInvalida = "prueba@g mail.com";

function comprobarEmail ($email){
    if(strpos($email, " ") === false){
        return false;
    }else{
        return true;
    }
}
echo comprobarEmail($direccionValida) ? "El correo".$direccionValida." es falso"."<br>" : "El correo".$direccionValida." es verdadero"."<br>";
echo comprobarEmail($direccionInvalida) ? "El correo".$direccionInvalida." es falso"."<br>" : "El correo".$direccionInvalida." es verdadero"."<br>";
?>