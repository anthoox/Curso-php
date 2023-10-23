<?php
/*
 * Los métodos estatiso son propiedades que para llamarlos no hace falta instanciar un objeto de la clase 
 */
class Configuracion
{

    public static $color;
    public static $newsletter;
    public static $entorno;


    public static function getColor()
    {
        return self::$color;
    }

    public static function getNewsletter()
    {
        return self::$newsletter;
    }

    public static function getEntorno()
    {
        return self::$entorno;
    }

    public static function setcolor($color)
    {
        self::$color = $color;
    }

    public static function setNewsletter($newsletter)
    {
        self::$newsletter = $newsletter;
    }

    public static function setEntorno($entorno)
    {
        self::$entorno = $entorno;
    }




}