<?php
    #sin parámetro
    function coste_hotel1(){
        return 90;
    }

    #con parametro
    function coste_hotel2($numNoches){
        $resp = $numNoches*90;
        echo $resp;
    }
    
    #con retorno
    function coste_hotel3($numNoches){
        $resp = $numNoches*90;
        return $resp;
    }

    #llamado de funciones
    $numeroNoches=4;
    echo "Sin parametro <br>";
    $respuesta =  (coste_hotel1()*$numeroNoches);
    echo $respuesta;
    
    echo "<br><br>";
    echo "Con parametro <br>";
    coste_hotel2($numeroNoches);

    echo "<br><br>";
    echo "Con retorno <br>";
    echo coste_hotel3($numeroNoches);
?>