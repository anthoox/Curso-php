<?php

class  NotaController {

    public function listar(){
        require_once 'models/nota.php';

        // Logica acción del controlador
        $nota = new Nota();
        // $nota->setNombre("Hola");
        // $nota->setContenido("Hola mundo PHP MVC");
        
        $notas = $nota->conseguirTodos('notas');

        // Vista
        require_once 'views/nota/listar.php';
    }

    public function crear(){
        require_once 'models/nota.php';

        $nota = new Nota();
        $nota->setUsuarioId(1);
        $nota->setTitulo("Nota para PHP MVC");
        $nota->setDescripcion("Descripción de mi nota");

        $nota->guardar();
        // echo $nota->db->error;
        // die();

        header("Location: index.php?controller=nota&action=listar");
    }

    public function borrar(){

    }


}