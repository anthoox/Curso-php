<!-- BARRA LATERAL -->
<aside id="lateral">
    <div id="login" class="block_aside">

        <?php if (!isset($_SESSION['identity'])) : ?>
            <h3>Entrar en la web</h3>
            <form action="<?= base_url ?>usuario/login" method="POST">
                <label for="email">Email</label>
                <input type="email" name="email" />

                <label for="password">Contraseña</label>
                <input type="password" name="password" />

                <input type="submit" value="Enviar" />
            </form>
        <?php else : ?>
            <h3><?= $_SESSION['identity']->nombre ?> <?= $_SESSION['identity']->apellidos ?></h3>
        <?php endif; ?>
        <ul>
            <!-- Esto se muestra si la sesión de admin existe -->
            <?php if (isset($_SESSION['admin'])) : ?>
                <li>
                    <a href="<?= base_url ?>categoria/index">Gestionar categorías</a>
                </li>
                <li>
                    <a href="<?= base_url ?>producto/gestion">Gestionar productos</a>
                </li>
                <li>
                    <a href="#">Gestionar pedidos</a>
                </li>
            <?php endif; ?>
            <!-- Esto se muestra con cualquier usuario -->
            <?php if (isset($_SESSION['identity'])) : ?>
                <li>
                    <a href="#">Mis pedidos</a>
                </li>
                <li>
                    <a href="<?= base_url ?>usuario/logout">Cerra sesión</a>
                </li>
            <?php else : ?>
                <li>
                    <a href="<?= base_url ?>usuario/registro">Registrate aquí</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</aside>
<!-- CONTENIDO CENTRAL -->
<main id="central">