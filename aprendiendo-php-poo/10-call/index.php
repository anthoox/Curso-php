<?php

/*
* Call, sirve para cuando se llama a un método que no existe, se muestre algún mensaje o llamar al contenido del metodo indicado aunque no exista
*/

class Persona{

    // Las propiedades casi siempre deben ser privadas
    private $nombre;
    private $edad;
    private $ciudad;

    public function __construct($nombre, $edad, $ciudad){
        $this->nombre = "pepe";
        $this->edad = 14;
        $this->ciudad = "Ciudad";
    }

    public function __call($name, $arguments){
        // Obtenemos la primera parte del nombre del metodo llamado hasta la palabra o caracter 2
        $prefix_metodo = substr($name, 0, 3);
        // Si es get:
        if($prefix_metodo == 'get'){
            // Convertimos todo en minusculas y guardamos el contenido a partir del caracter de la posición 3
            $nombre_metodo = substr(strtolower($name),3);

            // Si no existe el nombre del metodo:
            if(!isset($this->$nombre_metodo)){
                return "<h3>El metodo que estas invocando no existe</h3>";
            }

            // Aqui, si el metodo llamado es getNombre, funcionaria asi:
            // return $this->nombre;
            return $this->$nombre_metodo;
        }else{
            return "<h4>El metodo no existe</h4>";
        }

        
    }
}

$persona = new Persona("Antho", 66, "Ciudad");


echo $persona->getNombre();
echo $persona->getApellido();
echo $persona->setApellido();