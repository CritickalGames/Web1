<?php

require_once "Modelo/MRegistrados.php";


$correo = strtoupper($_POST['Correo']);
$contra = $_POST['Contraseña'];


/***** */

    $obj = new ModeloPersona();
    $mostrar=$obj->getPersona($correo, $contra);

    if ($mostrar['Correo']==$correo && $mostrar['Contraseña']==$contra) {
        //echo $mostrar['Correo'];
        header("Location: ./../HTML/PaginaDeInicio.html");
    }
    

    echo "<br><center><h1>".$correo."</h1></center>";


/***** */
?>