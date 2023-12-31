<?php require_once 'includes/redireccion.php';?>
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


<div class="principal">
    <h1>Editar entrada</h1>
    <p>
       Edita tu entrada <?=$entrada_actual['titulo']?>
    </p>
    <br/>
    <!-- Añadimos un flag al formulario para parovechar guardar-entrada.php -->
    <form action="guardar-entrada.php?editar=<?=$entrada_actual['id']?>" method="POST">
        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo" value="<?=$entrada_actual['titulo']?>"/>
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'titulo') : '';?>


        <label for="descripcion">Descripción</label>
        <textarea  name="descripcion"><?=$entrada_actual['descripcion']?></textarea>
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'descripcion') : '';?>

        <label for="categoria">Categoría:</label>
        <select name="categoria">
            
            <?php
                // la siguiente función se hereda de cabecera
                $categorias = conseguirCategorias($db);
                // Si no esta vacio $categorias
                if(!empty($categorias)):
                while($categoria = mysqli_fetch_assoc($categorias)) :
            ?>
            <!-- la option se quedará en selected si se cumple la condición -->
                <option value="<?=$categoria['id']?>" <?=($categoria['id'] == $entrada_actual['categoria_id'])? 'selected="selected"' : '' ?>>
                    <?=$categoria['nombre']?>
                </option>
            <?php 
                endwhile;
                endif;
            ?>
        </select>
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'categoria') : '';?>

        <input type="submit" value="Guardar"/>
    </form>
    <?php borrarErrores();?>
</div>


<?php require_once 'includes/pie.php';?>