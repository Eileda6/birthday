<?php
    $host = "e-srv-lamp.univ-lemans.fr";
    $user = "s2104315";
    $database = "s2104315";
    $password = "Xoc977zp";
    $connection = new mysqli($host,$user,$password,$database);

    $result = $connection -> query("SELECT * FROM `birthday-guests`" );
    $invite=0;
      
    while($row = $result -> fetch_assoc())
    {
        $invite+=$row["nombre"]; 
    }
    echo ($invite);
?> 