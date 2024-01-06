<?php if (isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'completed') : ?>

    <h1>Tu pedido se ha confirmado</h1>
    <p>Tu pedido ha sido guardado con éxito. Una vez que realices la transferencia bancaria con el coste del pedido, será procesado y enviado.</p>
<?php elseif (isset($_SESSION['pedido']) && $_SESSION['pedido'] != 'completed') : ?>
    <h1>Tu pedido no ha podido procesarse</h1>

<?php endif; ?>