<?php
    $frutas = ["naranja","uva","manzana","pera","fresa","melón"];
    echo ("<p>Fruta posición 0: " . $frutas[0]) . "</p>";
    echo ("<p>Fruta posición 1: " . $frutas[1]) . "</p>";
    echo ("<p>Fruta posición 2: " . $frutas[2]) . "</p>";
    echo ("<p>Fruta posición 3: " . $frutas[3]) . "</p>";
    echo ("<p>Fruta posición 4: " . $frutas[4]) . "</p>";
    echo ("<p>Fruta posición 5: " . $frutas[5]) . "</p>";

    echo("IMPRIMIR ARRAY CON FOREACH");
    foreach($frutas as $clave => $valor){
        echo("<p>Fruta posición $clave y como valor: $valor </p>");
    }
?>