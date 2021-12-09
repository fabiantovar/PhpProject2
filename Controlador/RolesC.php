<?php

require_once '../Modelo/RolesM.php';

class RolesC extends Roles{

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

            echo  $sql = "DELETE FROM Roles WHERE Id='" . $this->getId() . "'";

            $this->EjecutarQuery($sql, "La personas ha sido eleminada");
        } else {
            echo 'faltan datos y no se puede registrar';
        }
    }

    function registrar() {
        if ($this->validarDatos()) {

             $sql = "INSERT INTO Roles Values('" . $this->getId() . "','" . $this->getApto() . "','"  . "','" . $this->getTorre() .  "')";

            $this->EjecutarQuery($sql, "La personas se ha registrado");
        } else {
            echo 'faltan datos y no se puede registrar';
        }
    }

    function actualizar() {
        if ($this->validarDatos()) {
            $sql = "UPDATE Residentes SET Apto='" . $this->getApto() . "',Torre='" . $this->getTorre() . $this->getId() . "'";
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
            $this->setApto($_POST ['Apto']);
            $this->setTorre($_POST ['Torre']);
            
            return true;
        } else {
            return false;
        }
    }

}

new RolesC();
?>


