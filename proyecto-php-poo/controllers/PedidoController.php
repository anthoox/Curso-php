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
        require_once 'views/pedido/confirmado.php';
    }
}
