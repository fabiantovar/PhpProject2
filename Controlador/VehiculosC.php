<?php

require_once '../Modelo/VehiculosM.php';

class VehiculosC extends Vehiculos {

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

            echo  $sql = "DELETE FROM Vehiculos WHERE Id='" . $this->getPlaca() . "'";

            $this->EjecutarQuery($sql, "El cupo ha sido eliminado");
        } else {
            echo 'faltan datos y no se puede registrar';
        }
    }

    function registrar() {
        if ($this->validarDatos()) {

             $sql = "INSERT INTO Vehiculo Values('" . $this->getPlaca() . "','" . $this->getModelo() . "','" . $this->getTipo() .  "')";

            $this->EjecutarQuery($sql, "El vehiculo ha sido registrado");
        } else {
            echo 'faltan datos y no se puede registrar';
        }
    }

    function actualizar() {
        if ($this->validarDatos()) {
            $sql = "UPDATE Vehiculos SET modelo='" . $this->getModelo() . "',tipo='" . $this->getTipo() . $this->getPlaca() . "'";
            $this->EjecutarQuery($sql, "La asignación ha sido actualizada");
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
        if (isset($_POST['Id'])) {
           
            $this->setPlaca($_POST ['placa']);
            $this->setModelo($_POST ['modelo']);
            $this->setTipo($_POST ['tipo']);
            
            return true;
        } else {
            return false;
        }
    }

}

new VehiculosC();
?>


