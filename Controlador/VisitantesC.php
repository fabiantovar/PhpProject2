<?php

require_once '../Modelo/VisitantesM.php';

class VisitantesC extends Visitantes {

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

            $sql = "DELETE FROM Visitantes WHERE Id='" . $this->getId() . "'";

            $this->EjecutarQuery($sql, "La personas ha sido eleminada");
        } else {
            echo 'faltan datos y no se puede registrar';
        }
    }

    function registrar() {
        if ($this->validarDatos()) {

            $sql = "INSERT INTO Visitantes Values('" . $this->getId() . "','" . $this->getPnombre() . "','" . $this->getPapellido() . "','" . $this->getTelefono() . "')";

            $this->EjecutarQuery($sql, "La personas se ha registrado");
        } else {
            echo 'faltan datos y no se puede registrar';
        }
    }

    function actualizar() {
        if ($this->validarDatos()) {
            $sql = "UPDATE Visitantes SET nombre='" . $this->getPnombre() . "',apellido='" . $this->getPapellido() . "',telefono='" . $this->getTelefono() . "' WHERE Id='" . $this->getId() . "'";
            $this->EjecutarQuery($sql, "La persona se ha actualizado en la base");
        } else {
            echo 'Los datos no se pueden actualizar';
        }
    }

    function consultar() {
        if ($this->validarDatos()) {
            $sql = "SELECT * FROM Visitantes  WHERE Id='" . $this->getId() . "'";
            $this->ejecutarSelect($sql);
        }
    }

    function ejecutarSelect($sql) {
        require_once 'conexion.php';
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $p = array($row['id'], $row['nombre'], $row['apellido'], $row['telefono']);

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
        if (isset($_POST['Id'])) {
            if ($_REQUEST['accion'] == "consultar") {
                $this->setId($_POST ['Id']);
                return true;
            } else {
                $this->setId($_POST ['Id']);
                $this->setPnombre($_POST ['Pnombre']);
                $this->setPapellido($_POST ['Papellido']);
                $this->setTelefono($_POST ['Telefono']);
                return true;
            }
        } else {
            return false;
        }
    }

}

new VisitantesC();
?>


