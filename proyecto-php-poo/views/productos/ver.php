<?php if (isset($product)) : ?>
    <h1><?= $product->nombre ?></h1>
    <div id="detail-product">
        <div class="image">
            <?php if ($product->imagen != null) : ?>
                <img src="<?= base_url ?>uploads/images/<?= $product->imagen ?>" />
            <?php else : ?>
                <img src="<?= base_url ?>assets/img/camiseta.png" />
            <?php endif; ?>
        </div>
        <div class="data">
            <h2><?= $product->nombre ?></h2>
            </a>
            <p class="description"><?= $product->descripcion ?></p>
            <p class="price"><?= $product->precio ?>€</p>
            <a class="button" href="<?= base_url ?>carrito/add&id=<?= $product->id ?>">Comprar</a>
        </div>
    </div>
<?php else : ?>
    <h1>El producto no existe</h1>
<?php endif; ?>