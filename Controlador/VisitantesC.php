<?php

require_once '../Modelo/VisitantesM.php';

class VisitantesC extends Visitantes {

    function __construct() {
        switch ($_REQUEST['accion']) {
            case "Guardar";
                $this->Guardar();
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

            echo  $sql = "DELETE FROM Visitantes WHERE Id='" . $this->getId() . "'";

            $this->EjecutarQuery($sql, "La personas ha sido eleminada");
        } else {
            echo 'faltan datos y no se puede registrar';
        }
    }

    function registrar() {
        if ($this->validarDatos()) {

             $sql = "INSERT INTO Personas Values('" . $this->getId() . "','" . $this->getPnombre() . "','"  . "','" . $this->getPapellido() . $this->getTelefono() . "')";

            $this->EjecutarQuery($sql, "La personas se ha registrado");
        } else {
            echo 'faltan datos y no se puede registrar';
        }
    }

    function actualizar() {
        if ($this->validarDatos()) {
            $sql = "UPDATE Visitantes SET Pnombre='" . $this->getPnombre() . "',Papellido='" . $this->getPapellido()  . "',Telefono='" . $this->getTelefono() . "'WHERE Id='" . $this->getId() . "'";
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
        if (isset($_POST['ID'])) {
           
            $this->setId($_POST ['Id']);
            $this->setPnombre($_POST ['Pnombre']);
            $this->setPapellido($_POST ['Papellido']);
            $this->setTelefono($_POST ['telefono']);
            return true;
        } else {
            return false;
        }
    }

}

new VisitantesC();
?>


