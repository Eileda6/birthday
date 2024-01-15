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
    $nom=$_POST["nom"];
    $mail=$_POST["mail"];
    $message=$_POST["message"];
    $q = "INSERT INTO Superheros (nom,mail,message) VALUES ('$nom','$mail','$message')";
    $connection -> query($q);
    
}

?>