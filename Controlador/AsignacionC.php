<?php

require_once '../Modelo/AsignacionM.php';
require_once './Mensaje.php';

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

            $sql = "DELETE FROM asignacion_parqueaderos WHERE id='" . $this->getId() . "'";

            $this->EjecutarQuery($sql, "El registro se ha eleiminado");
        } else {
            echo 'faltan datos y no se puede registrar';
        }
    }

    function registrar() {
        if ($this->validarDatos()) {

            $sql = "INSERT INTO asignacion_parqueaderos Values('" . $this->getId() . "','" . $this->getFecha_asignacion() . "','" . $this->getResidente() . "')";

            $this->EjecutarQuery($sql, "El vehiculo se ha registrado");
        } else {
            echo 'faltan datos y no se puede registrar';
        }
    }

    function actualizar() {
        if ($this->validarDatos()) {
            $sql = "UPDATE asignacion_parqueaderos SET fecha_asignacion='" . $this->getFecha_asignacion() . "',residente='" . $this->getResidente() . "'WHERE id='" . $this->getId() . "'";
            $this->EjecutarQuery($sql, "El registro  se ha actualizado en la base");
        } else {
            echo 'Los datos no se pueden actualizar';
        }
    }

    function consultar() {
        if ($this->validarDatos()) {
            $sql = "SELECT * FROM asignacion_parqueaderos  WHERE id='" . $this->getId() . "'";
            $this->ejecutarSelect($sql);
        }
    }

    function ejecutarSelect($sql) {
        require_once 'conexion.php';
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $p = array($row['id'], $row['fecha_asignacion'], $row['residente']);

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
        if (isset($_POST['id'])) {
            if ($_REQUEST['accion'] == "consultar") {
                $this->setId($_POST ['id']);
                return true;
            } else {
                $this->setId($_POST ['id']);
                $this->setFecha_asignacion($_POST ['fecha_asignacion']);
                $this->setResidente($_POST ['residente']);

                return true;
            }
        } else {
            return false;
        }
    }

}

new AsignacionC();
?>

