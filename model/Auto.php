<?php

require_once __DIR__ . '/Vehiculo.php';

class Auto extends Vehiculo {
    private $numeroPuertas;

    public function __construct($marca, $estado, $numeroPuertas) {
        parent::__construct($marca, 'Auto', $estado);
        $this->numeroPuertas = $numeroPuertas;
    }

    //GETTERS y SETTERS
    public function getNumeroPuertas() {
        return $this->numeroPuertas;
    }

    public function setNumeroPuertas($numeroPuertas) {
        $this->numeroPuertas = $numeroPuertas;
    }
    
    public function mostrarInfo() {
        return parent::mostrarInfo() . " | Puertas: 
        {$this->numeroPuertas}";
    }
}