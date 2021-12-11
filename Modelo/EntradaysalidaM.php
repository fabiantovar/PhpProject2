<?php
class Entradaysalida {
    
    
    private $personaid;
     private$placavehiculo;
    private $parqueadero;
    private $entrada;
    private $salida;
    




    public function __construct($personaid, $placavehiculo, $parqueadero, $entrada, $salida) {
        $this->personaid = $personaid;
        $this->placavehiculo = $placavehiculo;
        $this->parqueadero = $parqueadero;
        $this->entrada = $entrada;
        $this->salida = $salida;
    }

    public function getPersonaid() {
        return $this->personaid;
    }

    public function getPlacavehiculo() {
        return $this->placavehiculo;
    }

    public function getParqueadero() {
        return $this->parqueadero;
    }

    public function getEntrada() {
        return $this->entrada;
    }

    public function getSalida() {
        return $this->salida;
    }

    public function setPersonaid($personaid): void {
        $this->personaid = $personaid;
    }

    public function setPlacavehiculo($placavehiculo): void {
        $this->placavehiculo = $placavehiculo;
    }

    public function setParqueadero($parqueadero): void {
        $this->parqueadero = $parqueadero;
    }

    public function setEntrada($entrada): void {
        $this->entrada = $entrada;
    }

    public function setSalida($salida): void {
        $this->salida = $salida;
    }




}

    


