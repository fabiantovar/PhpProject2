<?php

require_once '../Modelo/ResidentesM.php';

class ResidentesC extends Residentes {

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

            echo  $sql = "DELETE FROM Residentes WHERE id='" . $this->getId() . "'";

            $this->EjecutarQuery($sql, "La personas ha sido eleminada");
        } else {
            echo 'faltan datos y no se puede registrar';
        }
    }

    function registrar() {
        if ($this->validarDatos()) {

             $sql = "INSERT INTO Residentes Values('" . $this->getId() . "','" . $this->getApto() . "','"  . "','" . $this->gettorre() .  "')";

            $this->EjecutarQuery($sql, "La personas se ha registrado");
        } else {
            echo 'faltan datos y no se puede registrar';
        }
    }

    function actualizar() {
        if ($this->validarDatos()) {
            $sql = "UPDATE Residentes SET apto='" . $this->getapto() . "',torre='" . $this->gettorre() . $this->getId() . "'";
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

new ResidentesC();
?>


