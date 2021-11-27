<?php

require_once '../Modelo/PersonasM.php';

class PersonasC extends Personas {

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

            echo  $sql = "DELETE FROM Personas WHERE documento='" . $this->getDocumento() . "'";

            $this->EjecutarQuery($sql, "La personas ha sido eleminada");
        } else {
            echo 'faltan datos y no se puede registrar';
        }
    }

    function registrar() {
        if ($this->validarDatos()) {

             $sql = "INSERT INTO Personas Values('" . $this->getDocumento() . "','" . $this->getPnombre() . "','" . $this->getSnombre() . "','" . $this->getPapellido() . "','" . $this->getSapellido() . "','" . $this->getEmail() . "')";

            $this->EjecutarQuery($sql, "La personas se ha registrado");
        } else {
            echo 'faltan datos y no se puede registrar';
        }
    }

    function actualizar() {
        if ($this->validarDatos()) {
            $sql = "UPDATE Personas SET Pnombre='" . $this->getPnombre() . "',Snombre='" . $this->getSnombre() . "',Papellido='" . $this->getPapellido() . "',Sapellido='" . $this->getSapellido() . "',Email='" . $this->getEmail() . "'WHERE Documento='" . $this->getDocumento() . "'";
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
        if (isset($_POST['Documento'])) {
           
            $this->setDocumento($_POST ['Documento']);
            $this->setPnombre($_POST ['Pnombre']);
            $this->setSnombre($_POST ['Snombre']);
            $this->setPapellido($_POST ['Papellido']);
            $this->setSapellido($_POST ['Sapellido']);
            $this->setEmail($_POST ['email']);
            return true;
        } else {
            return false;
        }
    }

}

new PersonasC();
?>


