<?php

// Se pone la dirección de esta forma, porque se pide todo desde el index.php
require_once 'config/database.php';

class ModeloBase{
    
    public $db;

    public function __construct(){
        // $db almacena el resultado de usar la funcion conectar() de la clase DataBase del archivo database
        $this->db = database::conectar();
    }

    // Metodos comunes para todos los modelos


    public function conseguirTodos($tabla){
        // Comprobar que devuelve de la conexion
        // var_dump($this->db);
        // return "Sacando todos los usuarios"; // comentamos esto e indicamos que la funcion recibe una variable con el nombre de la tabla para mostrar el contenido de la tabla

        $query = $this->db->query("SELECT * FROM $tabla ORDER BY id DESC");
        return $query;
    }
}