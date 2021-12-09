<?php
class Parqueadero {
    
    
    private $numero;
     private$disponibilidad ;

   
    
    public function __construct($numero, $disponibilidad) {
        $this->numero = $numero;
        $this->disponibilidad = $disponibilidad;      
    }
    public function getNumero() {
        return $this->numero;
    }

    public function getDisponibilidad() {
        return $this->disponibilidad;
    }

    public function setNumero($numero): void {
        $this->numero = $numero;
    }

    public function setDisponibilidad($disponibilidad): void {
        $this->disponibilidad = $disponibilidad;
    }




}

    

