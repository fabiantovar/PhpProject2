<?php

require_once '../Modelo/AsignacionM.php';

class AsignacionC extends Asignacion {

    function __construct() {
        switch ($_REQUEST['accion']) {
            case "Guardar";
                $this->registrar();
                break;
            case "Actualizar";
                $this->actualizar();
                break;

            case "eliminar";
                $this->eliminar();
                break;

            case "consultar";
                $this->consultar();
                break;
            default :
                break;
        }
    }

    function eliminar() {
        if ($this->validarDatos()) {

            echo  $sql = "DELETE FROM Asignacion WHERE id='" . $this->getId() . "'";

            $this->EjecutarQuery($sql, "La personas ha sido eleminada");
        } else {
            echo 'faltan datos y no se puede registrar';
        }
    }

    function registrar() {
        if ($this->validarDatos()) {

             $sql = "INSERT INTO Asignacion Values('" . $this->getId() . "','" . $this->getFecha_asignacion() . "','". $this->getResidente() .  "')";

            $this->EjecutarQuery($sql, "La personas se ha registrado");
        } else {
            echo 'faltan datos y no se puede registrar';
        }
    }

    function actualizar() {
        if ($this->validarDatos()) {
            $sql = "UPDATE Residentes SET fecha_asignacion='" . $this->getFecha_asignacion() . "',residente='" . $this->getResidente() . $this->getId() . "'";
            $this->EjecutarQuery($sql, "La persona se ha actualizado en la base");
        } else {
            echo 'Los datos no se pueden actualizar';
        }
    }

    function EjecutarQuery($sql, $msj) {
         require_once 'conexion.php';
        
        if ($conn->query($sql) === TRUE) {
            echo $msj;
        } else {
            echo "Error: " . $conn->error;
        }

        $conn->close();
    }

    function validarDatos() {
        if (isset($_POST['id'])) {
           
            $this->setId($_POST ['id']);
            $this->setFecha_asignacion($_POST ['fecha_asignacion']);
            $this->setResidente($_POST ['residente']);
            
            return true;
        } else {
            return false;
        }
    }

}

new AsignacionC();
?>



