<?php
class Personas {
    
    
    private $Documento;
     private$Pnombre ;
     private$Snombre ;
    private $Papellido;
    private $Sapellido;
    private $email;
    
    public function __construct($Documento, $Pnombre,$Papellido, $Snombre=null, $Sapellido=null, $email=null) {
        $this->Documento = $Documento;
        $this->Pnombre = $Pnombre;
        $this->Snombre = $Snombre;
        $this->Papellido = $Papellido;
        $this->Sapellido = $Sapellido;
        $this->email = $email;
    }

    
    public function getDocumento() {
        return $this->Documento;
    }

    public function getPnombre() {
        return $this->Pnombre;
    }

    public function getSnombre() {
        return $this->Snombre;
    }

    public function getPapellido() {
        return $this->Papellido;
    }

    public function getSapellido() {
        return $this->Sapellido;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setDocumento($Documento): void {
        $this->Documento = $Documento;
    }

    public function setPnombre($Pnombre): void {
        $this->Pnombre = $Pnombre;
    }

    public function setSnombre($Snombre): void {
        $this->Snombre = $Snombre;
    }

    public function setPapellido($Papellido): void {
        $this->Papellido = $Papellido;
    }

    public function setSapellido($Sapellido): void {
        $this->Sapellido = $Sapellido;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }


}

