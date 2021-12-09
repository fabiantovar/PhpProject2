<?php
class Visitantes {
    
    
    private $Id;
     private$Pnombre ;
    private $Papellido;
    private $telefono;
    
    public function __construct($Id, $Pnombre,$Papellido, $telefono) {
        $this->Id = $Id;
        $this->Pnombre = $Pnombre;      
        $this->Papellido = $Papellido;
        $this->telefono = $telefono;
    }

    public function getId() {
        return $this->Id;
    }

    public function getPnombre() {
        return $this->Pnombre;
    }

    public function getPapellido() {
        return $this->Papellido;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function setId($Id): void {
        $this->Id = $Id;
    }

    public function setPnombre($Pnombre): void {
        $this->Pnombre = $Pnombre;
    }

    public function setPapellido($Papellido): void {
        $this->Papellido = $Papellido;
    }

    public function setTelefono($telefono): void {
        $this->telefono = $telefono;
    }
}