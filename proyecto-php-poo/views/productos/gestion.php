<h1>Gestión de productos</h1>

<a class="button button-small" href="<?= base_url ?>producto/crear">
    Crear producto
</a>
<?php if (isset($_SESSION['producto']) && $_SESSION['producto'] == 'Complete') : ?>
    <strong class="alert_green"> El producto se ha creado correctamente</strong>
<?php elseif (isset($_SESSION['producto']) && $_SESSION['producto'] != 'Complete') : ?>
    <strong class="alert_red"> El producto no se ha registrado</strong>
<?php endif; ?>
<?php Utils::deleteSession('producto'); ?>

<?php if (isset($_SESSION['editado']) && $_SESSION['editado'] == 'Complete') : ?>
    <strong class="alert_green"> El producto se ha modificado correctamente</strong>
<?php elseif (isset($_SESSION['editado']) && $_SESSION['editado'] != 'Complete') : ?>
    <strong class="alert_red"> El producto no se ha modificado</strong>
<?php endif; ?>
<?php Utils::deleteSession('editado'); ?>

<?php if (isset($_SESSION['delete']) && $_SESSION['delete'] == 'Complete') : ?>
    <strong class="alert_green"> El producto se ha borrado</strong>
<?php elseif (isset($_SESSION['producto']) && $_SESSION['producto'] != 'Complete') : ?>
    <strong class="alert_red"> El producto no se ha borrado</strong>
<?php endif; ?>
<?php Utils::deleteSession('delete'); ?>
<table>
    <tr>
        <th>
            Id
        </th>
        <th>
            Nombre
        </th>
        <th>
            Precio
        </th>
        <th>
            Stock
        </th>
        <th>Acciones</th>
    </tr>
    <?php while ($pro = $productos->fetch_object()) : ?>
        <tr>
            <td>
                <?= $pro->id; ?>
            </td>
            <td>
                <?= $pro->nombre; ?>
            </td>
            <td>
                <?= $pro->precio; ?>
            </td>
            <td>
                <?= $pro->stock; ?>
            </td>
            <td>
                <a href="<?= base_url ?>producto/editar&id=<?= $pro->id ?>" class="button button-gestion">Editar</a>
                <a href="<?= base_url ?>producto/eliminar&id=<?= $pro->id ?>" class="button button-gestion button-red">Eliminar</a>
            </td>
        </tr>

    <?php endwhile; ?>
</table>