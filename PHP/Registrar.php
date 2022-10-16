<?php

require 'Conexion.php';

$correo = strtoupper($_POST['Correo']);
$contra = $_POST['Contraseña'];
$nombre = $_POST['Nombre'];
$date = $_POST['Nacimiento'];

/***** */

    $sql="SELECT * from usuarios where Correo, Contraseña='$correo','$contra'";
    $result=mysqli_query($conexion,$sql);
    if (!empty($correo) && !empty($contra) && !empty($nombre) && !empty($date)) {
        $sql = "INSERT INTO registrado (Correo, Contraseña, Nombre, Nacimiento) 
            VALUES ('$correo', '$contra', '$nombre', '$date')";
        $stmt = mysqli_query($conexion,$sql);
        header("Location: ./../index.html");

    } 

    echo "<center><h1>".$date."</h1></center>";
    echo $sql;

/***** */
?>