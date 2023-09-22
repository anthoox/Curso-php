<?PHP
if(isset($_GET['titulo']) && isset($_GET['descripcion'])){
    echo "<h1>" . $_GET['titulo'] . "</h1>";
    echo "<h1>" . $_GET['descripcion'] . "</h1>";
}

if(isset($_POST['titulo']) && isset($_POST['descripcion'])){
    echo "<h1>" . $_POST['titulo'] . "</h1>";
    echo "<h1>" . $_POST['descripcion'] . "</h1>";
}