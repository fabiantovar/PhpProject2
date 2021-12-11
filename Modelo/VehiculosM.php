<?php
class Vehiculos{
    
    
    private $placa;
     private$modelo ;
    private $tipo;
    private $marca;
    private $color;

    public function __construct($placa, $modelo, $tipo, $marca, $color) {
        $this->placa = $placa;
        $this->modelo = $modelo;
        $this->tipo = $tipo;
        $this->marca = $marca;
        $this->color = $color;
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

    public function getMarca() {
        return $this->marca;
    }

    public function getColor() {
        return $this->color;
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

    public function setMarca($marca): void {
        $this->marca = $marca;
    }

    public function setColor($color): void {
        $this->color = $color;
    }



    

}

    

