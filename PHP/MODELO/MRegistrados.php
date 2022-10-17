<?php 

require_once "MConexion.php";


class ModeloPersona extends ModeloConexion
{
    public function setPersona($correo, $contra, $nombre, $date)
    {
        $sql = "INSERT INTO registrados (Correo, Contraseña, Nombre, Nacimiento) 
        VALUES ('$correo', '$contra', '$nombre', '$date')";
        $this->sentencia_subir($sql);
    }

    public function getPersona($correo,$contra){
        $sql="SELECT * from registrados where (Correo, Contraseña) = ('$correo','$contra')";
        return $this->sentencia_mostrar($sql);
    }
    public function getPersona_ALL(){
        $sql="SELECT * from registrados";
        return $this->get_ALL($sql);
    }
}

?>