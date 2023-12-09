<h1>Gestionar categorias</h1>
<a class="button button-small" href="<?= base_url ?>categoria/crear">
    Crear categoría
</a>
<table>
    <tr>
        <th>
            Id
        </th>
        <th>
            Nombre
        </th>
    </tr>
    <?php while ($cat = $categorias->fetch_object()) : ?>
        <tr>
            <td>
                <?= $cat->id; ?>
            </td>
            <td>
                <?= $cat->nombre; ?>
            </td>
        </tr>

    <?php endwhile; ?>
</table>