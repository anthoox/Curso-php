<?php
class Categoria
{

    private $id;
    private $nombre;

    // Creamos el atributo para la conexión a la base de datos
    private $db;

    public function __construct()
    {
        // Se establece la conexión a la base de datos. La base de datos se importa en index.
        $this->db = DataBase::connect();
    }


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getNombre()
    {
        return $this->nombre;
    }


    public function setNombre($nombre)
    {
        $this->nombre = $this->db->real_escape_string($nombre);
        return $this;
    }

    // Método para listar todas las categorias
    public function getAll()
    {
        $categorias = $this->db->query("SELECT * FROM categorias ORDER BY id DESC;");
        return $categorias;
    }

    public function getOne()
    {
        $categoria = $this->db->query("SELECT * FROM categorias WHERE id={$this->getId()};");
        return $categoria->fetch_object();
    }

    // Método para guardar una nueva categoría
    public function save()
    {
        $sql = "INSERT INTO categorias VALUES(null, '{$this->getNombre()}');";
        $save = $this->db->query($sql);

        $result = false;
        if ($save) {
            $result = true;
        }

        return $result;
    }
}
