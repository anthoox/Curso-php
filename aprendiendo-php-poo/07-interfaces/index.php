<?php
/*
 * Es un contrato en el que se define que metodos y en que orden van a estar en la clase.
 * Cuando se implemente una interfaz en una clase se debe cumplir
 */
interface Ordenadores
{
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
    public function detectarUse();

}

// Si se implementa la interfaz y no se añaden los métodos de la interfaz daría error.
class iMac implements Ordenadores
{

    public $modelo;

    function getModelo()
    {
        return $this->modelo;
    }
    function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function encender()
    {

    }

    public function apagar()
    {

    }

    public function reiniciar()
    {

    }

    public function desfragmentar()
    {

    }

    public function detectarUse()
    {

    }

}

$maquintos = new iMac();
$maquintos->setModelo("MacBookPro2019");
echo $maquintos->getModelo();