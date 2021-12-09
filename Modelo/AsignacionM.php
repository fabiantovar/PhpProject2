<?php
class Asignacion{
    
    
    private $id;
     private$fecha_asignacion ;
    private $residente;
   
    
    public function __construct($id, $fecha_asignacion,$residente) {
        $this->id = $id;
        $this->apto = $fecha_asignacion;      
        $this->torre = $residente;
    }
    public function getId() {
        return $this->id;
    }

    public function getFecha_asignacion() {
        return $this->fecha_asignacion;
    }

    public function getResidente() {
        return $this->residente;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setFecha_asignacion($fecha_asignacion): void {
        $this->fecha_asignacion = $fecha_asignacion;
    }

    public function setResidente($residente): void {
        $this->residente = $residente;
    }



}

    

