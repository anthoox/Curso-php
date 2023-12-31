<h1>Productos algunos de nuestros productos</h1>
<?php while ($product = $productos->fetch_object()) : ?>
    <div class="product">
        <a href="<?= base_url ?>producto/ver&id=<?= $product->id ?>">
            <?php if ($product->imagen != null) : ?>
                <img src="<?= base_url ?>uploads/images/<?= $product->imagen ?>" />
            <?php else : ?>
                <img src="<?= base_url ?>assets/img/camiseta.png" />
            <?php endif; ?>
            <h2><?= $product->nombre ?></h2>
        </a>
        <p><?= $product->precio ?></p>
        <a class="button" href="<?= base_url ?>carrito/add&id=<?= $product->id ?>">Comprar</a>
    </div>
<?php endwhile; ?>
<!-- <div class="product">
    <img src="assets/img/camiseta.png" />
    <h2>Camiseta Azul Ancha</h2>
    <p>30 Euros</p>
    <a class="button" href="">Comprar</a>
</div>/