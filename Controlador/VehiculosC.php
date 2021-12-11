<?php

require_once '../Modelo/VehiculosM.php';
require_once './Mensaje.php';

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

            $sql = "DELETE FROM Vehiculos WHERE placa='" . $this->getPlaca() . "'";

            $this->EjecutarQuery($sql, "El registro se ha eleiminado");
        } else {
            echo 'faltan datos y no se puede registrar';
        }
    }

    function registrar() {
        if ($this->validarDatos()) {

            $sql = "INSERT INTO Vehiculos Values('" . $this->getPlaca() . "','" . $this->getModelo() . "','" . $this->getTipo() . "','" . $this->getColor() ."','".$this->getMarca(). "')";

            $this->EjecutarQuery($sql, "El vehiculo se ha registrado");
        } else {
            echo 'faltan datos y no se puede registrar';
        }
    }

    function actualizar() {
        if ($this->validarDatos()) {
            $sql = "UPDATE Vehiculos SET modelo='" . $this->getModelo() . "',tipo='" . $this->getTipo() . "' , color='" . $this->getColor() . "',marca='" . $this->getMarca() . "'WHERE placa='" . $this->getPlaca() . "'";
            $this->EjecutarQuery($sql, "El registro  se ha actualizado en la base");
        } else {
            echo 'Los datos no se pueden actualizar';
        }
    }

    function consultar() {
        if ($this->validarDatos()) {
            $sql = "SELECT * FROM Vehiculos  WHERE placa='" . $this->getPlaca() . "'";
            $this->ejecutarSelect($sql);
        }
    }

    function ejecutarSelect($sql) {
        require_once 'conexion.php';
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $p = array($row['placa'], $row['modelo'], $row['color'], $row['tipo'], $row['marca']);

                $myJSON = json_encode($p);

                echo $myJSON;
            }
        } else {
            Mensajes::info("No hay resultados");
        }
        $conn->close();
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
        if (isset($_POST['placa'])) {
            if ($_REQUEST['accion'] == "consultar") {
                $this->setPlaca($_POST ['placa']);
                return true;
            } else {
                $this->setPlaca($_POST ['placa']);
                $this->setModelo($_POST ['modelo']);
                $this->setTipo($_POST ['tipo']);
                $this->setColor($_POST ['color']);
                $this->setMarca($_POST ['marca']);
                return true;
            }
        } else {
            return false;
        }
    }

}

new VehiculosC();
?>

