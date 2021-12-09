<?php
class Roles{
    
    
    private $Id;
     private$rol ;
  
   
    
    public function __construct($Id, $rol) {
        $this->Id = $Id;
        $this->rol = $rol;      
       
    }
    public function getId() {
        return $this->Id;
    }

    public function getRol() {
        return $this->rol;
    }

    public function setId($Id): void {
        $this->Id = $Id;
    }

    public function setRol($rol): void {
        $this->rol = $rol;
    }


    
}

    

