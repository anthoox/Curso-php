<?php require_once 'includes/conexion.php'; ?>        
<?php require_once 'includes/helpers.php';?>

<?php 
    // Si se pasa una entrada que no existe hacemos una redirección
    $entrada_actual = conseguirEntrada($db, $_GET['id']);
    if(!isset($entrada_actual['id'])){
        header("Location: index.php");
    }
?>
<?php require_once 'includes/cabecera.php'; ?>        
<?php require_once 'includes/lateral.php';?>

<!-- CAJA PRINCIPAL -->
<div class="principal">

    <h1>
        <?=$entrada_actual['titulo']?>
    </h1>
    <a href="categoria.php?id=<?=$entrada_actual['categoria_id']?>">
    <h2>
        <?=$entrada_actual['categoria']?>
    </h2>
    </a>
    <p>
        <?=$entrada_actual['descripcion']?>
    </p>
    <h4>
        <?=$entrada_actual['fecha']?>
    </h4>
   
</div>

        
<?php require_once 'includes/pie.php';?>