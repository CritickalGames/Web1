<?php

require 'Conexion.php';

$correo = strtoupper($_POST['Correo']);
$contra = $_POST['Contraseña'];


/***** */

    $sql="SELECT * from registrado where (Correo, Contraseña) = ('$correo','$contra')";
    $result=mysqli_query($conexion,$sql);
    $mostrar=mysqli_fetch_array($result);

    $mostrar['IdAnime']

    echo "<br><center><h1>".$conrreo."</h1></center>";
    echo $sql;

/***** */
?>