<?php

require_once '../Modelo/ParqueaderoM.php';

class ParqueaderoC extends Parqueadero {

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

            echo  $sql = "DELETE FROM Parqueadero WHERE numero='" . $this->getNumero() . "'";

            $this->EjecutarQuery($sql, "Registro eliminado");
        } else {
            echo 'faltan datos y no se puede registrar';
        }
    }

    function registrar() {
        if ($this->validarDatos()) {

             $sql = "INSERT INTO Parqueadero Values('" . $this->getNumero() . "','" . $this->getDisponibilidad() ."')";

            $this->EjecutarQuery($sql, "Se ha registrado");
        } else {
            echo 'faltan datos y no se puede registrar';
        }
    }

    function actualizar() {
        if ($this->validarDatos()) {
            $sql = "UPDATE Parqueadero SET disponibilidad='" . $this->getDisponibilidad() . $this->getNumero() . "'";
            $this->EjecutarQuery($sql, "El registro se ha actualizado");
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
        if (isset($_POST['numero'])) {
           
            $this->setNumero($_POST ['numero']);
            $this->setDisponibilidad($_POST ['disponibilidad']);
            
            
            return true;
        } else {
            return false;
        }
    }

}

new ParqueaderoC();
?>


