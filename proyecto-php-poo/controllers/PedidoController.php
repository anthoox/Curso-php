<?php
require_once 'models/pedido.php';
class PedidoController
{
    public function hacer()
    {
        require_once 'views/pedido/hacer.php';
    }

    public function add()
    {
        // var_dump($_POST);
        if (isset($_SESSION['identity'])) {
            $usuario_id = $_SESSION['identity']->id;
            $provincia = isset($_POST['provincia']) ? $_POST['provincia'] : false;
            $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : false;
            $localidad = isset($_POST['localidad']) ? $_POST['localidad'] : false;

            $stats = Utils::statsCarrito();
            $coste = $stats['total'];
            // Guardar en la bd
            if ($provincia && $direccion && $localidad) {
                $pedido = new Pedido();
                $pedido->setUsuario_id($usuario_id);
                $pedido->setProvincia($provincia);
                $pedido->setDireccion($direccion);
                $pedido->setLocalidad($localidad);
                $pedido->setCoste($coste);

                $save = $pedido->save();

                // Guardar linea pedido
                $save_linea = $pedido->save_linea();

                if ($save && $save_linea) {
                    $_SESSION['pedido'] = "completed";
                } else {
                    $_SESSION['pedido'] = "failed";
                }
            } else {
                $_SESSION['pedido'] = "failed";
            }

            header(('Location:' . base_url . 'pedido/confirmado'));
        } else {
            // Redirigir
            header('Location' . base_url);
        }
    }

    public function confirmado()
    {
        if (isset($_SESSION['identity'])) {
            $identity = $_SESSION['identity'];

            $pedido = new Pedido();
            $pedido->setUsuario_id($identity->id);

            $pedido = $pedido->getOneByUser();

            $pedido_productos = new Pedido();

            $productos = $pedido_productos->getProductosByPedido($pedido->id);
        }

        require_once 'views/pedido/confirmado.php';
    }

    public function misPedidos()
    {
        Utils::isIdentity();

        $pedido = new Pedido();
        $usuario_id = $_SESSION['identity']->id;

        // Sacar los pedidos del usuario
        $pedido->setUsuario_id($usuario_id);
        $pedidos = $pedido->getAllByUser();

        require_once 'views/pedido/mis_pedidos.php';
    }

    public function detalle()
    {
        Utils::isIdentity();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            // Sacar datos del pedido
            $pedido = new Pedido();
            $pedido->setId($id);

            $pedido = $pedido->getOne();

            // Sacar los productos
            $pedido_productos = new Pedido();
            $productos = $pedido_productos->getProductosByPedido($id);

            require_once 'views/pedido/detalle.php';
        } else {
            header('Location:' . base_url . 'pedido/mis_pedidos');
        }
    }

    public function gestion()
    {
        Utils::isAdmin();
        $gestion = true;

        $pedido = new Pedido();
        $pedido->getAll();

        require_once 'views/pedido/mis_pedidos.php';
    }

    public function estado(){
        Utils::isAdmin();

        if(isset($_POST['pedido_id']) && isset($_POST['estado'])){

            $id = $_POST['pedido_id'];
            $estado = $_POST['estado'];

            //  Update del pedido
            $pedido = new Pedido();
            $pedido->setId($id);
            $pedido->setEstado($estado);
            $pedido->edit();

            header("Location:".base_url.'pedido/detalle&id='.$id);        

        }else{
            header("Location:".base_url);        
        }
    }
}
