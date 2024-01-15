<?php
$host = "e-srv-lamp.univ-lemans.fr";
$user = "s2104315";
$database = "s2104315";
$password = "Xoc977zp";
$connection = new mysqli($host,$user,$password,$database);
if ($connection -> connect_error){
    echo("error");
}
else{
    echo("no error");
}


if($_SERVER['REQUEST_METHOD']=="POST")
{   
    $Nom=$_POST["nom"];
    $Nombre=$_POST["nombre"];
    $q = "INSERT INTO `birthday-guests` (nom,nombre) VALUES ('$Nom','$Nombre')";
    
    if ($connection -> query($q) == TRUE){
        echo("no error");
    }
    else{
        echo("error".$connection->error);
    }
}

?>