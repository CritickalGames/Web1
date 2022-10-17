<?php

    require_once "../PHP/Modelo/MRegistrados.php";
    $obj = new ModeloPersona();
    $mostrar=$obj->getPersona_ALL();

    $myJSON = json_encode($mostrar);

    echo $myJSON;

?>
