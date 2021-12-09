<?php
class Vehiculos{
    
    
    private $placa;
     private$modelo ;
    private $tipo;
   
    
    public function __construct($placa, $modelo,$tipo) {
        $this->placa = $placa;
        $this->modelo = $modelo;      
        $this->tipo = $tipo;
    }
    public function getPlaca() {
        return $this->placa;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setPlaca($placa): void {
        $this->placa = $placa;
    }

    public function setModelo($modelo): void {
        $this->modelo = $modelo;
    }

    public function setTipo($tipo): void {
        $this->tipo = $tipo;
    }


}

    

