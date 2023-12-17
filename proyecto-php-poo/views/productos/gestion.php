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
        </tr>

    <?php endwhile; ?>
</table>