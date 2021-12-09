<?php
class Residentes {
    
    
    private $id;
     private$apto ;
    private $torre;
   
    
    public function __construct($id, $Apto,$torre) {
        $this->id = $id;
        $this->apto = $apto;      
        $this->torre = $torre;
    }
    public function getId() {
        return $this->id;
    }

    public function getApto() {
        return $this->apto;
    }

    public function getTorre() {
        return $this->torre;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setApto($apto): void {
        $this->apto = $apto;
    }

    public function setTorre($torre): void {
        $this->torre = $torre;
    }


}

    
