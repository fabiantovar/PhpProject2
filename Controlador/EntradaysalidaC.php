<?php

require_once '../Modelo/EntradaysalidaM.php';
require_once './Mensaje.php';

class EntradaysalidaC extends Entradaysalida {

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

            echo  $sql = "DELETE FROM Entradaysalida WHERE personaid='" . $this->getPersonaid() . "'";

            $this->EjecutarQuery($sql, "La personas ha sido eleminada");
        } else {
            echo 'faltan datos y no se puede registrar';
        }
    }

    function registrar() {
        if ($this->validarDatos()) {

             $sql = "INSERT INTO Entradaysalida Values('" . $this->getPersonaid() . "','" . $this->getPlacavehiculo() . "','" . $this->getParqueadero() . "','" . $this->getEntrada() ."','".$this->getSalida(). "')";

            $this->EjecutarQuery($sql, "La personas se ha registrado");
        } else {
            echo 'faltan datos y no se puede registrar';
        }
    }

    function actualizar() {
        if ($this->validarDatos()) {
            $sql = "UPDATE Entradaysalida SET personaid='" .$this->getPersonaid(). $this->getPlacavehiculo()  . $this->getParqueadero() . $this->getPersonaid() .$this->getEntrada(). $this->getSalida() ."'";
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
        if (isset($_POST['personaid'])) {
           
            $this->setPersonaid($_POST ['personaid']);
            $this->setPlacavehiculo($_POST ['placavehiculo']);
            $this->setParqueadero($_POST ['parqueadero']);
            $this->setEntrada($_POST ['entrada']);
            $this->setSalida($_POST ['salida']);
            
            return true;
        } else {
            return false;
        }
    }

}

new EntradaysalidaC();
?>




