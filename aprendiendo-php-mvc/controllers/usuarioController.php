<?php

class UsuarioController{
    
    public function mostrarTodos(){
        
        // No se pone el ../ porque el index, que es quien lo pidem esta a un nivel más alto
        require_once 'models/usuario.php';


        
        $usuario = new Usuario();

        $todos_los_usuarios = $usuario->conseguirTodos('usuarios');

        // No se pone el ../ porque el index, que es quien lo pidem esta a un nivel más alto
        require_once 'views/usuarios/mostrar-todos.php';
    }

    public function crear(){
        require_once 'views/usuarios/crear.php';
    }
}