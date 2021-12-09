<?php
class Entradaysalida {
    
    
    private $personaid;
     private$placavehiculo;
    private $parqueadero;
   
    
    public function __construct($personaid, $placavehiculo,$parqueadero) {
        $this->personaid = $personaid;
        $this->placavehiculo = $placavehiculo;      
        $this->parqueadero = $parqueadero;
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

    public function setPersonaid($personaid): void {
        $this->personaid = $personaid;
    }

    public function setPlacavehiculo($placavehiculo): void {
        $this->placavehiculo = $placavehiculo;
    }

    public function setParqueadero($parqueadero): void {
        $this->parqueadero = $parqueadero;
    }



}

    


