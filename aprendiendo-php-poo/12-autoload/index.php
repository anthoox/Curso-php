<?php
require_once 'autoload.php';
// Metodo pesado de carga de clases:
// require_once 'clases/usuario.php';
// require_once 'clases/categoria.php';
// require_once 'clases/entrada.php';

// $usuario = new Usuario();
// echo $usuario->nombre;
// echo "<br/>";
// echo $usuario->email;


// echo "<br/>";
// $categoria = new Categoria();
// echo $categoria->nombre;




// Espacios de nombres y paquetes, para el espacio de nombre, este tiene que tener el mismo nombre de la carpeta

// Cargar espacios de nombres, tambien pueden ir todas en una linea.
/*
* No se pueden tener dos clases con el mismo nombre*/
use MisClases\Usuario;
use MisClases\Categoria;
use MisClases\Entrada;
use PanelAdministrador\Usuario as UsuarioAdmin;

class Principal{
    public $usuario;
    public $categoria;
    public $entrada;

    public function __construct(){
        // Sin el use MisClases\XX;
        // $this->usuario = new MisClases\Usuario();
        // $this->categoria = new MisClases\Categoria();
        // $this->entrada = new MisClases\Entrada();

        // Con use MisClases\XX;
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
        $this->entrada = new Entrada();
    }
    
    // Constantes para clase
    function informacion(){
        // echo __CLASS__;
        // echo __METHOD__;
        // echo __NAMESPACE__;// desde una clase que este en un namespace. Esta es la principal
    }
    
}
// Objeto principal
$principal = new Principal();
var_dump($principal->usuario);
echo "<hr>";
echo "Constantes de la clase . <br>";
echo $principal->informacion();
echo "<hr>";
// Objeto de otro paquete
// $usuario = new PanelAdministrador\Usuario();
$usuario = new UsuarioAdmin();
var_dump($usuario);


// Comprobar si existe una clase dentro del autoload o en el espacio de nombre. Si se usa un alias buscar por el nombre. NO dice si esta cargada pero si que existe
// tb da error si se usa un require_once cuando no se empaqueta la clase.
// $clase = class_exists('MisClases\Usuario');
// con el @ se evitan los errores
$clase = @class_exists('PanelAdministrador/Usuario');

if($clase){
    echo "<h1>La clase Si existe</h1>";
}else{
    echo "<h1>La clase No existe</h1>";
}

// Comprobar los metodos que tiene una clase
var_dump(get_class_methods($principal));

