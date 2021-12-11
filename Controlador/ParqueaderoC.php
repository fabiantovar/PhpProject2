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

            $sql = "DELETE FROM Parqueadero WHERE numero='" . $this->getNumero() . "'";

            $this->EjecutarQuery($sql, "El registo se ha eliminado");
        } else {
            echo 'faltan datos y no se puede registrar';
        }
    }

    function registrar() {
        if ($this->validarDatos()) {

            $sql = "INSERT INTO Parqueadero Values('" . $this->getNumero() . "','" . $this->getDisponibilidad() . "')";

            $this->EjecutarQuery($sql, "Se ha registrado");
        } else {
            echo 'faltan datos y no se puede registrar';
        }
    }

    function actualizar() {
        if ($this->validarDatos()) {
            $sql = "UPDATE Parqueadero SET disponibilidad='" . $this->getDisponibilidad() . "' WHERE numero='" . $this->getNumero() . "'";
            $this->EjecutarQuery($sql, "La persona se ha actualizado en la base");
        } else {
            echo 'Los datos no se pueden actualizar';
        }
    }

    function consultar() {
        if ($this->validarDatos()) {
            $sql = "SELECT * FROM Parqueadero  WHERE numero='" . $this->getNumero() . "'";
            $this->ejecutarSelect($sql);
        }
    }

    function ejecutarSelect($sql) {
        require_once 'conexion.php';
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $p = array($row['numero'], $row['disponibilidad']);

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
        if (isset($_POST['numero'])) {
            if ($_REQUEST['accion'] == "consultar") {
                $this->setNumero($_POST ['numero']);
                return true;
            } else {
                $this->setNumero($_POST ['numero']);
                $this->setDisponibilidad($_POST ['disponibilidad']);
                return true;
            }
        } else {
            return false;
        }
    }

}

new ParqueaderoC();
?>


