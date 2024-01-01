<?php if (isset($_SESSION['identity'])) : ?>
    <h1>Hacer pedido</h1>
    <h3>Dirección para el envio</h3>
    <a href="<?= base_url ?>carrito/index">Ver los productos y el precio del pedido</a>
    <br />
    <form action="<?= base_url ?>/pedido/add" method="POST">
        <label for="provincia">Provincia</label>
        <input type="text" name="provincia" required />

        <label for="localidad">Ciudad</label>
        <input type="text" name="localidad" required />

        <label for="direccion">Dirección</label>
        <input type="text" name="direccion" required />

        <input type="submit" value="Confirmar" />

    </form>

<?php else : ?>
    <h1>Necesitas estas identificado</h1>
    <p>Necesitas estas logeado en la web para poder realizar tu pedido.</p>
<?php endif; ?>