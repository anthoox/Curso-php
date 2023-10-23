<?php

class Coche{
    //* PUBLIC: se puede acceder a el desde cualquier lugar, desde la clase actual
        //* dentro de clases que hereden esta clase o fuera de la clase
    public $color;

    //* PROTECTED: se puede acceder desde la clase que los define y desde clases
        //* que lo hereden
    protected $marca;

    //* PRIVATE: unicamente se puede acceder desde esta clase
    //* A los metodos también se les puede asignar public, protected y private
    private $modelo;

    public $velocidad;
    public $caballaje;
    public $plazas ;

    // Siempre debe ser public. Aquí se asignan los valores a los atributos del objeto
    public function __construct($color, $marca, $modelo, $velocidad, $caballaje, $plazas){
        // Esto valdría para asignarle valores por defecto. Es decir, si se crear $coche = new Coche(), se le asigna con estos valores.
        // $this->color = "Rojo";
        // $this->marca = "Ferrari";
        // $this->modelo = "Aventador";
        // $this->velocidad = 300;
        // $this->caballaje = 500;
        // $this->plazas = 2;

        // Esto valdría para crear un objeto dandole sus caracteristicas
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->caballaje = $caballaje;
        $this->plazas = $plazas;


    }

    public function getColor(){
        return $this->color;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function acelerar(){
        $this->velocidad++;
    }

    public function frenar(){
        $this->velocidad--;
    }

    public function getVelocidad(){
        return $this->velocidad;
    }


    // Metodo para imprimir la información de un coche indicando el tipo de dato. Nunca imprimir datos dentro de una misma función
    public function mostrarInformacion(Coche $miObjeto){
        // if(is_object($miObjeto)){ // Esto funciona solo si se quita "Coche" que va antes de $miObjeto
        $informacion = "<h1>Información del coche</h1>";
        $informacion .= "Color: " . $miObjeto->color;
        $informacion .= "<br/>Modelo: " . $miObjeto->modelo;
        $informacion .= "<br/>Velocidad: " . $miObjeto->velocidad;
        // }else{
        //     $informacion = "tu datos es este: " . $miObjeto;
        // }
        return $informacion;
    }

} // Fun definicion de la clasae
