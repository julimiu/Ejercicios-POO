<?php


// Clase Padre
class vehiculo {
    public string $marca;
    public string $tipo;
    public string $estado;

    public function __construct(string $marca, string $tipo, string $estado) {
        $this->marca = $marca;
        $this->tipo = $tipo;
        $this->estado = $estado;
    }

    public function obtenerDetalles() {
        return "Marca: $this->marca, Modelo: $this->tipo, Estado: $this->estado";
    }

    public function alcance() {
        return "Marca: $this->marca, Modelo: $this->tipo, Estado: $this->estado";
    }
}

class carro extends vehiculo {
    private $kilometraje;

    public function __construct(string $marca, string $tipo, string $estado) {
        return parent::__construct($marca, $tipo, $estado);
        $this->kilometraje = $kilometraje;
    }

    public function obtenerDetalles() {
        return parent::obtenerDetalles() . "kilometraje";
    }

    

}


?>