<?php 

class Tblpersona_model{

    private $bd;
    private $tblpersona;

    function __construct(){
        $this->bd = Conexion::getConexion();
        $this->tblpersona = array();
    }

    public function consultar(){
        $consulta =$this->bd->query("SELECT * FROM tblpersona");
        while($fila = $consulta->fetch_assoc()){
            $this->tblpersona[] = $fila;
        }
        return $this->tblpersona;
    }

    public function insertar($data){
        $nombre = $data['nombre'];
        $edad=$data['edad'];
        $consulta = "INSERT INTO tblpersona (nombre, edad) VALUES ('$nombre', $edad)";
        mysqli_query($this->bd, $consulta) or die ("Error en el guardado.");
    }

    public function actualizar($data){
        $id = $data['id'];
        $nombre = $data['nombre'];
        $edad=$data['edad'];
        $consulta = "UPDATE tblpersona SET nombre = '$nombre', edad = $edad WHERE id=$id";
        mysqli_query($this->bd, $consulta) or die ("Error en el guardado.");
    }

    public function eliminar($data){
        $id = $data['id'];
        $consulta = "DELETE FROM tblpersona WHERE id=$id";
        mysqli_query($this->bd, $consulta) or die ("Error al eliminar.");
 
    }

}

?>