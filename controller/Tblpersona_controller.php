<?php 

require_once 'model/Tblpersona_model.php';

class Tblpersona_controller{

    private $model_persona;

    public function __construct(){
        $this->model_persona = new Tblpersona_model();
    }

    public function index(){
        $consulta = $this->model_persona->consultar();
        require_once 'view/tblpersona_view.php';
    }

    public function nuevo(){
        require_once 'view/tblpersona_nuevo.php';
    }

    public function guardar(){
        $data['nombre'] = $_POST["txtnombre"];
        $data['edad'] = $_POST["txtedad"];
        $this->model_persona->insertar($data);
        $this->index();
    }

    public function modificar(){
        require_once 'view/tblpersona_modificar.php';
    }

    public function guardarCambios(){
        $data['id']=$_POST["txtid"];
        $data['nombre'] = $_POST["txtnombre"];
        $data['edad'] = $_POST["txtedad"];
        $this->model_persona->actualizar($data);
        $this->index();
    }

    public function eliminar(){
        require_once 'view/tblpersona_eliminar.php';
    }

    public function eliminarPersona(){
        $data['id']=$_POST["txtid"];
        $this->model_persona->eliminar($data);
        $this->index();
    }

}

?>