<?php

require_once "Modelo/MRegistrados.php";


$correo = strtoupper($_POST['Correo']);
$contra = $_POST['Contraseña'];
$nombre = $_POST['Nombre'];
$date = $_POST['Nacimiento'];



/***** */

    
    if (!empty($correo) && !empty($contra) && !empty($nombre) && !empty($date)) {
        $obj = new ModeloPersona();
        $obj->setPersona($correo, $contra, $nombre, $date);
        header("Location: ./../index.html");
    } 

    echo "<center><h1>".$date."</h1></center>";
    echo $sql;

/***** */
?>